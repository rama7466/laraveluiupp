<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crupp extends Model
{
    use HasFactory;

    protected $table = 'tbl_crupp';

    protected $primaryKey = 'id';
    protected $fillable = ['no_upp','tanggal_upp','departemen', 'manager_approval', 'email_manager_approval1', 'pengaju', 'email_pengaju', 'kategori_prosedur', 'kode_prosedur', 'nama_dokumen', 'sebelum_perubahan', 'setelah_perubahan', 'alasan', 'attachment_file', 'tanggal_permohonan_berlaku'];

}
