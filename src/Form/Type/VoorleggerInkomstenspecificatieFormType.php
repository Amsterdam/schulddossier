<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerInkomstenspecificatieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('inkomstenspecificatieOntvangenShv', ShvStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('inkomstenspecificatieOntvangenGka', GkaStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'shv'
        ]);

        $builder->add('beschikkingInkomenUitWerk', CheckboxType::class, [
            'label' => 'Inkomen uit werk',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_inkomen_uit_werk'
        ]);
        $builder->add('beschikkingUwvZw', CheckboxType::class, [
            'label' => 'UWV ZW',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_uwv_zw',
        ]);
        $builder->add('beschikkingUwvWw', CheckboxType::class, [
            'label' => 'UWV WW',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_uwv_ww',
        ]);
        $builder->add('beschikkingUwvWia', CheckboxType::class, [
            'label' => 'UWV Wia',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_uwv_wia',
        ]);
        $builder->add('beschikkingUwvWajong', CheckboxType::class, [
            'label' => 'UWV Wajong',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_uwv_wajong',
        ]);
        $builder->add('beschikkingGemeenteAmsterdamWPI', CheckboxType::class, [
            'label' => 'Gemeente Amsterdam (WPI)',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_gemeente_amsterdam_wpi',
        ]);
        $builder->add('beschikkingSVBAOW', CheckboxType::class, [
            'label' => 'SVB (AOW)',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_svbaow',
        ]);
        $builder->add('beschikkingSVBANW', CheckboxType::class, [
            'label' => 'SVB (ANW)',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_svbanw',
        ]);
        $builder->add('beschikkingGemeenteAmsterdamIOAW', CheckboxType::class, [
            'label' => 'Gemeente Amsterdam (IOAW)',
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_gemeente_amsterdam_ioaw',
        ]);

        $builder->add('beschikkingUwvOverig', TextType::class, [
            'required' => false,
            'help' => 'DB: voorlegger.beschikking_uwv_overig',
        ]);

        $combined = array_combine(range(1, 31), range(1, 31));

        $verloningsDagOptions = ['-' => null] + $combined;

        $builder->add('verloningsDag', ChoiceType::class, [
            'required' => true,
            'choices' => $verloningsDagOptions,
            'label' => 'Verloningsmoment',
            'empty_data' => null,
            'help' => 'DB: voorlegger.verlonings_dag',
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