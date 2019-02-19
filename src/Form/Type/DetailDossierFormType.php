<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDossierFormType extends AbstractType
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientNaam', TextType::class, [
            'label' => 'Cliëntnaam',
            'required' => true
        ]);
        $builder->add('partnerNaam', TextType::class, [
            'label' => 'Partnernaam',
            'required' => false
        ]);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            /** @var Dossier $data */
            $data = $event->getData();

            $schuldhulpbureau = $data->getSchuldhulpbureau()->getId();
            $medewerkerSchuldhulpbureau = $data->getMedewerkerSchuldhulpbureau()->getId();
            $schuldHulpbureauGebruiker = $schuldhulpbureau . '_' . $medewerkerSchuldhulpbureau;

            $form->add('schuldHulpbureauGebruiker', SchuldeiserType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'mapped' => false,
                'data' => $schuldHulpbureauGebruiker
            ])->setData($schuldHulpbureauGebruiker);
        });


        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            $ids = explode('_', $data['schuldHulpbureauGebruiker']);

            $schuldhulpbureau = $this->entityManager->getRepository(Schuldhulpbureau::class)->find($ids[0]);
            if (empty($schuldhulpbureau)) {
                throw new EntityNotFoundException('Schuldhulpbureau with the following id does not exist: ' . $ids[0]);
            }

            $medewerkerSchuldhulpbureau = $this->entityManager->getRepository(Gebruiker::class)->find($ids[1]);
            if (empty($medewerkerSchuldhulpbureau)) {
                throw new EntityNotFoundException('Gebruiker with the following id does not exist: ' . $ids[1]);
            }

            $data['schuldhulpbureau'] = $schuldhulpbureau->getId();
            $data['medewerkerSchuldhulpbureau'] = $medewerkerSchuldhulpbureau->getId();

            $form->add('schuldhulpbureau', EntityType::class, [
                'required' => true,
                'class' => Schuldhulpbureau::class,
                'multiple' => false,
                'expanded' => false,
            ])->setData($schuldhulpbureau->getId());

            $form->add('medewerkerSchuldhulpbureau', EntityType::class, [
                'required' => true,
                'class' => Gebruiker::class,
                'multiple' => false,
            ])->setData($medewerkerSchuldhulpbureau->getId());

            $event->setData($data);
        });

        $builder->add('teamGka', EntityType::class, [
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
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
