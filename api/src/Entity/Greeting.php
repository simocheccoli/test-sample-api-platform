<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Dto\CreateGreeting;
use App\Dto\GreetingOutput;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 *
 * @ApiResource(
 *     collectionOperations={
 *         "create"={
 *             "method"="POST",
 *             "input"=CreateGreeting::class,
 *             "output"=GreetingOutput::class
 *         },
 *         "get"
 *     }
 * )
 */
class Greeting
{
    /**
     * The entity ID
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * A nice person
     *
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $name = '';

    public function getId(): ?int
    {
        return $this->id;
    }
}
