<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

class VoorleggerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('legitimatieOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('legitimatieOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('vtlbMadi', CheckboxType::class, ['required' => false]);
        $builder->add('vtlbGka', CheckboxType::class, ['required' => false]);
        $builder->add('inkomstenspecificatieOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('inkomstenspecificatieOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('arbeidsovereenkomstOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('arbeidsovereenkomstOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('arbeidsovereenkomstNvt', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvNvt', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvWw', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvWia', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingUwvZw', CheckboxType::class, ['required' => false]);
        $builder->add('voorlopigeTerugaafBelastingdienstOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('voorlopigeTerugaafBelastingdienstOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('voorlopigeTerugaafBelastingdienstNvt', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieNvt', CheckboxType::class, ['required' => false]);
        $builder->add('kostgeldOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('kostgeldOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('kostgeldNvt', CheckboxType::class, ['required' => false]);
        $builder->add('huurtoeslagOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('huurtoeslagOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('huurtoeslagNvt', CheckboxType::class, ['required' => false]);
        $builder->add('zorgtoeslagOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('zorgtoeslagOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('zorgtoeslagNvt', CheckboxType::class, ['required' => false]);
        $builder->add('kinderopvangtoeslagOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('kinderopvangtoeslagOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('kinderopvangtoeslagNvt', CheckboxType::class, ['required' => false]);
        $builder->add('kindgebondenBudgetOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('kindgebondenBudgetOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('kindgebondenBudgetNvt', CheckboxType::class, ['required' => false]);
        $builder->add('huurspecificatieOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('huurspecificatieOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('huurspecificatieNvt', CheckboxType::class, ['required' => false]);
        $builder->add('polisbladZorgverzekeringOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('polisbladZorgverzekeringOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('polisbladZorgverzekeringNvt', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieEchtscheidingsconvenantOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieEchtscheidingsconvenantOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('alimentatieEchtscheidingsconvenantNvt', CheckboxType::class, ['required' => false]);
        $builder->add('overeenkomstKinderopvangOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('overeenkomstKinderopvangOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('overeenkomstKinderopvangNvt', CheckboxType::class, ['required' => false]);
        $builder->add('kwijtscheldingGemeenteBelastingOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('kwijtscheldingGemeenteBelastingOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('kwijtscheldingGemeenteBelastingNvt', CheckboxType::class, ['required' => false]);
        $builder->add('corrigerenGemeenteBelastingOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('corrigerenGemeenteBelastingNvt', CheckboxType::class, ['required' => false]);
        $builder->add('autolastenKmWoonwerkverkeerOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('autolastenKmWoonwerkverkeerOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('autolastenKmWoonwerkverkeerNvt', CheckboxType::class, ['required' => false]);
        $builder->add('kentekenOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('kentekenOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('kentekenNvt', CheckboxType::class, ['required' => false]);
        $builder->add('verklaringWerkgeverOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('verklaringWerkgeverOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('verklaringWerkgeverNvt', CheckboxType::class, ['required' => false]);
        $builder->add('vrijwaringsbewijsOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('vrijwaringsbewijsOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('vrijwaringsbewijsNvt', CheckboxType::class, ['required' => false]);
        $builder->add('schuldenoverzichtOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('schuldenoverzichtOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('vorderingenOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('vorderingenOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('inzageToetsingBkrOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('inzageToetsingBkrOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('stabilisatieovereenkomstOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('stabilisatieovereenkomstOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('stabilisatieovereenkomstNvt', CheckboxType::class, ['required' => false]);
        $builder->add('cjibOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('cjibOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('cjibNvt', CheckboxType::class, ['required' => false]);
        $builder->add('meterstandenEnergieOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('meterstandenEnergieOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('meterstandenEnergieNvt', CheckboxType::class, ['required' => false]);
        $builder->add('waternetOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('waternetOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('waternetNvt', CheckboxType::class, ['required' => false]);
        $builder->add('klantnummerZiggoOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('klantnummerZiggoOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('klantnummerZiggoNvt', CheckboxType::class, ['required' => false]);
        $builder->add('retourbewijsModemOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('retourbewijsModemOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('retourbewijsModemNvt', CheckboxType::class, ['required' => false]);
        $builder->add('toelichtingAanvraagSchuldsaneringOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('toelichtingAanvraagSchuldsaneringOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('bewindstellingOfBudgetbeheerNvt', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingOnderBewindstellingOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingOnderBewindstellingOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('beschikkingOnderBewindstellingNvt', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerNvt', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerPlangroep', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerCav', CheckboxType::class, ['required' => false]);
        $builder->add('budgetbeheerFibi', CheckboxType::class, ['required' => false]);
        $builder->add('gereserveerdeGeldenOntvangenMadi', CheckboxType::class, ['required' => false]);
        $builder->add('gereserveerdeGeldenOntvangenGka', CheckboxType::class, ['required' => false]);
        $builder->add('gereserveerdeGeldenNvt', CheckboxType::class, ['required' => false]);
        $builder->add('ondertekendAanvraagFormulierMadi', CheckboxType::class, ['required' => false]);
        $builder->add('ondertekendAanvraagFormulierGka', CheckboxType::class, ['required' => false]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Voorlegger::class);
    }
}