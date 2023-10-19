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
        Schema::create('demandeadmissions', function (Blueprint $table) {
            $table->id();

            $table->string('niveau');
            $table->string('filiere ');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('lieu_naissance');
            $table->date('date_naissance');
            $table->string('sexe');
            $table->string('etatcivil');
            $table->string('nationalite');
            $table->string('tel');
            $table->string('email');
            $table->string('g1');
            $table->string('g2');
            $table->string('g3');
            $table->string('l1');
            $table->string('l2')->nullable()->change();
            $table->string('d3')->nullable()->change();
            $table->string('d4')->nullable()->change();
            $table->string('obs');
            $table->string('doc');
            $table->string('payid');
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
        Schema::dropIfExists('demandeadmissions');
    }
};
