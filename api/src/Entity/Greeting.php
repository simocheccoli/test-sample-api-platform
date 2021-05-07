<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use App\Dto\CreateGreeting;
use App\Dto\UpdateGreeting;
use App\Dto\GreetingOutput;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 *
 * @ApiResource(
 *     collectionOperations={
 *         "post"={
 *             "method"="POST",
 *             "input"=CreateGreeting::class,
 *             "output"=GreetingOutput::class
 *         },
 *         "get"
 *     },
 *     itemOperations={
 *          "get",
 *          "delete",
 *          "put"={
 *             "method"="PUT",
 *             "input"=UpdateGreeting::class,
 *             "output"=GreetingOutput::class
 *          }
 *     }
 * )
 */
final class Greeting
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
    public string $name = '';

    public function getId(): ?int
    {
        return $this->id;
    }
}
