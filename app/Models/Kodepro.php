<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodepro extends Model
{
    use HasFactory;

    protected $table = 'tbl_kodepro';
    protected $fillable = ['kode_prosedur'];
}
