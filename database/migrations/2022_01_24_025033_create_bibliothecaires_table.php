<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliothecairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliothecaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')
                ->references('id')
                ->on('personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliothecaires');
    }
}
