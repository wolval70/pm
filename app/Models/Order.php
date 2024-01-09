<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['title','description', 'notes', 'category', 'is_flatrate', 'annual_date', 'price', 'status'];

    public function order(){
        return $this->belongsTo('App\Models\Company');


}
