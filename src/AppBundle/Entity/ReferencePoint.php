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
 * The most generic type of item.
 * 
 * @see http://schema.org/Thing Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @Iri("http://schema.org/Thing")
 */
class ReferencePoint
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
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $nameFr;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $domes;
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
     * @var float
     * 
     * @ORM\Column(type="float")
     * @Assert\Type(type="float")
     * @Assert\NotNull
     */
    private $height;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $type;
    /**
     * @var Site
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site")
     */
    private $site;

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
     * Sets nameFr.
     * 
     * @param string $nameFr
     * 
     * @return $this
     */
    public function setNameFr($nameFr)
    {
        $this->nameFr = $nameFr;

        return $this;
    }

    /**
     * Gets nameFr.
     * 
     * @return string
     */
    public function getNameFr()
    {
        return $this->nameFr;
    }

    /**
     * Sets domes.
     * 
     * @param string $domes
     * 
     * @return $this
     */
    public function setDomes($domes)
    {
        $this->domes = $domes;

        return $this;
    }

    /**
     * Gets domes.
     * 
     * @return string
     */
    public function getDomes()
    {
        return $this->domes;
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
     * Sets height.
     * 
     * @param float $height
     * 
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets height.
     * 
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets type.
     * 
     * @param string $type
     * 
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets type.
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
