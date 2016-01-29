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
class Plate extends Thing
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
    private $abbreviation;
    /**
     * @var string
     * 
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $geom;
    /**
     * @var PlateModel
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlateModel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $plateModel;

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
     * Sets abbreviation.
     * 
     * @param string $abbreviation
     * 
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Gets abbreviation.
     * 
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
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
     * Sets plateModel.
     * 
     * @param PlateModel $plateModel
     * 
     * @return $this
     */
    public function setPlateModel(PlateModel $plateModel = null)
    {
        $this->plateModel = $plateModel;

        return $this;
    }

    /**
     * Gets plateModel.
     * 
     * @return PlateModel
     */
    public function getPlateModel()
    {
        return $this->plateModel;
    }
}
