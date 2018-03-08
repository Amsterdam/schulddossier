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

class VoorleggerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('legitimatieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('legitimatieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('vtlbMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('vtlbGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('inkomstenspecificatieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('inkomstenspecificatieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('arbeidsovereenkomstOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('arbeidsovereenkomstOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('arbeidsovereenkomstNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingUwvOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('beschikkingUwvOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('beschikkingUwvNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingUwvWw', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingUwvWia', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingUwvZw', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingUwvOverig', TextType::class, [
            'required' => false
        ]);
        $builder->add('voorlopigeTerugaafBelastingdienstOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('voorlopigeTerugaafBelastingdienstOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('voorlopigeTerugaafBelastingdienstNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('alimentatieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('alimentatieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('alimentatieNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('kostgeldOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('kostgeldOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('kostgeldNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('huurtoeslagOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('huurtoeslagOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('huurtoeslagNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('zorgtoeslagOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('zorgtoeslagOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('zorgtoeslagNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('kinderopvangtoeslagOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('kinderopvangtoeslagOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('kinderopvangtoeslagNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('kindgebondenBudgetOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('kindgebondenBudgetOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('kindgebondenBudgetNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('huurspecificatieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('huurspecificatieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('huurspecificatieNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('polisbladZorgverzekeringOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('polisbladZorgverzekeringOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('polisbladZorgverzekeringNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('alimentatieEchtscheidingsconvenantOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('alimentatieEchtscheidingsconvenantOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('alimentatieEchtscheidingsconvenantNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('overeenkomstKinderopvangOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('overeenkomstKinderopvangOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('overeenkomstKinderopvangNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('kwijtscheldingGemeenteBelastingOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('kwijtscheldingGemeenteBelastingOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('kwijtscheldingGemeenteBelastingNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('corrigerenGemeenteBelastingOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('corrigerenGemeenteBelastingNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('autolastenKmWoonwerkverkeerOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('autolastenKmWoonwerkverkeerOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('autolastenKmWoonwerkverkeerNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('kentekenOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('kentekenOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('kentekenNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('verklaringWerkgeverOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('verklaringWerkgeverOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('verklaringWerkgeverNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('vrijwaringsbewijsOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('vrijwaringsbewijsOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('vrijwaringsbewijsNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('schuldenoverzichtOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('schuldenoverzichtOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('vorderingenOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('vorderingenOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('inzageToetsingBkrOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('inzageToetsingBkrOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('stabilisatieovereenkomstOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('stabilisatieovereenkomstOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('stabilisatieovereenkomstNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('cjibOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('cjibOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('cjibNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('meterstandenEnergieOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('meterstandenEnergieOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('meterstandenEnergieNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('waternetOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('waternetOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('waternetNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('klantnummerZiggoOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('klantnummerZiggoOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('klantnummerZiggoNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('retourbewijsModemOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('retourbewijsModemOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('retourbewijsModemNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('toelichtingAanvraagSchuldsaneringOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('toelichtingAanvraagSchuldsaneringOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('bewindstellingOfBudgetbeheerNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('beschikkingOnderBewindstellingOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('beschikkingOnderBewindstellingOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('beschikkingOnderBewindstellingNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('budgetbeheerOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('budgetbeheerOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('budgetbeheerNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('budgetbeheerPlangroep', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('budgetbeheerCav', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('budgetbeheerFibi', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('budgetbeheerOverig', TextType::class, [
            'required' => false
        ]);
        $builder->add('gereserveerdeGeldenOntvangenMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('gereserveerdeGeldenOntvangenGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);
        $builder->add('gereserveerdeGeldenNvt', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('ondertekendAanvraagFormulierMadi', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'gka'
        ]);
        $builder->add('ondertekendAanvraagFormulierGka', CheckboxType::class, [
            'required' => false,
            'disabled' => $options['disable_group'] === 'madi'
        ]);

        $builder->add('energieBedrijf', TextType::class, [
            'required' => false
        ]);
        $builder->add('energieBedrijfKlantnummer', TextType::class, [
            'required' => false
        ]);
        $builder->add('energieBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => true,
            'widget' => 'single_text'
        ]);
        $builder->add('energieBedrijfT1', NumberType::class, [
            'required' => false
        ]);
        $builder->add('energieBedrijfT2', NumberType::class, [
            'required' => false
        ]);
        $builder->add('energieBedrijfGas', NumberType::class, [
            'required' => false
        ]);
        $builder->add('warmteBedrijf', TextType::class, [
            'required' => false
        ]);
        $builder->add('warmteBedrijfKlantnummer', TextType::class, [
            'required' => false
        ]);
        $builder->add('warmteBedrijfDatumOpname', DateType::class, [
            'required' => false,
            'html5' => true,
            'widget' => 'single_text'
        ]);
        $builder->add('warmteBedrijfOpname', TextType::class, [
            'required' => false
        ]);
        $builder->add('drinkwaterKlantnummer', TextType::class, [
            'required' => false
        ]);
        $builder->add('drinkwaterDatumOpname', DateType::class, [
            'required' => false,
            'html5' => true,
            'widget' => 'single_text'
        ]);
        $builder->add('drinkwaterOpname', TextType::class, [
            'required' => false
        ]);
        $builder->add('aanvullendeInformatie', TextareaType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Voorlegger::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}