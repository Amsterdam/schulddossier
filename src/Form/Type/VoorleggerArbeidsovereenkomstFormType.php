<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Constants\DossierFormLabel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerArbeidsovereenkomstFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('arbeidsovereenkomstOntvangenShv', ShvStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('arbeidsovereenkomstOntvangenGka', GkaStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'shv'
        ]);
        $builder->add('arbeidsovereenkomstNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('arbeidsovereenkomstWerkgever', TextType::class, [
            'label' => DossierFormLabel::getFormLabel('arbeidsovereenkomstWerkgever'),
            'required' => false,
            'help' => 'DB: voorlegger.arbeidsovereenkomst_werkgever'
        ]);
        $builder->add('arbeidsovereenkomstContract', ChoiceType::class, [
            'label' => DossierFormLabel::getFormLabel('arbeidsovereenkomstContract'),
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Voorlegger::getContractOpties(),
            'help' => 'DB: voorlegger.arbeidsovereenkomst_contract'
        ]);
        $builder->add('arbeidsovereenkomstEinddatum', DateType::class, [
            'label' => DossierFormLabel::getFormLabel('arbeidsovereenkomstEinddatum'),
            'required' => true,
            'html5' => true,
            'widget' => 'single_text',
            'help' => 'DB: voorlegger.arbeidsovereenkomst_einddatum'
        ]);
        $builder->add('arbeidsovereenkomstPartnerWerkgever', TextType::class, [
            'label' => 'Werkgever',
            'required' => false,
            'help' => 'DB: voorlegger.arbeidsovereenkomst_partner_werkgever'
        ]);
        $builder->add('arbeidsovereenkomstPartnerContract', ChoiceType::class, [
            'label' => 'Soort dienstverband',
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Voorlegger::getContractOpties(),
            'help' => 'DB: voorlegger.arbeidsovereenkomst_partner_contract'
        ]);
        $builder->add('arbeidsovereenkomstPartnerEinddatum', DateType::class, [
            'label' => 'Einddatum dienstverband (indien van toepassing)',
            'required' => true,
            'html5' => true,
            'widget' => 'single_text',
            'help' => 'DB: voorlegger.arbeidsovereenkomst_partner_einddatum'
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
