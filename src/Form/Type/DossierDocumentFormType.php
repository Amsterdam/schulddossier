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
                'beschikkingUwv' => 'beschikkingUwv',
                'voorlopigeTeruggaafBelastingdienst' => 'voorlopigeTeruggaafBelastingdienst',
                'alimentatie' => 'alimentatie',
                'kostgeld' => 'kostgeld',
                'toeslagen' => 'toeslagen',
                'huurspecificatie' => 'huurspecificatie',
                'polisbladZorgverzekering' => 'polisbladZorgverzekering',
                'alimentatieEchtscheidingsconvenant' => 'alimentatieEchtscheidingsconvenant',
                'overeenkomstKinderopvang' => 'overeenkomstKinderopvang',
                'kwijtscheldingGemeenteBelasting' => 'kwijtscheldingGemeenteBelasting',
                'autoTaxatie' => 'autoTaxatie',
                'autolastenKmWoonwerkverkeer' => 'autolastenKmWoonwerkverkeer',
                'verklaringWerkgever' => 'verklaringWerkgever',
                'vrijwaringsbewijs' => 'vrijwaringsbewijs',
                'schuldenoverzicht' => 'schuldenoverzicht',
                'vorderingen' => 'vorderingen',
                'inzageToetsingBkr' => 'inzageToetsingBkr',
                'stabilisatieovereenkomst' => 'stabilisatieovereenkomst',
                'cjib' => 'cjib',
                'meterstandenEnergie' => 'meterstandenEnergie',
                'waternet' => 'waternet',
                'retourbewijsModem' => 'retourbewijsModem',
                'toelichtingAanvraagSchuldsaneringClient' => 'toelichtingAanvraagSchuldsaneringClient',
                'toelichtingAanvraagSchuldsaneringMadi' => 'toelichtingAanvraagSchuldsaneringMadi',
                'beschikkingOnderBewindstelling' => 'beschikkingOnderBewindstelling',
                'budgetbeheer' => 'budgetbeheer',
                'gereserveerdeGelden' => 'gereserveerdeGelden',
                'ondertekendAanvraagFormulier' => 'ondertekendAanvraagFormulier',
                'aanvullendeInformatie' => 'aanvullendeInformatie',
                'overigeDocumenten' => 'overigeDocumenten',
                'correspondentie' => 'correspondentie',
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