<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->String('nom')->nullable();
            $table->String('telephone')->nullable();
            $table->String('profession')->nullable();
            $table->String('nationnalité')->nullable();
            $table->date('dateNa')->nullable();
            $table->String('lieuN')->nullable();
            $table->String('sexe')->nullable();
            $table->String('adresse')->nullable();
            $table->String('email')->nullable();
            $table->String('photo')->nullable();
            $table->String('nomMedecin')->nullable();
            $table->String('groupeSanguin')->nullable();
            $table->String('couvS')->nullable();
            $table->String('analyse')->nullable();
            $table->String('maladie')->nullable();
            $table->longText('rapport')->nullable();
            $table->String('medicament')->nullable();
            $table->foreignId('doctor_id')->nullable()->constrainted()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrainted()->onDelete('cascade');

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
        Schema::dropIfExists('patients');
    }
}
