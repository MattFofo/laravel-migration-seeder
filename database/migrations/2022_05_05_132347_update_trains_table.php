<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('trains', function (Blueprint $table) {
        //     $table->renameColumn('stazione di partenza', 'stazione_di_partenza');
        //     $table->renameColumn('stazione di arrivo', 'stazione_di_arrivo');
        //     $table->renameColumn('orario di partenza', 'orario_di_partenza');
        //     $table->renameColumn('orario di arrivo', 'orario_di_arrivo');
        //     $table->renameColumn('codice treno', 'codice_treno');
        //     $table->renameColumn('numero di carrozze', 'numero_di_carrozze');
        //     $table->renameColumn('in orario', 'in_orario');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('trains', function (Blueprint $table) {
        //     $table->renameColumn('stazione_di_partenza', 'stazione di partenza');
        //     $table->renameColumn('stazione_di_arrivo', 'stazione di arrivo');
        //     $table->renameColumn('orario_di_partenza', 'orario di partenza');
        //     $table->renameColumn('orario_di_arrivo', 'orario di arrivo');
        //     $table->renameColumn('codice_treno', 'codice treno');
        //     $table->renameColumn('numero_di_carrozze', 'numero di carrozze');
        //     $table->renameColumn('in_orario', 'in orario');
        // });
    }
}
