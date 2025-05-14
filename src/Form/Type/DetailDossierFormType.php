<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Event\TransformMedewerkerOrganisatie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDossierFormType extends AbstractType
{
    /**
     * @var TransformMedewerkerOrganisatie
     */
    private $medewerkerOrganisatie;

    public function __construct(TransformMedewerkerOrganisatie $medewerkerOrganisatie)
    {
        $this->medewerkerOrganisatie = $medewerkerOrganisatie;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('teamGka', EntityType::class, [
            'placeholder' => '- Kies een GKA Team -',
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false,
            'help' => 'DB: team.naam'
        ]);

        $builder->add('regasNummer', TextType::class, [
            'required' => false,
            'label' => 'Schuldhulpverlener/Bewindvoerder dossiernr.',
            'help' => 'DB: dossier.regas_nummer'
        ]);

        $builder->add('allegroNummer', TextType::class, [
            'required' => false,
            'label' => 'GKA dossiernr.',
            'help' => 'DB: dossier.allegro_nummer'
        ]);

        $builder->addEventSubscriber($this->medewerkerOrganisatie);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
