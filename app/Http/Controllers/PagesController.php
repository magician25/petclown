<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        return view('pages.home');
    }
}