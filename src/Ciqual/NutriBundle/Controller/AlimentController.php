<?php
    namespace Ciqual\NutriBundle\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class AlimentController extends Controller
    {
        public function indexAction()
        {
            $content = $this->get('templating')->render('CiqualNutriBundle:Aliment:aliment.html.twig');
            return new Response($content);
        }
        
        public function viewAction()
        {
            $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('CiqualNutriBundle:Aliment');
            $listAliment = $repository->findAll();
            $content = $this->get('templating')->render('CiqualNutriBundle:Aliment:aliment.html.twig', array('listAliments' => $listAliment));
            return new Response($content);
        }
    }
?>

