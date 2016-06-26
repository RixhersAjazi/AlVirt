<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return $this->renderView('homepage');
    }
}
