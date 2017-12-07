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

    /**
     * @Route("/admin/articles", name="articles")
     */
    public function articlesAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:articles.html.twig");
    }

    /**
     * @Route("/admin/categories/add", name="add_category")
     */
    public function addCategoryAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:add_category.html.twig");
    }

    /**
     * @Route("/admin/brands/add", name="add_brand")
     */
    public function addBrandAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:add_brand.html.twig");
    }

    /**
     * @Route("/admin/articles/add", name="add_article")
     */
    public function addArticleAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:add_article.html.twig");
    }

    /**
     * @Route("/admin/statistics", name="statistics")
     */
    public function statisticsAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:statistics.html.twig");
    }
}
