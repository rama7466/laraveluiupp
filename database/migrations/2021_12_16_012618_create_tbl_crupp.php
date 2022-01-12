<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCrupp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_crupp', function (Blueprint $table) {
            $table->id();
            $table->string("no_upp");
            $table->string("tanggal_upp");
            $table->string("departemen");
            $table->string("manager_approval");
            $table->string("email_manager_approval1");
            $table->text("pengaju");
            $table->text("email_pengaju");
            $table->string("kategori_prosedur");
            $table->string("kode_prosedur");
            $table->text("nama_dokumen");
            $table->text("sebelum_perubahan");
            $table->text("setelah_perubahan");
            $table->text("alasan");
            $table->string("attachment_file");
            $table->date("tanggal_permohonan_berlaku");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_crupp');
    }
}
