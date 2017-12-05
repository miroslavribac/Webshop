<?php

namespace WebshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ShopController extends Controller
{

    /**
     * @Route("/shop/cart", name="shop_cart")
     */
    public function cartAction()
    {
        return $this->render('WebshopBundle:Default:Shop/cart.html.twig');
    }

    /**
     * @Route("/shop/checkout", name="shop_checkout")
     */
    public function checkoutAction()
    {
        return $this->render('WebshopBundle:Default:Shop/checkout.html.twig');
    }

}