<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SchuldeiserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('bedrijfsnaam', TextType::class, [
            'required' => true
        ]);
        $builder->add('rekening', TextType::class, [
            'required' => false
        ]);
        $builder->add('straat', TextType::class, [
            'required' => true
        ]);
        $builder->add('huisnummer', TextType::class, [
            'required' => true
        ]);
        $builder->add('huisnummerToevoeging', TextType::class, [
            'required' => false
        ]);
        $builder->add('postcode', TextType::class, [
            'required' => true
        ]);
        $builder->add('plaats', TextType::class, [
            'required' => true
        ]);
        $builder->add('allegroCode', TextType::class, [
            'required' => false
        ]);
        $builder->add('opmerkingen', TextareaType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Schuldeiser::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}