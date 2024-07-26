<?php

namespace tests\unit\App\core\product\entity;

use App\core\product\entity\product;
use Ramsey\Uuid\Uuid;
use Tests\TestCase;

class product_Test extends TestCase {
    public function test_if_create_uuid(){

        $product = new product('');

        $pattern = '/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-4[a-fA-F0-9]{3}-[89abAB][a-fA-F0-9]{3}-[a-fA-F0-9]{12}$/';


        $this->assertTrue((preg_match($pattern, $product->getId())===1));



    }
}

