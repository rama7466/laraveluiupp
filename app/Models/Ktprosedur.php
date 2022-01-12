<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktprosedur extends Model
{
    use HasFactory;

    protected $table = 'tbl_ktprosedur';
    protected $fillable = ['kategori_prosedur'];
}
