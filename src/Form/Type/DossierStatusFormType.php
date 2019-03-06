<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DossierStatusFormType extends AbstractType
{
    /**
     * @var Gebruiker $user
     */
    private $user;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $token = $tokenStorage->getToken();
        $this->user = $token->getUser();
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $choices = [];
        switch ($this->user->getType()) {
            case Gebruiker::TYPE_MADI_KEYUSER:
                $choices = [
                    'bezig_madi' => Dossier::STATUS_BEZIG_MADI,
                    'compleet_madi' => Dossier::STATUS_COMPLEET_MADI,
                    'gecontroleerd_madi' => Dossier::STATUS_GECONTROLEERD_MADI,
                ];
                break;
            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                $choices = [
                    'verzonden_madi' => Dossier::STATUS_VERZONDEN_MADI,
                    'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
                    'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                    'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
                ];
                break;
            case Gebruiker::TYPE_ADMIN:

                $choices = [
                    'bezig_madi' => Dossier::STATUS_BEZIG_MADI,
                    'compleet_madi' => Dossier::STATUS_COMPLEET_MADI,
                    'gecontroleerd_madi' => Dossier::STATUS_GECONTROLEERD_MADI,
                    'verzonden_madi' => Dossier::STATUS_VERZONDEN_MADI,
                    'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
                    'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                    'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
                ];
                break;
        }


        $resolver->setDefault('choices', $choices);
        $resolver->setDefault('choice_translation_domain', true);
        $resolver->setDefault('multiple', false);
        $resolver->setDefault('expanded', false);
        $resolver->setDefault('required', true);
    }

    /**
     * @return string
     */
    public function getParent(): string
    {
        return ChoiceType::class;
    }
}
