<?php

/*
 * This file is part of the ITRF API project.
 *
 * (c) Kévin Eyermann <kevin.eyermann@ign.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dunglas\ApiBundle\Annotation\Iri;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entities that have a somewhat fixed, physical extension.
 * 
 * @see http://schema.org/Place Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @UniqueEntity("number")
 * @Iri("http://schema.org/Place")
 */
class Site extends Place
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string The name of the item.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/name")
     */
    private $name;
    /**
     * @var string
     * 
     * @ORM\Column(unique=true)
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $number;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $city;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $region;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $geom;
    /**
     * @var Country
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;
    /**
     * @var SitelogPlate
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SitelogPlate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sitelogPlate;

    /**
     * Sets id.
     * 
     * @param int $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets id.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets name.
     * 
     * @param string $name
     * 
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets name.
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets number.
     * 
     * @param string $number
     * 
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets number.
     * 
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets city.
     * 
     * @param string $city
     * 
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets city.
     * 
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets region.
     * 
     * @param string $region
     * 
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets region.
     * 
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets geom.
     * 
     * @param string $geom
     * 
     * @return $this
     */
    public function setGeom($geom)
    {
        $this->geom = $geom;

        return $this;
    }

    /**
     * Gets geom.
     * 
     * @return string
     */
    public function getGeom()
    {
        return $this->geom;
    }

    /**
     * Sets country.
     * 
     * @param Country $country
     * 
     * @return $this
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets country.
     * 
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets sitelogPlate.
     * 
     * @param SitelogPlate $sitelogPlate
     * 
     * @return $this
     */
    public function setSitelogPlate(SitelogPlate $sitelogPlate = null)
    {
        $this->sitelogPlate = $sitelogPlate;

        return $this;
    }

    /**
     * Gets sitelogPlate.
     * 
     * @return SitelogPlate
     */
    public function getSitelogPlate()
    {
        return $this->sitelogPlate;
    }
}
