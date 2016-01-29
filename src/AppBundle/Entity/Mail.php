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
 * An email message.
 * 
 * @see http://schema.org/EmailMessage Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @Iri("http://schema.org/EmailMessage")
 */
class Mail
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
    private $subject;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $body;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $bodyType;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $fromName;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $fromMail;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $to;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $cc;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     * @Assert\NotNull
     */
    private $sentDate;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $stations;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $domes;
    /**
     * @var Mail
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mail")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parent;

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
     * Sets subject.
     * 
     * @param string $subject
     * 
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Gets subject.
     * 
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets body.
     * 
     * @param string $body
     * 
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets body.
     * 
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets bodyType.
     * 
     * @param string $bodyType
     * 
     * @return $this
     */
    public function setBodyType($bodyType)
    {
        $this->bodyType = $bodyType;

        return $this;
    }

    /**
     * Gets bodyType.
     * 
     * @return string
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Sets fromName.
     * 
     * @param string $fromName
     * 
     * @return $this
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * Gets fromName.
     * 
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Sets fromMail.
     * 
     * @param string $fromMail
     * 
     * @return $this
     */
    public function setFromMail($fromMail)
    {
        $this->fromMail = $fromMail;

        return $this;
    }

    /**
     * Gets fromMail.
     * 
     * @return string
     */
    public function getFromMail()
    {
        return $this->fromMail;
    }

    /**
     * Sets to.
     * 
     * @param string $to
     * 
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Gets to.
     * 
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets cc.
     * 
     * @param string $cc
     * 
     * @return $this
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Gets cc.
     * 
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Sets sentDate.
     * 
     * @param \DateTime $sentDate
     * 
     * @return $this
     */
    public function setSentDate(\DateTime $sentDate)
    {
        $this->sentDate = $sentDate;

        return $this;
    }

    /**
     * Gets sentDate.
     * 
     * @return \DateTime
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }

    /**
     * Sets stations.
     * 
     * @param string $stations
     * 
     * @return $this
     */
    public function setStations($stations)
    {
        $this->stations = $stations;

        return $this;
    }

    /**
     * Gets stations.
     * 
     * @return string
     */
    public function getStations()
    {
        return $this->stations;
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
     * Sets parent.
     * 
     * @param Mail $parent
     * 
     * @return $this
     */
    public function setParent(Mail $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Gets parent.
     * 
     * @return Mail
     */
    public function getParent()
    {
        return $this->parent;
    }
}
