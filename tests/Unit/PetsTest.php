<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Pets;
use Illuminate\Database\Eloquent\Collection;

class PetsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_pets()
    {
        $pet = new Pets;

        $this->assertInstanceOf(Collection::class, $pet->posts);
    }
}
