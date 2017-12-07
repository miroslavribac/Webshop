<?php

namespace WebshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use WebshopBundle\Entity\Categories;
use WebshopBundle\Form\CategoriesType;

class AdminController extends Controller
{
    /**
     * @Route("/admin/dashboard", name="admin")
     */
    public function indexAction()
    {
        return $this->render('WebshopBundle:Admin_Panel:index.html.twig');
    }

    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function usersAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:users.html.twig");
    }

    /**
     * @Route("/admin/categories", name="admin_categories")
     */
    public function categoriesAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:categories.html.twig");
    }

    /**
     * @Route("/admin/brands", name="admin_brands")
     */
    public function brandsAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:brands.html.twig");
    }

    /**
     * @Route("/admin/articles", name="admin_articles")
     */
    public function articlesAction()
    {
        return $this->render("WebshopBundle:Admin_Panel:articles.html.twig");
    }

    /**
     * @Route("/admin/categories/add", name="add_category")
     */
    public function addCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = new Categories();

        $form = $this->createForm(CategoriesType::class, $categories);
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()) {
            $em->persist($categories);
            $em->flush();

            return $this->redirectToRoute("add_category");
        }

        return $this->render("WebshopBundle:Admin_Panel:add_category.html.twig", [
            "form" => $form->createView()
        ]);
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
