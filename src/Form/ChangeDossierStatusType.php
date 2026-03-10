<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Workflow\Registry as WorkflowRegistry;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Workflow\Workflow;

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
            $workflow = $this->workflowRegistry->get($dossier);
            $transitionChoices = $this->getTransitionChoices($this->user, $dossier, $workflow);

            $form->add('transition', ChoiceType::class, [
                'label' => 'Wijzig status naar',
                'mapped' => false,
                'required' => false,
                'multiple' => false,
                'expanded' => true,
                'placeholder' => false,
                'choices' => $transitionChoices,
                'choice_attr' => [
                    'Ter controle aanbieden' => [
                        'data-popup' => 'modal',
                        'data-root' => '#voorlegger_form',
                        'data-content-id' => 'shv-controlle-dialoog'
                        ]
                ],
            ]);

            $form->add('status', ChoiceType::class, [
                'label' => 'Wijzig status naar',
                'choices' => [
                     'bezig_shv' => Dossier::STATUS_BEZIG_SHV,
                     'compleet_shv' => Dossier::STATUS_COMPLEET_SHV,
                     'gecontroleerd_shv' => Dossier::STATUS_GECONTROLEERD_SHV,
                     'verzonden_shv' => Dossier::STATUS_VERZONDEN_SHV,
                     'compleet_gka' => Dossier::STATUS_COMPLEET_GKA,
                     'dossier_gecontroleerd_gka' => Dossier::STATUS_DOSSIER_GECONTROLEERD_GKA,
                     'afgesloten_gka' => Dossier::STATUS_AFGESLOTEN_GKA,
                 ],
            ]);
        });
    }

    public function getTransitionChoices(Gebruiker $user, Dossier $dossier, Workflow $workflow)
    {
        $transitionChoices = [];

        if ($workflow->can($dossier, 'afkeuren_shv') & !$user->isGka()) {
            $transitionChoices['Afkeuren'] = 'afkeuren_shv';
        }
        if ($workflow->can($dossier, 'afkeuren_dossier_gka') & !$user->isSchuldhulpverlener()) {
            $transitionChoices['Dossier afwijzen (terug naar SHV-er/Bewindvoerder)'] = 'afkeuren_dossier_gka';
        }
        if ($workflow->can($dossier, 'opgevoerd_shv') & !$user->isGka()) {
            $transitionChoices['Ter controle aanbieden'] = 'opgevoerd_shv';
        }
        if ($workflow->can($dossier, 'goedkeuren_shv') & !$user->isGka()) {
            $transitionChoices['Goedkeuren'] = 'goedkeuren_shv';
        }
        if ($workflow->can($dossier, 'verzenden_shv') & !$user->isGka()) {
            $transitionChoices['Verzenden naar GKA'] = 'verzenden_shv';
        }
        if ($workflow->can($dossier, 'gestart_gka') & !$user->isSchuldhulpverlener()) {
            $transitionChoices['Start proces GKA'] = 'gestart_gka';
        }
        if ($workflow->can($dossier, 'goedkeuren_dossier_gka') & !$user->isSchuldhulpverlener()) {
            $transitionChoices['Dossier akkoord'] = 'goedkeuren_dossier_gka';
        }
        if ($workflow->can($dossier, 'afsluiten_gka') & !$user->isSchuldhulpverlener()) {
            $transitionChoices['Afsluiten GKA'] = 'afsluiten_gka';
        }

        return($transitionChoices);
    }
}
