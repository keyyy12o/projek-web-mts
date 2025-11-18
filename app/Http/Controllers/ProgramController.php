<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function sejarah()
    {
        return view('program.sejarah');
    }

    public function visimisi()
{
    return view('program.visimisi');
}

public function saranaprasarana()
{
    return view('page.fasilitas');
}


}



