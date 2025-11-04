<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDossierAdditionalFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientTelefoonnummer', TextType::class, [
            'label' => 'Telefoonnummer *',
            'required' => false
        ]);

        $builder->add('clientEmail', TextType::class, [
            'label' => 'E-mailadres *',
            'required' => false
        ]);

        $builder->add('clientStraat', TextType::class, [
            'label' => 'Straat',
            'required' => false
        ]);

        $builder->add('clientHuisnummer', TextType::class, [
            'label' => 'Huisnummer',
            'required' => false
        ]);

        $builder->add('clientPostcode', TextType::class, [
            'label' => 'Postcode',
            'required' => false
        ]);

        $builder->add('clientWoonplaats', TextType::class, [
            'label' => 'Woonplaats',
            'required' => false
        ]);

        $builder->add('clientBurgelijkeStaat', ChoiceType::class, [
            'label' => 'Burgerlijke staat',
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getBurgelijkeStaatOpties()
        ]);

        $builder->add('clientBurgelijkeStaatSinds', DateType::class, [
            'label' => 'Burgerlijke staat sinds',
            'required' => false,
            'html5' => true,
            'widget' => 'single_text',
        ]);

        $builder->add('clientKinderen', CollectionType::class, [
            'label' => 'Geboortedatum inwonende kind(eren)',
            'allow_add' => true,
            'delete_empty' => true,
            'allow_delete' => true,
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
