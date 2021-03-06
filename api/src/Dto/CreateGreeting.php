<?php


namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

final class CreateGreeting
{

    /**
     * A nice person
     *
     */
    #[Assert\NotBlank]
    public string $nameToCreate = '';
}
