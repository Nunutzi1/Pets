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
        // Obtener todos las mascotas
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
        // Obtener todos las mascotas
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
        $validate = $this->validate($request, [
            'name' => ['string','required'],
            'description' => ['string','required','max:100']
        ]);

        $crear = Pets::create($request->all());
        return $crear;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function edit(Pets $pets)
    {
        //
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
        $pet = Pets::find($id);

        $validate = $this->validate($request, [
            'name' => ['string','required'],
            'description' => ['string','required','max:100']
        ]);

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
        $pet = Pets::find($id)->delete();

        // respesta de JSON
        $response['message'] = "Eliminado exitosamente";
        $response['success'] = true;
        
        return $response;
    }
}
