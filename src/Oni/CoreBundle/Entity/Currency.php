<?php

namespace Oni\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="oni_currency")
 * @ORM\Entity(repositoryClass="Oni\CoreBundle\Entity\Repository\CurrencyRepository")
 */
class Currency
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
     * @var string
     *
     * @ORM\Column(name="currencyCode", type="string", length=3)
     */
    private $currencyCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="currencySymbol", type="string", length=100)
     */
    private $currencySymbol;


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
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return Currency
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Currency
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set currecnySymbol
     *
     * @param string $currecnySymbol
     *
     * @return Currency
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;

        return $this;
    }

    /**
     * Get currecnySymbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }
}
