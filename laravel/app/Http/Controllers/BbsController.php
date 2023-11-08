<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb; // Перемещено сюда

class BbsController extends Controller {
    public function index() {
        $context=['bbs'=>Bb::latest()->get()];
        return view('index', $context);
    }


    public function detail($bb) {
        $bb = Bb::find($bb);
        return view('detail', ['bb'=>$bb]);
    }

}
