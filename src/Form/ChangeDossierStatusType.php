<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierStatusFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Class ChangeDossierStatusType
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Form
 */
class ChangeDossierStatusType extends AbstractType
{

    /**
     * @var Gebruiker $user
     */
    private $user;

    public function __construct(TokenStorageInterface $tokenStorage, array $options = [])
    {
        $token = $tokenStorage->getToken();
        $this->user = $token->getUser();
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choices = [];
        $status = $options['data']->getStatus();

        switch ($status) {
            case Dossier::STATUS_BEZIG_MADI;
                $choices = [
                    'Ter controle aanbieden' => Dossier::STATUS_COMPLEET_MADI,
                ];
                break;
            case Dossier::STATUS_COMPLEET_MADI:
                $choices = [
                    'Afkeuren' => Dossier::STATUS_BEZIG_MADI,
                    'Goedkeuren' => Dossier::STATUS_GECONTROLEERD_MADI,
                ];
                break;
            case Dossier::STATUS_GECONTROLEERD_MADI:
                $choices = [
                    'Afkeuren' => Dossier::STATUS_BEZIG_MADI,
                    'Verzenden naar GKA' => Dossier::STATUS_VERZONDEN_MADI,
                ];
                break;
            case Dossier::STATUS_VERZONDEN_MADI:
                $choices = [
                    'Start proces GKA' => Dossier::STATUS_COMPLEET_GKA,
                ];
                break;
            case Dossier::STATUS_COMPLEET_GKA:
                $choices = [
                    'Dossier akkoord' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                    'Dossier afwijzen (terug naar MaDi)' => Dossier::STATUS_BEZIG_MADI,
                ];
                break;
            case Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA:
                $choices = [
                    'Afsluiten GKA' => Dossier::STATUS_AFGESLOTEN_GKA,
                ];
                break;
        }

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
        $builder
            ->add('status', ChoiceType::class, [
                'label' => 'Wijzig status naar',
                'choices' => $choices,
            ]);

    }
}
