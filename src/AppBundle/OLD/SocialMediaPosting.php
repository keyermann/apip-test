<?php

namespace AppBundle\OLD;

use Doctrine\ORM\Mapping as ORM;
use Dunglas\ApiBundle\Annotation\Iri;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
 * 
 * @see http://schema.org/SocialMediaPosting Documentation on Schema.org
 * 
 * @ORM\MappedSuperclass
 * @Iri("http://schema.org/SocialMediaPosting")
 */
abstract class SocialMediaPosting extends Article
{
}
