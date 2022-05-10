<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_anak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anak_id')->constrained('anak');
            $table->foreignId('mapel_id')->constrained('judul_materi');
            $table->string("material");
            $table->integer('nilai');
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
        Schema::dropIfExists('nilai_anak');
    }
};
