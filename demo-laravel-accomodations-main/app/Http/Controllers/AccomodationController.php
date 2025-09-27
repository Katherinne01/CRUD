<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    //toda la logica de lo que queres hacer con tus alojamientos

    //metodo para obtener alojamientos
    /**
     * ORM => 
     * QUERYBUILDER =>
     */
    public function index(){
        //ORM
        //$accomodations = Accomodation::all();

        //QUERY BUILDER (name, description, address, image)
        //select name, description, address, image from accomodations 
        $accomodations = Accomodation::select('name', 'description', 'address', 'image')->get();
        if(count($accomodations) > 0){
            return response()->json($accomodations, 200);
        }
        return response()->json(["message" => "No hay alojamientos por el momento"], 200);
    }
}
