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
            'required' => true,
            'help' => 'DB: schuldeiser.bedrijfsnaam',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);

        $builder->add('enabled', CheckboxType::class, [
            'label' => 'Actief',
            'required' => false,
            'help' => 'DB: schuldeiser.enabled',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);

        $builder->add('rekening', TextType::class, [
            'required' => false,
            'help' => 'DB: schuldeiser.rekening',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('straat', TextType::class, [
            'label' => 'Straat *',
            'required' => true,
            'help' => 'DB: schuldeiser.straat',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('huisnummer', TextType::class, [
            'label' => 'Huisnummer *',
            'required' => true,
            'help' => 'DB: schuldeiser.huisnummer',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('huisnummerToevoeging', TextType::class, [
            'required' => false,
            'help' => 'DB: schuldeiser.huisnummer_toevoeging',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('postcode', TextType::class, [
            'label' => 'Postcode *',
            'required' => true,
            'help' => 'DB: schuldeiser.postcode',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('plaats', TextType::class, [
            'label' => 'Plaats *',
            'required' => true,
            'help' => 'DB: schuldeiser.plaats',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('allegroCode', TextType::class, [
            'required' => false,
            'help' => 'DB: schuldeiser.allegro_code',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
        $builder->add('opmerkingen', TextareaType::class, [
            'required' => false,
            'help' => 'DB: schuldeiser.opmerkingen',
            'attr' => [
                'disabled' => 'disabled',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Schuldeiser::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
