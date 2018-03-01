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

class CreateDossierFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientNaam', TextType::class, [
            'required' => true
        ]);
        $builder->add('partnerNaam', TextType::class, [
            'required' => false
        ]);
        $builder->add('schuldhulpbureau', EntityType::class, [
            'required' => true,
            'class' => Schuldhulpbureau::class,
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('regasNummer', TextType::class, [
            'required' => false
        ]);
        $builder->add('allegroNummer', TextType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
    }
}