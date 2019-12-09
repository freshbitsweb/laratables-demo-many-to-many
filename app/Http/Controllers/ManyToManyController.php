<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;

class ManyToManyController extends Controller
{
    /**
     * Show Table Header column
     *
     * @return Illuminate\Http\Response
     **/
    public function index()
    {
        return view('many_to_many');
    }

    /**
     * return data of the Many To Many Relationship datatables.
     *
     *
     * @return Jason
     **/
    public function manyToManyData()
    {
        return Laratables::recordsOf(User::class);
    }
}
