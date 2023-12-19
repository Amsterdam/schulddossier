<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints\RequiredFieldsWhenAddingNewShvUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class GebruikerFormType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var Gebruiker $user */
        $user = $this->security->getUser();

        $builder->add('naam', TextType::class, [
            'label' => 'Naam *',
            'required' => true
        ]);
        $builder->add('email', EmailType::class, [
            'label' => 'E-mailadres *',
            'required' => true,
        ]);
        $builder->add('telefoonnummer', TextType::class, [
            'required' => false,
        ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'expanded' => false,
            'multiple' => false,
            'class' => Team::class
        ]);
        $builder->add('organisaties', EntityType::class, [
            'label' => 'Organisaties',
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'class' => Organisatie::class,
            'query_builder' => function (EntityRepository $repository) use ($user) {
                $qb = $repository->createQueryBuilder('organisatie');
                if($user->getType() === Gebruiker::TYPE_SHV_KEYUSER){
                    $qb->andWhere('organisatie IN (:organisaties)');
                    $qb->setParameter('organisaties', $user->getOrganisaties());
                }

                return $qb;
            },
        ]);
        $builder->add('enabled', CheckboxType::class, [
            'required' => false,
            'label' => 'Account actief?'
        ]);

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) use ($user) {
            $gebruiker = $event->getData();
            $form = $event->getForm();
            $form->add('type', ChoiceType::class, [
                'label' => 'Type *',
                'required' => true,
                'choices' => Gebruiker::getTypes($user->getType()),
            ]);
        });
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($user) {
            $gebruiker = $event->getData();
            $form = $event->getForm();
            $form->add('type', ChoiceType::class, [
                'label' => 'Type *',
                'required' => true,
                'choices' => Gebruiker::getTypes($user->getType()),
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('constraints', [new RequiredFieldsWhenAddingNewShvUser()]);
        $resolver->setDefault('data_class', Gebruiker::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
