<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\ChangeDossierStatusType;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\ChangeDossierClientType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Workflow\Registry as WorkflowRegistry;

class VoorleggerFormType extends AbstractType
{

    /**
     * @var Gebruiker $user
     */
    private $user;

    public function __construct(
        private TokenStorageInterface $tokenStorage,
        private WorkflowRegistry $workflowRegistry,
        private EntityManagerInterface $em
    ) {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $settings = [
            'required' => true,
            'mapped' => false,
            'disable_group' => $options['disable_group'],
            'data' => $options['data']
        ];


        $builder->add(
            'alimentatieEchtscheidingsconvenant',
            VoorleggerAlimentatieEchtscheidingsconvenantFormType::class,
            $settings
        );
        $builder->add('alimentatie', VoorleggerAlimentatieFormType::class, $settings);
        $builder->add('arbeidsovereenkomst', VoorleggerArbeidsovereenkomstFormType::class, $settings);
        $builder->add('autolastenKmWoonwerkverkeer', VoorleggerAutolastenKmWoonwerkverkeerFormType::class, $settings);
        $builder->add('autoTaxatie', VoorleggerAutoTaxatieFormType::class, $settings);
        $builder->add(
            'beschikkingOnderBewindstelling',
            VoorleggerBeschikkingOnderBewindstellingFormType::class,
            $settings
        );
        $builder->add('beschikkingUwv', VoorleggerBeschikkingUwvFormType::class, $settings);
        $builder->add('budgetbeheer', VoorleggerBudgetbeheerFormType::class, $settings);
        $builder->add('cjib', VoorleggerCjibFormType::class, $settings);
        $builder->add('correspondentie', VoorleggerCorrespondentieFormType::class, $settings);
        $builder->add('gereserveerdeGelden', VoorleggerGereserveerdeGeldenFormType::class, $settings);
        $builder->add('huurspecificatie', VoorleggerHuurspecificatieFormType::class, $settings);
        $builder->add('toeslagen', VoorleggerToeslagenFormType::class, $settings);
        $builder->add('inkomstenspecificatie', VoorleggerInkomstenspecificatieFormType::class, $settings);
        $builder->add('inzageToetsingBkr', VoorleggerInzageToetsingBkrFormType::class, $settings);
        $builder->add('kostgeld', VoorleggerKostgeldFormType::class, $settings);
        $builder->add(
            'kwijtscheldingGemeenteBelasting',
            VoorleggerKwijtscheldingGemeenteBelastingFormType::class,
            $settings
        );
        $builder->add('legitimatie', VoorleggerLegitimatieFormType::class, $settings);
        $builder->add('meterstandenEnergie', VoorleggerMeterstandenEnergieFormType::class, $settings);
        $builder->add('ondertekendAanvraagFormulier', VoorleggerOndertekendAanvraagFormulierFormType::class, $settings);
        $builder->add('overigeDocumenten', VoorleggerOverigeDocumentenFormType::class, $settings);
        $builder->add('belasting', VoorleggerBelastingFormType::class, $settings);
        $builder->add('overeenkomstKinderopvang', VoorleggerOvereenkomstKinderopvangFormType::class, $settings);
        $builder->add('polisbladZorgverzekering', VoorleggerPolisbladZorgverzekeringFormType::class, $settings);
        $builder->add('retourbewijsModem', VoorleggerRetourbewijsModemFormType::class, $settings);
        $builder->add('schuldenoverzicht', VoorleggerSchuldenoverzichtFormType::class, $settings);
        $builder->add('stabilisatieovereenkomst', VoorleggerStabilisatieovereenkomstFormType::class, $settings);
        $builder->add(
            'toelichtingAanvraagSchuldsaneringShv',
            VoorleggerToelichtingAanvraagSchuldsaneringShvFormType::class,
            $settings
        );
        $builder->add(
            'toelichtingAanvraagSchuldsaneringClient',
            VoorleggerToelichtingAanvraagSchuldsaneringClientFormType::class,
            $settings
        );
        $builder->add('verklaringWerkgever', VoorleggerVerklaringWerkgeverFormType::class, $settings);
        $builder->add(
            'voorlopigeTeruggaafBelastingdienst',
            VoorleggerVoorlopigeTeruggaafBelastingdienstFormType::class,
            $settings
        );
        $builder->add('vrijwaringsbewijs', VoorleggerVrijwaringsbewijsFormType::class, $settings);
        $builder->add('vtlb', VoorleggerVtlbFormType::class, $settings);
        $builder->add('waternet', VoorleggerWaternetFormType::class, $settings);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event): void {
            /* @var $voorlegger Voorlegger */
            $this->user = $this->tokenStorage->getToken()->getUser();
            $voorlegger = $event->getData();
            $dossier = $voorlegger->getDossier();
            $user = $this->tokenStorage->getToken()->getUser();
            $gebruikers = $this->em->getRepository(Gebruiker::class)->findAllByTypeAndOrganisatieRaw(
                [Gebruiker::TYPE_SHV, Gebruiker::TYPE_SHV_KEYUSER],
                [$dossier->getOrganisatie()]
            );
            if ($this->tokenStorage->getToken() === null || $this->tokenStorage->getToken()->getUser() === null) {
                return;
            }

            $choices = [];
            $data = null;
            foreach ($gebruikers->getQuery()->getResult() as $value) {
                if ($value != $user && $value->isEnabled()) {
                    $choices[$value->getEmail()] = $value->getNaam() . ' (' . $value->getEmail() . ')';
                }
            }
            if (empty($dossier->getOrganisatie()->getEmailAdresControle()) === false) {
                $data = $dossier->getOrganisatie()->getEmailAdresControle();
                $choices = array(
                        $dossier->getOrganisatie()->getEmailAdresControle(
                        ) => 'Controle e-mailadres (' . $dossier->getOrganisatie()->getEmailAdresControle() . ')'
                    ) + $choices;
            }
            $choices = array_flip($choices);

            $event->getForm()->add('cdct', ChangeDossierClientType::class, [
                'required' => true,
                'mapped' => false,
                'data' => $dossier,
                'disabled' => $dossier->isInPrullenbak() === true
            ]);
            $event->getForm()->add('controleerGebruiker', ChoiceType::class, [
                'required' => false,
                'multiple' => false,
                'expanded' => false,
                'mapped' => false,
                'choices' => $choices,
                'data' => $data,
                'placeholder' => 'Kies een collega *'
            ]);
            $event->getForm()->add('cdst', ChangeDossierStatusType::class, [
                'required' => true,
                'mapped' => false,
                'data' => $dossier,
                'disabled' => $dossier->isInPrullenbak() === true
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}