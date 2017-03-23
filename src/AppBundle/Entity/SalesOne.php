<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesOne
 *
 * @ORM\Table(name="sales1")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalesOneRepository")
 */
class SalesOne
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
     * Many SaleOnes have One Customer.
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="salesOne")
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
     * @return SalesOne
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
     * @return SalesOne
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
     * @return SalesOne
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

