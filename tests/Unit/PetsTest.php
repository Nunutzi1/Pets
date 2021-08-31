<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Pets;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PetsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // Create pet
    public function test_pets()
    {

        $data = [
            'name' => 'Foca',
            'description' => 'Ejemplo'
        ];

        $this->json('POST', route('create'),$data)
                ->assertStatus(201)
                ->assertJson($data);
    }

    // Get pets
    public function test_pets_get(){
        $this->get(route('pets'))->assertStatus(200);
    }

    // Get pet by id
    public function test_pet_get(){
        $this->get(route('pet.id', 2))->assertStatus(200);
    }

    // Update pet by id
    public function test_pet_update(){
        $data = [
            'name' => 'Foca2',
            'description' => 'Ejemplo'
        ];

        $this->json('PUT', route('pet.update', 13),$data)
                ->assertStatus(200)
                ->assertJson($data);
    }

    // Delete pet by id
    public function test_pet_delete(){
        $this->delete(route('pet.delete', 16))->assertStatus(200);
    }
}
