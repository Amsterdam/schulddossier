<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierStatusFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Workflow\Registry as WorkflowRegistry;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

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
    private $workflowRegistry;

    public function __construct(TokenStorageInterface $tokenStorage, ?WorkflowRegistry $registry)
    {
        $token = $tokenStorage->getToken();
        $this->user = $token->getUser();
        $this->workflowRegistry = $registry;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $dossier = $event->getData();
            $status = $dossier->getStatus();
            $workflow = $this->workflowRegistry->get($dossier);

            $choices = [];
            $workflowChoices = [];
            $transitionChoices = [];
            if ($workflow->can($dossier, 'afkeuren_shv')){
                $transitionChoices['Afkeuren'] = 'afkeuren_shv';
            }
            if ($workflow->can($dossier, 'afkeuren_dossier_gka')){
                $transitionChoices['Dossier afwijzen (terug naar SHVer/Bewindvoerder)'] = 'afkeuren_dossier_gka';
            }
            if ($workflow->can($dossier, 'opgevoerd_shv')){
                $transitionChoices['Ter controle aanbieden'] = 'opgevoerd_shv';
            }
            if ($workflow->can($dossier, 'goedkeuren_shv')){
                $transitionChoices['Goedkeuren'] = 'goedkeuren_shv';
            }
            if ($workflow->can($dossier, 'verzenden_shv')){
                $transitionChoices['Verzenden naar GKA'] = 'verzenden_shv';
            }
            if ($workflow->can($dossier, 'gestart_gka')){
                $transitionChoices['Start proces GKA'] = 'gestart_gka';
            }
            if ($workflow->can($dossier, 'goedkeuren_dossier_gka')){
                $transitionChoices['Dossier akkoord'] = 'goedkeuren_dossier_gka';
            }
            if ($workflow->can($dossier, 'afsluiten_gka')){
                $transitionChoices['Afsluiten GKA'] = 'afsluiten_gka';
            }

            switch ($status) {
                case Dossier::STATUS_BEZIG_SHV;
                    $workflowChoices = [
                        'Ter controle aanbieden' => Dossier::STATUS_COMPLEET_SHV,
                    ];
                    break;
                case Dossier::STATUS_COMPLEET_SHV:
                    $workflowChoices = [
                        'Afkeuren' => Dossier::STATUS_BEZIG_SHV,
                        'Goedkeuren' => Dossier::STATUS_GECONTROLEERD_SHV,
                    ];
                    break;
                case Dossier::STATUS_GECONTROLEERD_SHV:
                    $workflowChoices = [
                        'Afkeuren' => Dossier::STATUS_BEZIG_SHV,
                        'Verzenden naar GKA' => Dossier::STATUS_VERZONDEN_SHV,
                    ];
                    break;
                case Dossier::STATUS_VERZONDEN_SHV:
                    $workflowChoices = [
                        'Start proces GKA' => Dossier::STATUS_COMPLEET_GKA,
                    ];
                    break;
                case Dossier::STATUS_COMPLEET_GKA:
                    $workflowChoices = [
                        'Dossier akkoord' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                        'Dossier afwijzen (terug naar SHVer/Bewindvoerder)' => Dossier::STATUS_BEZIG_SHV,
                    ];
                    break;
                case Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA:
                    $workflowChoices = [
                        'Afsluiten GKA' => Dossier::STATUS_AFGESLOTEN_GKA,
                    ];
                    break;
                case Dossier::STATUS_AFGESLOTEN_GKA:
                    $workflowChoices = [
                    ];
                    break;
            }
            if ($this->user->getType() === Gebruiker::TYPE_ADMIN
                ||
                $this->user->getType() === Gebruiker::TYPE_GKA_APPBEHEERDER
                ||
                $this->user->getType() === Gebruiker::TYPE_SHV_KEYUSER){
                    $choices = [
                        'bezig_shv' => Dossier::STATUS_BEZIG_SHV,
                        'compleet_shv' => Dossier::STATUS_COMPLEET_SHV,
                        'gecontroleerd_shv' => Dossier::STATUS_GECONTROLEERD_SHV,
                        'verzonden_shv' => Dossier::STATUS_VERZONDEN_SHV,
                        'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
                        'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                        'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
                    ];
            } else {
                $choices = $workflowChoices;
                $choices[$status] = $status;
            }
            $form->add('transition', ChoiceType::class, [
                'label' => 'Wijzig status naar',
                'mapped' => false,
                'required' => false,
                'multiple' => false,
                'expanded' => true,
                'placeholder' => false,
                'choices' => $transitionChoices,
                'choice_attr' => [
                    'Ter controle aanbieden' => ['data-popup' => 'modal', 'data-root' => '#voorlegger_form', 'data-content-id' => 'shv-controlle-dialoog']
                ],
            ]);
            $form->add('status', ChoiceType::class, [
                'label' => 'Wijzig status naar',
                'choices' => $choices,
            ]);
        });

    }
}
