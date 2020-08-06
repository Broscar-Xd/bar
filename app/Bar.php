<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bar extends Model
{
    use SoftDeletes; 
    protected $guarded = [];

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
