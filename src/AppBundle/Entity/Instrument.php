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
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 * 
 * @see http://schema.org/IndividualProduct Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @Iri("http://schema.org/IndividualProduct")
 */
class Instrument extends IndividualProduct
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
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $atx;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $installedDate;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $removedDate;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $specifications;
    /**
     * @var Station
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Station")
     * @ORM\JoinColumn(nullable=false)
     */
    private $station;

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
     * Sets atx.
     * 
     * @param string $atx
     * 
     * @return $this
     */
    public function setAtx($atx)
    {
        $this->atx = $atx;

        return $this;
    }

    /**
     * Gets atx.
     * 
     * @return string
     */
    public function getAtx()
    {
        return $this->atx;
    }

    /**
     * Sets installedDate.
     * 
     * @param \DateTime $installedDate
     * 
     * @return $this
     */
    public function setInstalledDate(\DateTime $installedDate)
    {
        $this->installedDate = $installedDate;

        return $this;
    }

    /**
     * Gets installedDate.
     * 
     * @return \DateTime
     */
    public function getInstalledDate()
    {
        return $this->installedDate;
    }

    /**
     * Sets removedDate.
     * 
     * @param \DateTime $removedDate
     * 
     * @return $this
     */
    public function setRemovedDate(\DateTime $removedDate)
    {
        $this->removedDate = $removedDate;

        return $this;
    }

    /**
     * Gets removedDate.
     * 
     * @return \DateTime
     */
    public function getRemovedDate()
    {
        return $this->removedDate;
    }

    /**
     * Sets specifications.
     * 
     * @param string $specifications
     * 
     * @return $this
     */
    public function setSpecifications($specifications)
    {
        $this->specifications = $specifications;

        return $this;
    }

    /**
     * Gets specifications.
     * 
     * @return string
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * Sets station.
     * 
     * @param Station $station
     * 
     * @return $this
     */
    public function setStation(Station $station = null)
    {
        $this->station = $station;

        return $this;
    }

    /**
     * Gets station.
     * 
     * @return Station
     */
    public function getStation()
    {
        return $this->station;
    }
}
