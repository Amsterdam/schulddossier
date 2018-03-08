<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument;

class DossierDocumentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('onderwerp', ChoiceType::class, [
            'required' => true,
            'choices' => [
                'legitimatie' => 'legitimatie',
                'vtlb' => 'vtlb',
                'inkomstenspecificatie' => 'inkomstenspecificatie',
                'arbeidsovereenkomst' => 'arbeidsovereenkomst',
                'beschikkingUwv' => 'beschikkingUwvOntvangen',
                'voorlopigeTerugaafBelastingdienst' => 'voorlopigeTerugaafBelastingdienst',
                'alimentatie' => 'alimentatie',
                'kostgeld' => 'kostgeld',
                'huurtoeslag' => 'huurtoeslag',
                'zorgtoeslag' => 'zorgtoeslag',
                'kinderopvangtoeslag' => 'kinderopvangtoeslag',
                'kindgebondenBudget' => 'kindgebondenBudget',
                'huurspecificatie' => 'huurspecificatie',
                'polisbladZorgverzekering' => 'polisbladZorgverzekering',
                'alimentatieEchtscheidingsconvenant' => 'alimentatieEchtscheidingsconvenant',
                'overeenkomstKinderopvang' => 'overeenkomstKinderopvang',
                'kwijtscheldingGemeenteBelasting' => 'kwijtscheldingGemeenteBelasting',
                'autolastenKmWoonwerkverkeer' => 'autolastenKmWoonwerkverkeer',
                'kenteken' => 'kenteken',
                'verklaringWerkgever' => 'verklaringWerkgever',
                'vrijwaringsbewijs' => 'vrijwaringsbewijs',
                'schuldenoverzicht' => 'schuldenoverzicht',
                'vorderingen' => 'vorderingen',
                'inzageToetsingBkr' => 'inzageToetsingBkr',
                'stabilisatieovereenkomst' => 'stabilisatieovereenkomst',
                'cjib' => 'cjib',
                'meterstandenEnergie' => 'meterstandenEnergie',
                'waternet' => 'waternet',
                'klantnummerZiggo' => 'klantnummerZiggo',
                'retourbewijsModem' => 'retourbewijsModem',
                'toelichtingAanvraagSchuldsanering' => 'toelichtingAanvraagSchuldsanering',
                'bewindstellingOfBudgetbeheer' => 'bewindstellingOfBudgetbeheer',
                'beschikkingOnderBewindstelling' => 'beschikkingOnderBewindstelling',
                'budgetbeheer' => 'budgetbeheer',
                'gereserveerdeGelden' => 'gereserveerdeGelden',
                'ondertekendAanvraagFormulier' => 'ondertekendAanvraagFormulier',
                'aanvullendeInformatie' => 'aanvullendeInformatie',
            ],
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('document', DocumentFormType::class, [
            'required' => true
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', DossierDocument::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}