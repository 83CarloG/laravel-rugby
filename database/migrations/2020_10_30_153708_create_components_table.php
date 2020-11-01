<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('cognome', 20);
            $table->date('data_nascita');
            $table->string('comune_nascita', 30);
            $table->string('provincia_nascita', 30);
            $table->string('stato_nascita', 30);
            $table->string('comune_residenza', 30);
            $table->string('provincia_residenza', 30);
            $table->string('indirizzo_residenza', 30);
            $table->smallInteger('civico_residenza');
            $table->string('stato_residenza', 30);
            $table->string('telefono', 20);
            $table->string('email', 30);
            $table->string('ruolo', 20);
            $table->string('tesserino', 20)->unique();
            $table->text('note');
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
        Schema::dropIfExists('components');
    }
}
