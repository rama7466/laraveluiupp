<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
   use HasFactory;

   protected $table = 'tbl_departemen';
   protected $fillable = ['departemen','nama_manager','email_manager'];
}
