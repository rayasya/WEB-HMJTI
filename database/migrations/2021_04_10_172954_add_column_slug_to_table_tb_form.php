<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSlugToTableTbForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_form', function (Blueprint $table) {
          $table->string('slug')->nullable()->after('id_form');
          $table->string('deskripsi')->nullable()->after('judul_form');
          $table->string('contact_person')->nullable()->after('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_form', function (Blueprint $table) {
          $table->dropColumn('slug');
          $table->dropColumn('deskripsi');
          $table->dropColumn('contact_person');
        });
    }
}
