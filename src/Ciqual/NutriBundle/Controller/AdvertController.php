<?php
    namespace Ciqual\NutriBundle\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class AdvertController extends Controller
    {
        public function indexAction()
        {
            $content = $this->get('templating')->render('CiqualNutriBundle:Advert:home.html.twig');
            return new Response($content);
        }
    }
?>
