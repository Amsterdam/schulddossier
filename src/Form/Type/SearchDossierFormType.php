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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SearchDossierFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naam', TextType::class, [
            'required' => false
        ]);
        $builder->add('status', ChoiceType::class, [
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'choices' => [
                'bezig_madi' => 'bezig_madi',
                'compleet_madi' => 'compleet_madi',
                'gecontroleerd_madi' => 'gecontroleerd_madi',
                'verzonden_madi' => 'verzonden_madi',
                'bezig_gka' => 'bezig_gka',
            ]
        ]);
        $builder->add('schuldhulpbureau', EntityType::class, [
            'required' => false,
            'class' => Schuldhulpbureau::class,
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('medewerkerSchuldhulpbureau', EntityType::class, [
            'required' => false,
            'class' => Gebruiker::class,
            'multiple' => false,
            'expanded' => false,
            'query_builder' => function (EntityRepository $repository) {
                $qb = $repository->createQueryBuilder('gebruiker');
                $qb->andWhere('gebruiker.type = :type');
                $qb->setParameter('type', Gebruiker::TYPE_MADI);
                $qb->addOrderBy('gebruiker.username', 'ASC');
                return $qb;
            }
        ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choice_translation_domain', false);
    }
}
