<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function __contruct(){
        $this->middleware('auth');
    }
    
    
}
