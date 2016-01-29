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
class ContactStation
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
     * @var Contact
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contact")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contact;
    /**
     * @var Station
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Station")
     * @ORM\JoinColumn(nullable=false)
     */
    private $station;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $contactType;
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
     * Sets contact.
     * 
     * @param Contact $contact
     * 
     * @return $this
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Gets contact.
     * 
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
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

    /**
     * Sets contactType.
     * 
     * @param string $contactType
     * 
     * @return $this
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Gets contactType.
     * 
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
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
}
