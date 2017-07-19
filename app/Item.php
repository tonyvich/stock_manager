<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name','description','price'];
    protected $guarded = ['id'];

    public function  deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

    public function outputs() 
    {
        return $this->hasMany(Output::class);
    }
}
