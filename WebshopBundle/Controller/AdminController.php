<?php

namespace WebshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin/dashboard")
     */
    public function indexAction()
    {
        return $this->render('WebshopBundle:Admin_Panel:index.html.twig');
    }

    /**
     * @Route("/admin/users", name="users")
     */
    public function usersAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:users.html.twig");
    }

    /**
     * @Route("/admin/categories", name="categories")
     */
    public function categoriesAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:categories.html.twig");
    }
}
