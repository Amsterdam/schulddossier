<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerToelichtingAanvraagSchuldsaneringShvFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('ontstaanVanSchulden', ChoiceType::class, [
            'required' => false,
            'choices' => $this->getOntstaanVanSchuldenOptions(),
            'empty_data' => null,
            'placeholder' => 'Selecteer een optie',
            'help' => 'DB: voorlegger.ontstaan_van_schulden'
        ]);

        $builder->add('inspanningsverplichting', ChoiceType::class, [
            'required' => false,
            'choices' => $this->getInspanningsverplichting(),
            'empty_data' => null,
            'placeholder' => 'Selecteer een optie',
            'help' => 'DB: voorlegger.inspanningsverplichting'
        ]);

        $builder->add('toelichtingAanvraagSchuldsaneringShvOntvangenShv', ShvStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('toelichtingAanvraagSchuldsaneringShvOntvangenGka', GkaStatusFormType::class, [
            'required' => true,
            'disabled' => $options['disable_group'] === 'shv'
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

    private function getOntstaanVanSchuldenOptions()
    {
        return [
            'Overlevingsschulden' => 'OVERLEVING',
            'Compensatieschulden' => 'COMPENSATIE',
            'Aanpassingsschulden' => 'AANPASSING',
            'Overkrediterings of bestedingsschulden' => 'OVERKREDITERING',
        ];
    }

    private function getInspanningsverplichting()
    {
        return [
            'Naar maximaal vermogen werkzaam' => 'MAXIMAAL_VERMOGEN',
            'Niet naar maximaal vermogen werkzaam, sollicitatieplicht, hogere aflossingscapaciteit verwacht' => 'HOGE_CAPACITEIT',
            'Niet naar maximaal vermogen werkzaam, sollicitatieplicht, geen hogere aflossingscapaciteit verwacht' => 'LAGE_CAPACITEIT',
            'Niet in staat om werk te verrichten voor de looptijd van de schuldregeling' => 'GEEN_WERK',
        ];
    }
}
