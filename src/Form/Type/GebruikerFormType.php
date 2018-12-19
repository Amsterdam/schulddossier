<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

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
        $builder->add('naam', TextType::class, [
            'required' => true
        ]);
        $builder->add('email', EmailType::class, [
            'required' => true,
        ]);
        $builder->add('username', TextType::class, [
            'required' => true
        ]);
        $builder->add('clearPassword', RepeatedType::class, [
            'required' => false,
            'type' => PasswordType::class,
            'first_options' => ['label' => 'Wachtwoord'],
            'second_options' => ['label' => 'Wachtwoord (herhaal)'],
        ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'expanded' => false,
            'multiple' => false,
            'class' => Team::class
        ]);
        $builder->add('schuldhulpbureau', EntityType::class, [
            'required' => false,
            'expanded' => false,
            'multiple' => false,
            'class' => Schuldhulpbureau::class
        ]);
        $builder->add('enabled', CheckboxType::class, [
            'required' => false,
            'label' => 'Account actief?'
        ]);

        $user = $this->security->getUser();

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            if ($event->getForm()->get('clearPassword')->getData() !== null && $event->getForm()->get('clearPassword')->getData() !== '') {
                $event->getData()->setPasswordChangedDateTime(new \DateTime());
            }
        });
        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) use ($user) {
            $gebruiker = $event->getData();
            $form = $event->getForm();
            $form->add('type', ChoiceType::class, [
                'required' => true,
                'choices' => Gebruiker::getTypes($user->getType()),
            ]);
        });
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($user) {
            $gebruiker = $event->getData();
            $form = $event->getForm();
            $form->add('type', ChoiceType::class, [
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
