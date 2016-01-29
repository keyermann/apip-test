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
 * A photograph.
 * 
 * @see http://schema.org/Photograph Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @UniqueEntity("name")
 * @Iri("http://schema.org/Photograph")
 */
class Photograph
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
     * @ORM\Column(nullable=true, unique=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/name")
     */
    private $name;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $date;
    /**
     * @var bool
     * 
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="boolean")
     * @Assert\NotNull
     */
    private $isPublic;
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
     * Sets date.
     * 
     * @param \DateTime $date
     * 
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets date.
     * 
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets isPublic.
     * 
     * @param bool $isPublic
     * 
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Gets isPublic.
     * 
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->isPublic;
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
