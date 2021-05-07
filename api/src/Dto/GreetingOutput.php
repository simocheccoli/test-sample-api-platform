<?php


namespace App\Dto;


class GreetingOutput
{



    /**
     * A nice person
     */
    #[Assert\NotBlank]
    public string $nameCreated = '';

}
