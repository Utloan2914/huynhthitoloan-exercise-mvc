<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


//Activity 4 

// class FruitController extends Controller
// {
//     public function getFruits()
//     {
//         return "I have no fruits !";
//     }
// }


//Activyty 5


class FruitController extends Controller
{
    public function getFruits()
    {
        $fruits = Fruit::all();
        return view('fruits', ['fruits' => $fruits]);
    }
}
