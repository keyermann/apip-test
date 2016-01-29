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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Dunglas\ApiBundle\Annotation\Iri;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entities that have a somewhat fixed, physical extension.
 * 
 * @see http://schema.org/Place Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @Iri("http://schema.org/Place")
 */
class Station extends Place
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
     * @var string A short description of the item.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/description")
     */
    private $description;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $acronym;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $cdp;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $code2;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $startDate;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $endDate;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $dataCenters;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $logsheet;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $eccentricity;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $technique;
    /**
     * @var ReferencePoint
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ReferencePoint")
     * @ORM\JoinColumn(nullable=false)
     */
    private $coordinateReferencePoint;
    /**
     * @var ArrayCollection<ReferencePoint>
     * 
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ReferencePoint")
     */
    private $referencePoints;
    /**
     * @var Site
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site")
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;

    public function __construct()
    {
        $this->referencePoints = new ArrayCollection();
    }

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
     * Sets description.
     * 
     * @param string $description
     * 
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets description.
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets acronym.
     * 
     * @param string $acronym
     * 
     * @return $this
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * Gets acronym.
     * 
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Sets cdp.
     * 
     * @param string $cdp
     * 
     * @return $this
     */
    public function setCdp($cdp)
    {
        $this->cdp = $cdp;

        return $this;
    }

    /**
     * Gets cdp.
     * 
     * @return string
     */
    public function getCdp()
    {
        return $this->cdp;
    }

    /**
     * Sets code2.
     * 
     * @param string $code2
     * 
     * @return $this
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;

        return $this;
    }

    /**
     * Gets code2.
     * 
     * @return string
     */
    public function getCode2()
    {
        return $this->code2;
    }

    /**
     * Sets startDate.
     * 
     * @param \DateTime $startDate
     * 
     * @return $this
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets startDate.
     * 
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets endDate.
     * 
     * @param \DateTime $endDate
     * 
     * @return $this
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Gets endDate.
     * 
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets dataCenters.
     * 
     * @param string $dataCenters
     * 
     * @return $this
     */
    public function setDataCenters($dataCenters)
    {
        $this->dataCenters = $dataCenters;

        return $this;
    }

    /**
     * Gets dataCenters.
     * 
     * @return string
     */
    public function getDataCenters()
    {
        return $this->dataCenters;
    }

    /**
     * Sets logsheet.
     * 
     * @param string $logsheet
     * 
     * @return $this
     */
    public function setLogsheet($logsheet)
    {
        $this->logsheet = $logsheet;

        return $this;
    }

    /**
     * Gets logsheet.
     * 
     * @return string
     */
    public function getLogsheet()
    {
        return $this->logsheet;
    }

    /**
     * Sets eccentricity.
     * 
     * @param string $eccentricity
     * 
     * @return $this
     */
    public function setEccentricity($eccentricity)
    {
        $this->eccentricity = $eccentricity;

        return $this;
    }

    /**
     * Gets eccentricity.
     * 
     * @return string
     */
    public function getEccentricity()
    {
        return $this->eccentricity;
    }

    /**
     * Sets technique.
     * 
     * @param string $technique
     * 
     * @return $this
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;

        return $this;
    }

    /**
     * Gets technique.
     * 
     * @return string
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Sets coordinateReferencePoint.
     * 
     * @param ReferencePoint $coordinateReferencePoint
     * 
     * @return $this
     */
    public function setCoordinateReferencePoint(ReferencePoint $coordinateReferencePoint = null)
    {
        $this->coordinateReferencePoint = $coordinateReferencePoint;

        return $this;
    }

    /**
     * Gets coordinateReferencePoint.
     * 
     * @return ReferencePoint
     */
    public function getCoordinateReferencePoint()
    {
        return $this->coordinateReferencePoint;
    }

    /**
     * Adds referencePoints.
     * 
     * @param ReferencePoint $referencePoints
     * 
     * @return $this
     */
    public function addReferencePoints(ReferencePoint $referencePoints)
    {
        $this->referencePoints[] = $referencePoints;

        return $this;
    }

    /**
     * Removes referencePoints.
     * 
     * @param ReferencePoint $referencePoints
     * 
     * @return $this
     */
    public function removeReferencePoints(ReferencePoint $referencePoints)
    {
        $this->referencePoints->removeElement($referencePoints);

        return $this;
    }

    /**
     * Gets referencePoints.
     * 
     * @return ArrayCollection<ReferencePoint>
     */
    public function getReferencePoints()
    {
        return $this->referencePoints;
    }

    /**
     * Sets site.
     * 
     * @param Site $site
     * 
     * @return $this
     */
    public function setSite(Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Gets site.
     * 
     * @return Site
     */
    public function getSite()
    {
        return $this->site;
    }
}
