<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints\RequiredFieldsWhenAddingNewMadiUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
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
        $builder->add('schuldhulpbureaus', EntityType::class, [
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'class' => Schuldhulpbureau::class,
            'query_builder' => function (EntityRepository $repository) use ($user) {
                $qb = $repository->createQueryBuilder('schuldhulpbureau');
                if($user->getType() === Gebruiker::TYPE_MADI_KEYUSER){
                    $qb->andWhere('schuldhulpbureau IN (:bureaus)');
                    $qb->setParameter('bureaus', $user->getSchuldhulpbureaus());
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
        $resolver->setDefault('constraints', [new RequiredFieldsWhenAddingNewMadiUser()]);
        $resolver->setDefault('data_class', Gebruiker::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
