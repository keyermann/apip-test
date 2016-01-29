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
 * @ORM\MappedSuperclass
 * @Iri("http://schema.org/IndividualProduct")
 */
abstract class IndividualProduct
{
    /**
     * @var string A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/category")
     */
    private $category;
    /**
     * @var string The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Iri("https://schema.org/serialNumber")
     */
    private $serialNumber;

    /**
     * Sets category.
     * 
     * @param string $category
     * 
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets category.
     * 
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets serialNumber.
     * 
     * @param string $serialNumber
     * 
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Gets serialNumber.
     * 
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
