<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class GebruikerFormType extends AbstractType
{
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
        $builder->add('type', ChoiceType::class, [
            'required' => true,
            'choices' => Gebruiker::getTypes()
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
            'required' => false
        ]);

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            if ($event->getForm()->get('clearPassword')->getData() !== null && $event->getForm()->get('clearPassword')->getData() !== '') {
                $event->getData()->setPasswordChangedDateTime(new \DateTime());
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Gebruiker::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}