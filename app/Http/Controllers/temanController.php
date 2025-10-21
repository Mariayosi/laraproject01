<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class temanController extends Controller
{
    public function index(){
        $dt = [
            [
                'idbuku'=>1,
                'namateman'=>'Yuanes Idah Blili',
                'alamat'=>'Jl. Lurus Terus Blok D.29A',
                'kota'=>'Denpasar',
                'telp'=>'03611011',
                'wa'=>'08778877',
            ],
            [
                'idbuku'=>2,
                'namateman'=>'Yunita Sari dewi Purnama',
                'alamat'=>'Jl. Lika-liku D No 29A',
                'kota'=>'Denpasar',
                'telp'=>'036445544',
                'wa'=>'0866554433',
            ],
        ];
        return view('teman',compact('dt') ) ;
    }
}
