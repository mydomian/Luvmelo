<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAssign extends Model
{
    use HasFactory;
    public function client_assign(){
        return $this->belongsTo(Client::class,'client_id')->with('service');
    }
}
