<?php

namespace Oni\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="oni_city" ,uniqueConstraints={
 *     @ORM\UniqueConstraint(name="country_cityname_idx", columns={"countryId", "cityName"})})
 * @ORM\Entity(repositoryClass="Oni\CoreBundle\Entity\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="cityName", type="string", length=150)
     */
    private $cityName;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Oni\CoreBundle\Entity\Country", inversedBy="cities")
     * @ORM\JoinColumn(name="countryId", referencedColumnName="id")
     *
     */
    private $country;


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
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set country
     *
     * @param \Oni\CoreBundle\Entity\Country $country
     *
     * @return City
     */
    public function setCountry(\Oni\CoreBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Oni\CoreBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }


}
