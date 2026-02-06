<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchLogFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Dropdown for Users
            ->add('gebruiker', EntityType::class, [
                'class' => Gebruiker::class, // Replace with your User entity
                'choice_label' => 'naam', // Replace 'name' with the property to display
                'placeholder' => 'Selecteer een gebruiker',
                'required' => false, // Optional: Allow no selection
            ])
            // Dropdown for Event Types
            ->add('logType', ChoiceType::class, [
                'choices' => [
                    'Gebruiker verwijderd' => ActionEvent::GEBRUIKER_GEWIJZIGD,
                    'Gebruiker ingelog' => ActionEvent::GEBRUIKER_INGELOGD,
                    'Gebruiker verwijderd' => ActionEvent::GEBRUIKER_VERWIJDERD,
                ],
                'placeholder' => 'Select an event type',
                'required' => false, // Optional: Allow no selection
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // No data class since this is a search form
            'csrf_protection' => false, // Optional: Disable CSRF for search forms
        ]);
    }
}
