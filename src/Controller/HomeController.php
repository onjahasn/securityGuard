<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Logo;
use App\Entity\About;
use App\Entity\Service;
use App\Entity\Carousel;
use App\Entity\Personnel;
use App\Entity\Statistic;
use App\Entity\Newsletter;
use App\Entity\WhyDetails;
use App\Entity\InfoContact;
use App\Entity\Testimonial;
use App\Entity\WhyChooseUs;
use App\Entity\AboutDetails;
use App\Form\NewsLetterType;
use App\Entity\Certification;
use App\Entity\InfoFooter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $em) // Injection de dépendance
    {
        $this->em = $em;
    }
    
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {

        // Informations pour les contacts
        $infoContact = $this->em->getRepository(InfoContact::class)->findAll();
        
        // Le logo
        $infoLogo = $this->em->getRepository(Logo::class)->findOneBy(['id' => 2]);
            
        // A propos de nous
        $about = $this->em->getRepository(About::class)->findOneBy(['id' => 3]);

        // A propos de nous details
        $aboutDetails = $this->em->getRepository(AboutDetails::class)->findAll();

        // Certification
        $certification = $this->em->getRepository(Certification::class)->findAll();

        // Carousel
        $Carousel = $this->em->getRepository(Carousel::class)->findAll();

        // Service
        $service = $this->em->getRepository(Service::class)->findAll();

        // Statistic
        $statistic = $this->em->getRepository(Statistic::class)->findAll();

        // Pourquoi nous
        $whyChooseUs = $this->em->getRepository(WhyChooseUs::class)->findAll();

        // Pourquoi details
        $whyDetails = $this->em->getRepository(WhyDetails::class)->findOneBy(['id' => 1]);

        // Newsletter
        $email = new Newsletter(); // Création d'un nouvel utilisateur
        $form = $this->createForm(NewsLetterType::class, $email); // Création du formulaire d'inscription

        $form->handleRequest($request); // Gestion de la requête

        if ($form->isSubmitted() && $form->isValid()) { // Vérification de la soumission du formulaire et de sa validité
            // Récupération des données du formulaire
            $email = $form->getData();

            // On vérifie l'existence de l'adresse e-mail de l'utilisateur
            $emailExist = $this->em->getRepository(Newsletter::class)->findOneBy(['email' => $email->getEmail()]);
            if (!$emailExist) {

                // Enregistrement de l'utilisateur dans la base de données
                $this->em->persist($email); // Permet de préparer une requête SQL
                $this->em->flush(); // Exécute la requête SQL

                $this->addFlash('success', 'Votre email a été ajouter avec succès !');
                return $this->redirectToRoute('app_home');
            } else {
                $this->addFlash('error', 'Cette adresse e-mail est déjà utilisée !');
            }
        }
        // Personnel
        $Personnel = $this->em->getRepository(Personnel::class)->findAll();

        // Témoignages
        $Testimonial = $this->em->getRepository(Testimonial::class)->findAll();

        // Blogs
        $Blog = $this->em->getRepository(Blog::class)->findAll();

        // Fotter
        $InfoFooter = $this->em->getRepository(InfoFooter::class)->findOneBy(['id' => 1]);

        return $this->render('home/index.html.twig', [
            'infoContact' => $infoContact,
            'infoLogo' => $infoLogo,
            'about' => $about,
            'aboutDetails' => $aboutDetails,
            'certification' => $certification,
            'caroussel' => $Carousel,
            'service' => $service,
            'statistic' => $statistic,
            'whyChooseUs' => $whyChooseUs,
            'whyDetails' => $whyDetails,
            'form' => $form->createView(),
            'personnel' => $Personnel,
            'testimonial' => $Testimonial,
            'blog' => $Blog,
            'infoFooter' => $InfoFooter,
        ]);
    }
}
