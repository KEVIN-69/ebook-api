<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119049',
            'Daniel Kevin Suhendro',
            'Laki-laki',
            '+62 878-4797-4624',
            'XII RPL 2'
        ]);
    }
}
