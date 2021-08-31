<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function getPets(Pets $pets)
    {
        // Get all pets and return
        $allPets = $pets->all();
        return $allPets;
    }

     /**
     * Display a listing of the resource.
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function getPet($id)
    {
        // Get pet by id and return
        $pet = Pets::find($id);
        return $pet;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Validate data
        $validate = $this->validate($request, [
            'name' => ['string','required'],
            'description' => ['string','required','max:100']
        ]);

        // Create pets and return
        $crear = Pets::create($request->all());
        return $crear;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get the object(pet) by id
        $pet = Pets::find($id);

        // Validate data
        $validate = $this->validate($request, [
            'name' => ['string','required'],
            'description' => ['string','required','max:100']
        ]);

        // Update data and return
        $pet->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the object(pet) by id and delete
        $pet = Pets::find($id)->delete();

        // answer JSON and return
        $response['message'] = "Eliminado exitosamente";
        $response['success'] = true;
        
        return $response;
    }
}
