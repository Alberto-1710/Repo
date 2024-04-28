<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $table = "vuelo";
    public $timestamps = false;
    protected $primaryKey='numeroVuelo';
    public $incrementing = false;
}
