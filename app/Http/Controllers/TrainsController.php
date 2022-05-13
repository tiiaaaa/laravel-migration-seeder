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
    public function index(){


        return view("trains.index");
    }
}
