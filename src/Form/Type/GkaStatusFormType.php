<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

class GkaStatusFormType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choices', [
            'open' => Voorlegger::STATUS_GKA_OPEN,
            'opgevoerd' => Voorlegger::STATUS_GKA_OPGEVOERD,
            'gecontroleerd' => Voorlegger::STATUS_GKA_GECONTROLEERD,
        ]);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('multiple', false);
        $resolver->setDefault('expanded', true);
        $resolver->setDefault('required', true);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
