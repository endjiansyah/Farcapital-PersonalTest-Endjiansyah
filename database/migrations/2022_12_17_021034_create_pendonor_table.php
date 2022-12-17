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
        Schema::create('pendonor', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->integer('gender');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->boolean('layak')->default(false);
            // -------
            $table->boolean('izinortu')->default(false);
            $table->float('beratbadan')->nullable();
            $table->float('temperatur')->nullable();
            $table->float('sistole')->nullable();
            $table->float('diastole')->nullable();
            $table->integer('nadi')->nullable();
            $table->integer('hemoglobin')->nullable();
            // -------
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
        Schema::dropIfExists('pendonor');
    }
};
