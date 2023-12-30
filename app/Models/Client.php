<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id')->withDefault([
            'service_name' => 'Not selected'
        ]);
    }

    public function note(){
        return $this->hasOne(Note::class,'client_id','id');
    }
}
