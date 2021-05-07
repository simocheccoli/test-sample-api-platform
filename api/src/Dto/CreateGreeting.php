<?php


namespace App\Dto;


class CreateGreeting
{

    /**
     * A nice person
     *
     */
    #[Assert\NotBlank]
    public string $nameToCreate = '';
}
