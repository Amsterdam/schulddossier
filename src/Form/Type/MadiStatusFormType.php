<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

class MadiStatusFormType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choices', [
            'open' => Voorlegger::STATUS_MADI_OPEN,
            'bezig' => Voorlegger::STATUS_MADI_BEZIG,
            'opgevoerd' => Voorlegger::STATUS_MADI_OPGEVOERD,
            'gecontroleerd' => Voorlegger::STATUS_MADI_GECONTROLEERD,
        ]);
        $resolver->setDefault('choice_translation_domain', 'madi_status_form');
        $resolver->setDefault('translation_domain', 'madi_status_form');
        $resolver->setDefault('multiple', false);
        $resolver->setDefault('expanded', true);
        $resolver->setDefault('required', true);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
