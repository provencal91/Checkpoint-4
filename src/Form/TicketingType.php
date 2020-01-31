<?php

namespace App\Form;

use App\Entity\Cars;
use App\Entity\Circuits;
use App\Entity\Schedule;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Firstname'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Lastname'
                ]
            ])
            ->add('email',EmailType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder'=>'E-mail'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Phone Number'
                ]
            ])
            ->add('days', EntityType::class, [
                'class' => Schedule::class
            ])
            ->add('hours', EntityType::class, [
                'class' => Schedule::class
            ])
            ->add('carsName', EntityType::class, [
                'class' => Cars::class
            ])
        ;
        $options = null;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class, Schedule::class, Cars::class
            // Configure your form options here
        ]);
    }
}
