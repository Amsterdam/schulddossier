<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('clientNaam', TextType::class, [
            'label' => 'Achternaam *',
            'required' => true,
            'help' => 'DB: dossier.client_naam'
        ]);

        $builder->add('clientVoorletters', TextType::class, [
            'label' => 'Voorletter(s) *',
            'required' => true,
            'help' => 'dossier.client_voorletters'
        ]);

        $builder->add('clientGeslacht', ChoiceType::class, [
            'label' => false,
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getGeslachtOpties(),
            'help' => 'DB: dossier.client_geslacht'
        ]);

        $builder->add('clientGeboortedatum', DateType::class, [
            'label' => 'Geboortedatum',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'help' => 'DB: dossier.client_geboortedatum'
        ]);

        $builder->add('clientBSN', TextType::class, [
            'label' => 'B.S.N.',
            'required' => false,
            'help' => 'DB: dossier.client_bsn'
        ]);
        $builder->add('clientBanknaam', TextType::class, [
            'label' => 'Banknaam',
            'required' => false,
            'help' => 'DB: dossier.client_banknaam'
        ]);

        $builder->add('partnerNvt', CheckboxType::class, [
            'label' => 'n.v.t.',
            'required' => false,
            'help' => 'DB: dossier.partner_nvt'
        ]);

        $builder->add('partnerNaam', TextType::class, [
            'label' => 'Achternaam',
            'required' => false,
            'help' => 'DB: dossier.partner_naam'
        ]);

        $builder->add('partnerVoorletters', TextType::class, [
            'label' => 'Voorletter(s)',
            'required' => false,
            'help' => 'DB: dossier.partner_voorletters'
        ]);

        $builder->add('partnerGeslacht', ChoiceType::class, [
            'label' => false,
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getGeslachtOpties(),
            'help' => 'DB: dossier.partner_geslacht'
        ]);

        $builder->add('partnerGeboortedatum', DateType::class, [
            'label' => 'Geboortedatum',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'help' => 'DB: dossier.partner_geboortedatum'
        ]);

        $builder->add('partnerBSN', TextType::class, [
            'label' => 'B.S.N.',
            'required' => false,
            'help' => 'DB: dossier.partner_bsn'
        ]);
        $builder->add('partnerBanknaam', TextType::class, [
            'label' => 'Banknaam',
            'required' => false,
            'help' => 'DB: dossier.partner_banknaam'
        ]);

        $builder->add('clientTelefoonnummer', TextType::class, [
            'label' => 'Telefoonnummer *',
            'required' => false,
            'help' => 'DB: dossier.client_telefoonnummer'
        ]);

        $builder->add('clientEmail', TextType::class, [
            'label' => 'E-mailadres *',
            'required' => false,
            'help' => 'DB: dossier.client_email'
        ]);

        $builder->add('clientStraat', TextType::class, [
            'label' => 'Straat',
            'required' => false,
            'help' => 'DB: dossier.client_straat'
        ]);

        $builder->add('clientHuisnummer', TextType::class, [
            'label' => 'Huisnummer',
            'required' => false,
            'help' => 'DB: dossier.client_huisnummer'
        ]);

        $builder->add('clientPostcode', TextType::class, [
            'label' => 'Postcode',
            'required' => false,
            'help' => 'DB: dossier.client_postcode'
        ]);

        $builder->add('clientWoonplaats', TextType::class, [
            'label' => 'Woonplaats',
            'required' => false,
            'help' => 'DB: dossier.client_woonplaats'
        ]);

        $builder->add('clientBurgelijkeStaat', ChoiceType::class, [
            'label' => 'Burgerlijke staat',
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getBurgelijkeStaatOpties(),
            'help' => 'DB: dossier.client_burgelijke_staat'
        ]);

        $builder->add('clientBurgelijkeStaatSinds', DateType::class, [
            'label' => 'Burgerlijke staat sinds',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'help' => 'DB: dossier.client_burgelijke_staat_sinds'
        ]);

        $builder->add('clientKinderen', CollectionType::class, [
            'label' => 'Geboortedatum inwonende kind(eren)',
            'allow_add' => true,
            'delete_empty' => true,
            'allow_delete' => true,
            'required' => false,
            'help' => 'DB: dossier.client_kinderen'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
