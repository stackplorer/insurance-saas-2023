<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPersonsTable extends Migration
{
    public function up()
    {
        Schema::table('persons', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->unsignedBigInteger('domicile_country_id')->nullable();
            $table->foreign('domicile_country_id')->references('id')->on('countries');
        });
    }

    public function down()
    {
        Schema::table('persons', static function (Blueprint $table) {
            $table->dropForeign('persons_team_id_foreign');
            $table->dropForeign('persons_domicile_country_id_foreign');
        });
    }
}