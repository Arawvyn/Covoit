<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        return new Response($content);
    }
    public function viewAction($id)
    {
        $advert = new Advert;
        $advert->setContent("Recherche développeur Symfony2.");
        return $this->render('OCPlatformBundle:Advert:view.html.twig',array('advert'=>$advert));
    }
    
	
    public function viewSlugAction($slug, $year, $format)
    {
        return new Response("On pourrait afficher l'annonce correspondant au slug '".$slug."', créée en ".$year." et au format ".$format.".");
    }
}
?>
