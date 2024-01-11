<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaCollection extends Controller{
    public function profiles(){
        $dataCollection = collect([
            'Arugo', 'Nyotnyot', 'Agus', 'Jhonny',
        ]);
        $profiles = $dataCollection->random();
        return view('profiles', compact('profiles', 'dataCollection'));
    }
}


