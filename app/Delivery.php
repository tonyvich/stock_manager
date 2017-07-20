<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['size', 'date', 'deliver','item_id'];
}
