<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DocumentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naam', TextType::class, [
            'required' => true,
        ]);
        $builder->add('file', FileType::class, [
            'required' => true,
        ]);
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event): void {
            /** @var $entity Document */
            $entity = $event->getData();
            if ($entity !== null && $entity->getFile() !== null) {
                $entity->setUploadDatumTijd(new \DateTime());
                $entity->setMd5Hash(md5($entity->getFile()->getRealPath()));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Document::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}