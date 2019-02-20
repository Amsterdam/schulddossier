<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Class SchuldhulpbureauMedewerkerType
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Form\Type
 */
class SchuldhulpbureauMedewerkerType extends AbstractType
{
    /**
     * @var ArrayCollection
     */
    private $options;

    /**
     * SchuldhulpbureauMedewerkerType constructor.
     *
     * @param TokenStorageInterface  $tokenStorage
     * @param EntityManagerInterface $entityManager
     *
     * @throws \Exception
     */
    public function __construct(TokenStorageInterface $tokenStorage, EntityManagerInterface $entityManager)
    {
        switch ($tokenStorage->getToken()->getUser()->getType()) {
            case Gebruiker::TYPE_ADMIN:
            case Gebruiker::TYPE_GKA:
            case Gebruiker::TYPE_GKA_APPBEHEERDER:
                $this->options = $this->transformCollectionToChoices($entityManager
                    ->getRepository(Schuldhulpbureau::class)
                    ->getAllWithGebruikers());
                break;
            case Gebruiker::TYPE_MADI_KEYUSER:
            case Gebruiker::TYPE_MADI:
                $this->options = $this->transformCollectionToChoices($tokenStorage->getToken()->getUser()->getSchuldhulpbureaus());
                break;
        }
    }

    /**
     * @param Collection $collection
     *
     * @return array
     * @throws \Exception
     */
    private function transformCollectionToChoices(Collection $collection): array
    {
        if($collection->isEmpty()){
           return [];
        }

        return array_merge(...$collection->map(function (SchuldhulpBureau $schuldhulpbureau) {
            $choices = [];
            $choices[$schuldhulpbureau->getNaam()] = array_merge(...$schuldhulpbureau->getGebruikers()
                ->map(function (Gebruiker $gebruiker) use ($schuldhulpbureau) {
                    $gebr = [];
                    $gebr[$gebruiker->getNaam() . ' - ' . $gebruiker->getEmail()] = $schuldhulpbureau->getId() . '_' . $gebruiker->getId();
                    return $gebr;
                })->toArray());

            return $choices;
        })->toArray());
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => $this->options,
        ]);
    }

    /**
     * @return null|string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
