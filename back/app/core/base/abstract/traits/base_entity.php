<?php

namespace App\core\base\abstract\traits;

use Ramsey\Uuid\Uuid;

abstract class base_entity {

    public function __construct(protected string $id='')
    {
        $this->id = $id ?: Uuid::uuid4()->toString();
    }

    public function getId(): string
    {
        return $this->id;
    }
}

