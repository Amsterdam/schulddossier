<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

class ShvStatusFormType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('choices', [
            'open' => Voorlegger::STATUS_SHV_OPEN,
            'bezig' => Voorlegger::STATUS_SHV_BEZIG,
            'opgevoerd' => Voorlegger::STATUS_SHV_OPGEVOERD,
            'gecontroleerd' => Voorlegger::STATUS_SHV_GECONTROLEERD,
        ]);
        $resolver->setDefault('choice_translation_domain', 'shv_status_form');
        $resolver->setDefault('translation_domain', 'shv_status_form');
        $resolver->setDefault('multiple', false);
        $resolver->setDefault('expanded', true);
        $resolver->setDefault('required', true);
    }

    public function getParent(): ?string
    {
        return ChoiceType::class;
    }
}
