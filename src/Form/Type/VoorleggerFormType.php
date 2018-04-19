<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Valid;

class VoorleggerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $settings = [
            'required' => true,
            'mapped' => false,
            'disable_group' => $options['disable_group'],
            'data' => $options['data']
        ];

        $builder->add('alimentatieEchtscheidingsconvenant', VoorleggerAlimentatieEchtscheidingsconvenantFormType::class, $settings);
        $builder->add('alimentatie', VoorleggerAlimentatieFormType::class, $settings);
        $builder->add('arbeidsovereenkomst', VoorleggerArbeidsovereenkomstFormType::class, $settings);
        $builder->add('autolastenKmWoonwerkverkeer', VoorleggerAutolastenKmWoonwerkverkeerFormType::class, $settings);
        $builder->add('autoTaxatie', VoorleggerAutoTaxatieFormType::class, $settings);
        $builder->add('beschikkingOnderBewindstelling', VoorleggerBeschikkingOnderBewindstellingFormType::class, $settings);
        $builder->add('beschikkingUwv', VoorleggerBeschikkingUwvFormType::class, $settings);
        $builder->add('budgetbeheer', VoorleggerBudgetbeheerFormType::class, $settings);
        $builder->add('cjib', VoorleggerCjibFormType::class, $settings);
        $builder->add('gereserveerdeGelden', VoorleggerGereserveerdeGeldenFormType::class, $settings);
        $builder->add('huurspecificatie', VoorleggerHuurspecificatieFormType::class, $settings);
        $builder->add('huurtoeslag', VoorleggerHuurtoeslagFormType::class, $settings);
        $builder->add('inkomstenspecificatie', VoorleggerInkomstenspecificatieFormType::class, $settings);
        $builder->add('inzageToetsingBkr', VoorleggerInzageToetsingBkrFormType::class, $settings);
        $builder->add('kinderopvangtoeslag', VoorleggerKinderopvangtoeslagFormType::class, $settings);
        $builder->add('kindgebondenBudget', VoorleggerKindgebondenBudgetFormType::class, $settings);
        $builder->add('kostgeld', VoorleggerKostgeldFormType::class, $settings);
        $builder->add('kwijtscheldingGemeenteBelasting', VoorleggerKwijtscheldingGemeenteBelastingFormType::class, $settings);
        $builder->add('legitimatie', VoorleggerLegitimatieFormType::class, $settings);
        $builder->add('meterstandenEnergie', VoorleggerMeterstandenEnergieFormType::class, $settings);
        $builder->add('ondertekendAanvraagFormulier', VoorleggerOndertekendAanvraagFormulierFormType::class, $settings);
        $builder->add('overeenkomstKinderopvang', VoorleggerOvereenkomstKinderopvangFormType::class, $settings);
        $builder->add('polisbladZorgverzekering', VoorleggerPolisbladZorgverzekeringFormType::class, $settings);
        $builder->add('retourbewijsModem', VoorleggerRetourbewijsModemFormType::class, $settings);
        $builder->add('schuldenoverzicht', VoorleggerSchuldenoverzichtFormType::class, $settings);
        $builder->add('stabilisatieovereenkomst', VoorleggerStabilisatieovereenkomstFormType::class, $settings);
        $builder->add('toelichtingAanvraagSchuldsaneringMadi', VoorleggerToelichtingAanvraagSchuldsaneringMadiFormType::class, $settings);
        $builder->add('toelichtingAanvraagSchuldsaneringClient', VoorleggerToelichtingAanvraagSchuldsaneringClientFormType::class, $settings);
        $builder->add('verklaringWerkgever', VoorleggerVerklaringWerkgeverFormType::class, $settings);
        $builder->add('voorlopigeTeruggaafBelastingdienst', VoorleggerVoorlopigeTeruggaafBelastingdienstFormType::class, $settings);
        $builder->add('vrijwaringsbewijs', VoorleggerVrijwaringsbewijsFormType::class, $settings);
        $builder->add('vtlb', VoorleggerVtlbFormType::class, $settings);
        $builder->add('waternet', VoorleggerWaternetFormType::class, $settings);
        $builder->add('zorgtoeslag', VoorleggerZorgtoeslagFormType::class, $settings);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}