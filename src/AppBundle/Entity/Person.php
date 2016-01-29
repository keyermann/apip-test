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
 * A person (alive, dead, undead, or fictional).
 * 
 * @see http://schema.org/Person Documentation on Schema.org
 *
 * @author Kévin Eyermann <kevin.eyermann@ign.fr>
 * 
 * @ORM\MappedSuperclass
 * @Iri("http://schema.org/Person")
 */
abstract class Person extends Thing
{
    /**
     * @var string Email address.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Email
     * @Iri("https://schema.org/email")
     */
    private $email;
    /**
     * @var string The fax number.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/faxNumber")
     */
    private $faxNumber;
    /**
     * @var string The telephone number.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/telephone")
     */
    private $telephone;
    /**
     * @var Agency
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agency")
     */
    private $workFor;

    /**
     * Sets email.
     * 
     * @param string $email
     * 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets email.
     * 
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets faxNumber.
     * 
     * @param string $faxNumber
     * 
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Gets faxNumber.
     * 
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets telephone.
     * 
     * @param string $telephone
     * 
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets telephone.
     * 
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets workFor.
     * 
     * @param Agency $workFor
     * 
     * @return $this
     */
    public function setWorkFor(Agency $workFor = null)
    {
        $this->workFor = $workFor;

        return $this;
    }

    /**
     * Gets workFor.
     * 
     * @return Agency
     */
    public function getWorkFor()
    {
        return $this->workFor;
    }
}
