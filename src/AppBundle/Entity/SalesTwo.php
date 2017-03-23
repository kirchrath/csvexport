<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesTwo
 *
 * @ORM\Table(name="sales2")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalesTwoRepository")
 */
class SalesTwo
{
    /**
     * @var int
     *
     * @ORM\Column(name="sale_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Many SaleTwos have One Customer.
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="salesTwo")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     */
    private $customer;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_amount", type="decimal", precision=10, scale=2)
     */
    private $saleAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sale_date", type="datetime")
     */
    private $saleDate;


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
     * Set customer
     *
     * @param \stdClass $customer
     *
     * @return SalesTwo
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \stdClass
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set saleAmount
     *
     * @param string $saleAmount
     *
     * @return SalesTwo
     */
    public function setSaleAmount($saleAmount)
    {
        $this->saleAmount = $saleAmount;

        return $this;
    }

    /**
     * Get saleAmount
     *
     * @return string
     */
    public function getSaleAmount()
    {
        return $this->saleAmount;
    }

    /**
     * Set saleDate
     *
     * @param \DateTime $saleDate
     *
     * @return SalesTwo
     */
    public function setSaleDate($saleDate)
    {
        $this->saleDate = $saleDate;

        return $this;
    }

    /**
     * Get saleDate
     *
     * @return \DateTime
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }
}

