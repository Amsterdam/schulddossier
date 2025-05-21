<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CreateAantekeningFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('tekst', TextareaType::class, [
            'required' => true,
            'label' => 'Aantekening maken *'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', Aantekening::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
