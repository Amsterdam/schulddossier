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
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerMeterstandenEnergieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('meterstandenEnergieOntvangenMadi', MadiStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('meterstandenEnergieOntvangenGka', GkaStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('meterstandenEnergieNvt', CheckboxType::class, [
            'required' => false,
            'label' => "Schuld energiebedrijf n.v.t."
        ]);

        $builder->add('energieBedrijf', TextType::class, [
            'required' => false,
            'label' => "Huidig energiebedrijf"
        ]);
        $builder->add('energieBedrijfKlantnummer', TextType::class, [
            'required' => false,
            'label' => "Klantnummer"
        ]);
        $builder->add('energieBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => "Datum opname"
        ]);
        $builder->add('energieBedrijfT1', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Elektriciteit T1"
        ]);
        $builder->add('energieBedrijfT2', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Elektriciteit T2"
        ]);
        $builder->add('energieBedrijfGas', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Gas"
        ]);
        $builder->add('warmteBedrijf', TextType::class, [
            'required' => false,
            'label' => "Warmtebedrijf"
        ]);
        $builder->add('warmteBedrijfKlantnummer', TextType::class, [
            'required' => false,
            'label' => "Klantnummer (warmtebedrijf)"
        ]);
        $builder->add('warmteBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => "Datum opname (warmtebedrijf)"
        ]);
        $builder->add('warmteBedrijfOpname', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Warmte"
        ]);

        $builder->add('file', CollectionType::class, [
            'mapped' => false,
            'entry_type' => DocumentFormType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'allow_delete' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
            'constraints' => [
                new Valid()
            ]
        ]);
        $builder->add('removeFile', CollectionType::class, [
            'mapped' => false,
            'entry_type' => HiddenType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
        ]);
        $builder->add('aantekening', CreateAantekeningFormType::class, [
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new Valid()
            ]
        ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            unset($data['file']['__name__']);
            unset($data['removeFile']['__name__']);
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
