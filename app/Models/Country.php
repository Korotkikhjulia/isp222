<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $primaryKey = 'Code';//указать на столбик id
     public $incrementing = false;
    protected $keyType = 'string';

    public function citys()
    {
        return $this->hasMany(City::class);
    }
}
