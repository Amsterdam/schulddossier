<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SearchDossierFormType extends AbstractType
{
    /**
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {

        $this->authorizationChecker = $authorizationChecker;
    }

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
                'compleet_gka' => 'compleet_gka',
                'dossier_gecontroleerd_gka' => 'dossier_gecontroleerd_gka',
                'afgesloten_gka' => 'afgesloten_gka',
            ]
        ]);

        if (!$this->authorizationChecker->isGranted('ROLE_MADI')) {
            $builder->add('schuldhulpbureaus', EntityType::class, [
                'required' => false,
                'class' => Schuldhulpbureau::class,
                'multiple' => true,
                'expanded' => true,
                'placeholder' => 'Alle schuldhulpbureau\'s'
            ]);
        }


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
            },
            'placeholder' => 'Alle medewerkers'
        ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false,
            'placeholder' => 'Alle teams'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choice_translation_domain', false);
    }
}
