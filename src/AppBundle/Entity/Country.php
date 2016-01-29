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
 * A country.
 * 
 * @see http://schema.org/Country Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\Entity
 * @Iri("http://schema.org/Country")
 */
class Country extends Thing
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
     * @var float
     * 
     * @ORM\Column(type="float")
     * @Assert\Type(type="float")
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
    private $nameFr;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $isoCodeV2;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $isoCodeV3;

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
     * Sets number.
     * 
     * @param float $number
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
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
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
     * Sets isoCodeV2.
     * 
     * @param string $isoCodeV2
     * 
     * @return $this
     */
    public function setIsoCodeV2($isoCodeV2)
    {
        $this->isoCodeV2 = $isoCodeV2;

        return $this;
    }

    /**
     * Gets isoCodeV2.
     * 
     * @return string
     */
    public function getIsoCodeV2()
    {
        return $this->isoCodeV2;
    }

    /**
     * Sets isoCodeV3.
     * 
     * @param string $isoCodeV3
     * 
     * @return $this
     */
    public function setIsoCodeV3($isoCodeV3)
    {
        $this->isoCodeV3 = $isoCodeV3;

        return $this;
    }

    /**
     * Gets isoCodeV3.
     * 
     * @return string
     */
    public function getIsoCodeV3()
    {
        return $this->isoCodeV3;
    }
}
