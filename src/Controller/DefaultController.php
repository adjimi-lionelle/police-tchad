<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use App\Repository\UserRepository;
use App\Form\CandidatType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{

    /**
     * @Route("/Accueil", name="accueil", methods={"GET"})
     */
    public function index(Request $request, 
                          CandidatRepository $candidatRepository,
                          UserRepository $userRepository): Response
    {
       // session_start();
        $user = $this->getUser();
       // dd($users);
       
            $candidat = count($candidatRepository->findAll());
            $user = count($userRepository->findAll());
            

        return $this->renderForm('accueil.html.twig', [
            'candidat' => $candidat,
            'user' => $user,
        ]);
        
        
    }


}
