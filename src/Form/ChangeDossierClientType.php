<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierStatusFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ChangeDossierClientType
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Form
 */
class ChangeDossierClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
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

        $builder->add('clientBurgelijkeStaat', ChoiceType::class, [
            'label' => 'Burgelijke staat',
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getBurgelijkeStaatOpties()
        ]);

        $builder->add('clientBurgelijkeStaatSinds', DateType::class, [
            'label' => 'Burgelijke staat sinds',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
        ]);

        $builder->add('clientKinderen', CollectionType::class, [
            'label' => 'Geboortedatum inwonende kind(eren)',
            'allow_add' => true,
            'delete_empty' => true,
            'allow_delete' => true,
            'required' => false
        ]);


    }
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
