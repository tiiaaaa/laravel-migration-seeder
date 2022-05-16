<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Collegato il model al controller
use App\Train;

/**
 * Trainscontroller estende controller e quindi eredita tutta una serie di proprietà,
 *  e ha una funzione index() che ritorna la view di train.index e passa tutti i dati da visualizzare all interno
 */
class TrainsController extends Controller
{
    /**
     * Attraverso metodo index() recupera tutti i treni dal database tramite model Train,
     * fa la richieta query tramite metodo statico all() e salva tutti i dati restituiti in $trains
     * infine ritorna la view in index con l'array dei treni recuperati
     */
    public function index(){

        $trainModel = new Train();
        $trains = $trainModel::all();

        return view("trains.index", compact('trains'));
    }

    public function show($id){

        $train = Train::findOrFail($id);

        return view("trains.show", ['train'=> $train]);
    }
}
