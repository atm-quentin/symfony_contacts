<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tirage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class demandetirageForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('filename', TextType::class)
            ->add('matiere', TextType::class)
            ->add('nbpage', TextType::class)
            ->add('Datetirage', DateType::class)
            ->add('formation', EntityType::class , array('class' => 'AppBundle:Formation', 'choice_label' => 'libelleclasse'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Tirage::class,
        ));
    }
}