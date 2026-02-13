<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CreateAantekeningFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tekst', TextareaType::class, [
            'required' => true,
            'label' => 'Aantekening maken *'
        ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();

            if (isset($data['tekst'])) {
                $data['tekst'] = str_replace('#', '', $data['tekst']);
                $data['tekst'] = strip_tags($data['tekst']);
                }

            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Aantekening::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
