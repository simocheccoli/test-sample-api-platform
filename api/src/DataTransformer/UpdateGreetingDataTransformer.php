<?php
// src/DataTransformer/BookInputDataTransformer.php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use ApiPlatform\Core\Serializer\AbstractItemNormalizer;
use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Dto\UpdateGreeting;
use App\Entity\Greeting;

final class UpdateGreetingDataTransformer implements DataTransformerInterface
{

    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($data, string $to, array $context = [])
    {

        $this->validator->validate($data);

        $greeting = $context[AbstractItemNormalizer::OBJECT_TO_POPULATE];

        $greeting->name = $data->nameToUpdate;
        return $greeting;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        // in the case of an input, the value given here is an array (the JSON decoded).
        // if it's a book we transformed the data already
        if ($data instanceof Greeting) {
            return false;
        }

        return Greeting::class === $to && UpdateGreeting::class == ($context['input']['class'] ?? null);
    }
}
