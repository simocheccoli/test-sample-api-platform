<?php


namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

final class UpdateGreeting
{

    /**
     * A nice person
     *
     */
    #[Assert\NotBlank]
    public string $nameToUpdate = '';
}
