<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTableCountries
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class CreateTableCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code')->comment = 'C�digo identificador do pa�s.';
            $table->string('country_description')->comment = 'Nome/Descri��o do pa�s.';
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
        Schema::dropIfExists('countries');
    }
}
