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
        Schema::create('coa', function (Blueprint $table) {
            $table->increments('id_coa');
            $table->decimal('perkiraan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('group')->nullable();
            $table->string('subgrub')->nullable();
            $table->string('detail')->nullable();
            $table->string('group1')->nullable();
            $table->string('group2')->nullable();
            $table->string('group3')->nullable();
            $table->decimal('saldo')->nullable();
            $table->string('kode')->nullable();
            $table->string('kode2')->nullable();
            $table->decimal('debet')->nullable();
            $table->decimal('kredit')->nullable();
            $table->decimal('saldo1')->nullable();
            $table->decimal('saldo2')->nullable();
            $table->string('saldo3')->nullable();
            $table->decimal('debet1')->nullable();
            $table->decimal('debet2')->nullable();
            $table->string('debet3')->nullable();
            $table->decimal('b1')->nullable();
            $table->decimal('b2')->nullable();
            $table->decimal('b3')->nullable();
            $table->decimal('b4')->nullable();
            $table->decimal('b5')->nullable();
            $table->decimal('b6')->nullable();
            $table->decimal('b7')->nullable();
            $table->decimal('b8')->nullable();
            $table->decimal('b9')->nullable();
            $table->decimal('b20')->nullable();
            $table->decimal('b11')->nullable();
            $table->decimal('b12')->nullable();
            $table->decimal('kredit1')->nullable();
            $table->decimal('kredit2')->nullable();
            $table->string('kredit3')->nullable();
            $table->string('tahun')->nullable();
            $table->string('link')->nullable();
            $table->string('sak')->nullable();
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
        Schema::dropIfExists('coa');
    }
};
