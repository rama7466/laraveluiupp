<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'tbl_upload';
    protected $fillable = ['upload_file','email_app1','email_app2','email_app3'];
}
