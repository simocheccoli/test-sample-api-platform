<?php


namespace App\Dto;


final class GreetingOutput
{

    /**
     * A nice person
     */
    #[Assert\NotBlank]
    public string $nameCreated = '';

}
