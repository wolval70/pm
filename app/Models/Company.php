<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','firstname', 'lastname', 'street', 'zip', 'city'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
