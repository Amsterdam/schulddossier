<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Event\TransformMedewerkerSchuldhulpbureau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CreateDossierFormType
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Form\Type
 */
class CreateDossierFormType extends AbstractType
{
    /**
     * @var TransformMedewerkerSchuldhulpbureau
     */
    private $medewerkerSchuldhulpbureau;

    public function __construct(TransformMedewerkerSchuldhulpbureau $medewerkerSchuldhulpbureau)
    {
        $this->medewerkerSchuldhulpbureau = $medewerkerSchuldhulpbureau;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientNaam', TextType::class, [
            'label' => 'Achternaam *',
            'required' => true
        ]);

        $builder->add('clientVoorletters', TextType::class, [
            'label' => 'Voorletter(s) *',
            'required' => true
        ]);

        $builder->add('clientGeslacht', ChoiceType::class, [
            'label' => false,
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getGeslachtOpties()
        ]);

        $builder->add('clientGeboortedatum', DateType::class, [
            'label' => 'Geboortedatum',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
        ]);

        $builder->add('clientBSN', TextType::class, [
            'label' => 'B.S.N.',
            'required' => false
        ]);
        $builder->add('clientBanknaam', TextType::class, [
            'label' => 'Banknaam',
            'required' => false
        ]);

        $builder->add('partnerNvt', CheckboxType::class, [
            'label' => 'n.v.t.',
            'required' => false
        ]);

        $builder->add('partnerNaam', TextType::class, [
            'label' => 'Achternaam',
            'required' => false
        ]);

        $builder->add('partnerVoorletters', TextType::class, [
            'label' => 'Voorletter(s)',
            'required' => false
        ]);

        $builder->add('partnerGeslacht', ChoiceType::class, [
            'label' => false,
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getGeslachtOpties()
        ]);

        $builder->add('partnerGeboortedatum', DateType::class, [
            'label' => 'Geboortedatum',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
        ]);

        $builder->add('partnerBSN', TextType::class, [
            'label' => 'B.S.N.',
            'required' => false
        ]);
        $builder->add('partnerBanknaam', TextType::class, [
            'label' => 'Banknaam',
            'required' => false
        ]);

        $builder->add('teamGka', EntityType::class, [
            'placeholder' => '- Kies een GKA Team -',
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false
        ]);

        $builder->add('regasNummer', TextType::class, [
            'required' => false,
            'label' => 'MaDi / Bewindvoerder dossiernr.'
        ]);

        $builder->add('allegroNummer', TextType::class, [
            'required' => false,
            'label' => 'GKA dossiernr.'
        ]);

//        $builder->add('allegroCheck', CheckboxType::class, [
//            'label' => 'Aanwezigheid in Allegro controleren',
//            'required' => false,
//            'mapped' => false
//        ]);

        $builder->addEventSubscriber($this->medewerkerSchuldhulpbureau);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
