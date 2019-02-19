<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Event\TransformMedewerkerSchuldhulpbureau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDossierFormType extends AbstractType
{
    /**
     * @var TransformMedewerkerSchuldhulpbureau
     */
    private $medewerkerSchuldhulpbureau;

    public function __construct(TransformMedewerkerSchuldhulpbureau $medewerkerSchuldhulpbureau)
    {
        $this->medewerkerSchuldhulpbureau = $medewerkerSchuldhulpbureau;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientNaam', TextType::class, [
            'label' => 'Cliëntnaam',
            'required' => true
        ]);
        $builder->add('partnerNaam', TextType::class, [
            'label' => 'Partnernaam',
            'required' => false
        ]);

        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false
        ]);

        $builder->add('regasNummer', TextType::class, [
            'required' => false,
            'label' => 'MaDi dossiernr.'
        ]);

        $builder->add('allegroNummer', TextType::class, [
            'required' => false,
            'label' => 'GKA dossiernr.'
        ]);

        $builder->addEventSubscriber($this->medewerkerSchuldhulpbureau);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
