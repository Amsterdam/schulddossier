<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchuldeiserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('bedrijfsnaam', TextType::class, [
            'label' => 'Bedrijfsnaam *',
            'required' => true
        ]);

        $builder->add('enabled', CheckboxType::class, [
            'label' => 'Actief',
            'required' => false
        ]);

        $builder->add('rekening', TextType::class, [
            'required' => false
        ]);
        $builder->add('straat', TextType::class, [
            'label' => 'Straat *',
            'required' => true
        ]);
        $builder->add('huisnummer', TextType::class, [
            'label' => 'Huisnummer *',
            'required' => true
        ]);
        $builder->add('huisnummerToevoeging', TextType::class, [
            'required' => false
        ]);
        $builder->add('postcode', TextType::class, [
            'label' => 'Postcode *',
            'required' => true
        ]);
        $builder->add('plaats', TextType::class, [
            'label' => 'Plaats *',
            'required' => true
        ]);
        $builder->add('allegroCode', TextType::class, [
            'required' => false
        ]);
        $builder->add('opmerkingen', TextareaType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Schuldeiser::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
