<?php

namespace WebshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carts
 *
 * @ORM\Table(name="carts")
 * @ORM\Entity(repositoryClass="WebshopBundle\Repository\CartsRepository")
 */
class Carts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="article_id", type="integer")
     */
    private $articleId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="cart_user_status", type="integer")
     */
    private $cartUserStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="cart_admin_status", type="integer")
     */
    private $cartAdminStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="cart_code", type="integer")
     */
    private $cartCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set articleId
     *
     * @param integer $articleId
     *
     * @return Carts
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * Get articleId
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Carts
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set cartUserStatus
     *
     * @param integer $cartUserStatus
     *
     * @return Carts
     */
    public function setCartUserStatus($cartUserStatus)
    {
        $this->cartUserStatus = $cartUserStatus;

        return $this;
    }

    /**
     * Get cartUserStatus
     *
     * @return int
     */
    public function getCartUserStatus()
    {
        return $this->cartUserStatus;
    }

    /**
     * Set cartAdminStatus
     *
     * @param integer $cartAdminStatus
     *
     * @return Carts
     */
    public function setCartAdminStatus($cartAdminStatus)
    {
        $this->cartAdminStatus = $cartAdminStatus;

        return $this;
    }

    /**
     * Get cartAdminStatus
     *
     * @return int
     */
    public function getCartAdminStatus()
    {
        return $this->cartAdminStatus;
    }

    /**
     * Set cartCode
     *
     * @param integer $cartCode
     *
     * @return Carts
     */
    public function setCartCode($cartCode)
    {
        $this->cartCode = $cartCode;

        return $this;
    }

    /**
     * Get cartCode
     *
     * @return int
     */
    public function getCartCode()
    {
        return $this->cartCode;
    }
}

