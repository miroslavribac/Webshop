<?php

namespace WebshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('WebshopBundle:Default:index.html.twig');
    }

    /**
     * @Route("/women", name="women")
     */
    public function womenAction()
    {
        return $this->render('WebshopBundle:Default:women.html.twig');
    }

    /**
     * @Route("/men", name="men")
     */
    public function menAction()
    {
        return $this->render('WebshopBundle:Default:men.html.twig');
    }

    /**
     * @Route("/product", name="product")
     */
    public function productAction()
    {
        return $this->render('WebshopBundle:Default:product.html.twig');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction()
    {
        return $this->render('WebshopBundle:Default:blog.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('WebshopBundle:Default:contact.html.twig');
    }
}
