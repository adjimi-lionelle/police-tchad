<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero')
            ->add('matPolice')
            ->add('matSolde')
            ->add('nomPrenom')
            ->add('grade')
            ->add('sexe')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('age')
            ->add('dateRecrutement')
            ->add('dateDernierePromo')
            ->add('dateDernierAvancement')
            ->add('anneeRestant')
            ->add('dateDepart')
            ->add('fonction')
            ->add('contacts')
            ->add('pieceJointe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
