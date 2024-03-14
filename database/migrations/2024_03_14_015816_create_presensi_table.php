<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Presensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->string('id_kelas');
            $table->string('id_materi');
            $table->string('id_asisten');
            $table->string('teaching_role');
            $table->date('date');
            $table->string('start');
            $table->string('time');
            $table->string('duration');
            $table->string('id_kode');
            $table->timestamps();            
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
