<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Length;

class VoorleggerMeterstandenEnergieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('meterstandenEnergieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('meterstandenEnergieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('meterstandenEnergieNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('file', FileType::class, [
            'required' => false,
            'mapped' => false
        ]);
        $builder->add('fileNaam', TextType::class, [
            'required' => false,
            'mapped' => false,
            'constraints' => [
                new Length(['min' => 1, 'max' => 255])
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}