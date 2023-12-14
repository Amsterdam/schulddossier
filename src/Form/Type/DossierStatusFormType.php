<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

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

//        $resolver = new OptionsResolver();
//        var_dump($options);
//
//        $this->options = $resolver->resolve($options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
//        $choices = [];
//        //var_dump($this['data']);
//        //$dossier = $options['data'];
//
//
//        switch ($this->user->getType()) {
//            case Gebruiker::TYPE_SHV_KEYUSER:
//                $choices = [
//                    'bezig_shv' => Dossier::STATUS_BEZIG_SHV,
//                    'compleet_shv' => Dossier::STATUS_COMPLEET_SHV,
//                    'gecontroleerd_shv' => Dossier::STATUS_GECONTROLEERD_SHV,
//                ];
//                break;
//            case Gebruiker::TYPE_GKA_APPBEHEERDER:
//                $choices = [
//                    'verzonden_shv' => Dossier::STATUS_VERZONDEN_SHV,
//                    'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
//                    'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
//                    'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
//                ];
//                break;
//            case Gebruiker::TYPE_ADMIN:
//                $choices = [
//                    'bezig_shv' => Dossier::STATUS_BEZIG_SHV,
//                    'compleet_shv' => Dossier::STATUS_COMPLEET_SHV,
//                    'gecontroleerd_shv' => Dossier::STATUS_GECONTROLEERD_SHV,
//                    'verzonden_shv' => Dossier::STATUS_VERZONDEN_SHV,
//                    'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
//                    'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
//                    'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
//                ];
//                break;
//            case Gebruiker::TYPE_SHV:
//                $choices = [
//                    'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
//                ];
//                break;
//        }
//        $resolver->setDefault('choices', $choices);
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
