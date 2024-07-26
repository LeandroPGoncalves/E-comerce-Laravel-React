<?php

namespace App\core\product\entity;

use App\core\base\abstract\traits\base_entity;

class product extends base_entity{

    public function __construct(string $id) {
        parent::__construct($id);
    }
}

