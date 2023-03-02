<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_info', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_hero');
            $table->text('visi');
            $table->text('misi');
            $table->string('slogan', 50);
            $table->string('foto_kahim');
            $table->string('foto_wakahim');
            $table->string('nama_kahim', 50);
            $table->string('nama_wakahim', 50);
            $table->string('foto_struktur');
            $table->string('tahun', 4);
            $table->string('link_proker')->nullable();
            $table->string('link_adart')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_info');
    }
}
