<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/5/15
 * Time: 4:24 PM
 */

namespace App\Http\Controllers;


use Psy\CodeCleaner;

class RatingController extends Controller{

    public function create(){

        return view('rating/rating');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }


} 