<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerMeterstandenEnergieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('meterstandenEnergieOntvangenShv', ShvStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('meterstandenEnergieOntvangenGka', GkaStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'shv'
        ]);
        $builder->add('meterstandenEnergieNvt', CheckboxType::class, [
            'required' => false,
            'label' => "Schuld energiebedrijf n.v.t."
        ]);

        $builder->add('energieBedrijf', TextType::class, [
            'required' => false,
            'label' => "Huidig energiebedrijf",
            'help' => 'DB: energie_bedrijf'
        ]);
        $builder->add('energieBedrijfKlantnummer', TextType::class, [
            'required' => false,
            'label' => "Klantnummer",
            'help' => 'DB: energie_bedrijf_klantnummer'
        ]);
        $builder->add('energieBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => "Datum opname",
            'help' => 'DB: energie_bedrijf_datum_opname'
        ]);
        $builder->add('energieBedrijfT1', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Elektriciteit T1",
            'help' => 'DB: energie_bedrijf_t1'
        ]);
        $builder->add('energieBedrijfT2', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Elektriciteit T2",
            'help' => 'DB: energie_bedrijf_t2'
        ]);
        $builder->add('energieBedrijfGas', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Gas",
            'help' => 'DB: energie_bedrijf_gas'
        ]);
        $builder->add('warmteBedrijf', TextType::class, [
            'required' => false,
            'label' => "Warmtebedrijf",
            'help' => 'DB: warmte_bedrijf'
        ]);
        $builder->add('warmteBedrijfKlantnummer', TextType::class, [
            'required' => false,
            'label' => "Klantnummer (warmtebedrijf)",
            'help' => 'DB: warmte_bedrijf_klantnummer'
        ]);
        $builder->add('warmteBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => "Datum opname (warmtebedrijf)",
            'help' => 'DB: warmte_bedrijf_datum_opname'
        ]);
        $builder->add('warmteBedrijfOpname', NumberType::class, [
            'required' => false,
            'label' => "Meterstand Warmte",
            'help' => 'DB: warmte_bedrijf_opname'
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

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event): void {
            $data = $event->getData();
            unset($data['file']['__name__']);
            unset($data['removeFile']['__name__']);
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
