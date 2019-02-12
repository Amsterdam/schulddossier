<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\Common\Collections\ArrayCollection;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SchuldeiserType extends AbstractType
{
    /**
     * @var ArrayCollection
     */
    private $options;

    /**
     * SchuldeiserType constructor.
     *
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->options = array_merge(...$tokenStorage->getToken()->getUser()->getSchuldhulpbureaus()
            ->map(function (SchuldhulpBureau $schuldhulpbureau) {
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
