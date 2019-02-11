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
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DetailDossierFormType extends AbstractType
{
    private $limitSchuldhulpBureausTo;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->limitSchuldhulpBureausTo = $tokenStorage->getToken()->getUser()->getSchuldhulpbureaus()
            ->map(function (SchuldhulpBureau $schuldhulpbureau) {
                return $schuldhulpbureau->getId();
            });
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $filterSchuldhulpBureaus = $this->limitSchuldhulpBureausTo;
        $builder->add('clientNaam', TextType::class, [
            'label' => 'Cliëntnaam',
            'required' => true
        ]);
        $builder->add('partnerNaam', TextType::class, [
            'label' => 'Partnernaam',
            'required' => false
        ]);
        $builder->add('schuldhulpbureau', EntityType::class, [
            'required' => true,
            'class' => Schuldhulpbureau::class,
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('medewerkerSchuldhulpbureau', EntityType::class, [
            'required' => true,
            'class' => Gebruiker::class,
            'multiple' => false,
            'expanded' => false,
            'query_builder' => function (EntityRepository $repository) use ($filterSchuldhulpBureaus) {
                $qb = $repository->createQueryBuilder('gebruiker');
                $qb->innerJoin('gebruiker.schuldhulpbureaus', 'shb');
                $qb->andWhere('shb.id IN (:shb_ids)');
                $qb->setParameter('shb_ids', $filterSchuldhulpBureaus);
                $qb->andWhere('gebruiker.type = :type');
                $qb->setParameter('type', Gebruiker::TYPE_MADI);
                $qb->addOrderBy('gebruiker.username', 'ASC');

                return $qb;
                },
            'group_by' => function (Gebruiker $gebruiker) {
                if ($gebruiker->getSchuldhulpbureaus()->count() > 0) {
                    return $gebruiker->getSchuldhulpbureaus()->first()->__toString();
                }
                return null;
            },
            ]);
        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false
        ]);
        $builder->add('regasNummer', TextType::class, [
            'required' => false,
            'label' => 'Regas dossiernr.'
        ]);
        $builder->add('allegroNummer', TextType::class, [
            'required' => false,
            'label' => 'Allegro dossiernr.'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
