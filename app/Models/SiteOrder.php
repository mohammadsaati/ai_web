<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteOrder extends Model
{
    protected $fillable = ['name', 'email', 'features', 'type', 'budget', 'deadline'];
}
