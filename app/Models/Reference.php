<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reference extends Model
{
    use HasFactory;

    function save(Request $req)
    {
        print_r($req->input());
    }
}
