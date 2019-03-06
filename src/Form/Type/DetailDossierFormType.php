<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Event\TransformMedewerkerSchuldhulpbureau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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

        $builder->add('teamGka', EntityType::class, [
            'placeholder' => '- Kies een GKA Team -',
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

        $builder->add('clientTelefoonnummer', TextType::class, [
            'label' => 'Telefoonnummer',
            'required' => false
        ]);

        $builder->add('clientStraat', TextType::class, [
            'label' => 'Straat',
            'required' => false
        ]);

        $builder->add('clientHuisnummer', TextType::class, [
            'label' => 'Huisnummer',
            'required' => false
        ]);

        $builder->add('clientPostcode', TextType::class, [
            'label' => 'Postcode',
            'required' => false
        ]);

        $builder->add('clientWoonplaats', TextType::class, [
            'label' => 'Woonplaats',
            'required' => false
        ]);

        $builder->add('clientBurgelijkeStaat', TextType::class, [
            'label' => 'Burgelijke staat',
            'required' => false
        ]);

        $builder->add('clientKinderen', TextareaType::class, [
            'label' => 'Kinderen',
            'required' => false
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
