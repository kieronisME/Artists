<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//chaned realse year from DATE to int so i could query it easier 
class ChangeReleaseYearToIntegerInAlbumsTable extends Migration
{
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
           
            $table->dropColumn('releaseYear');
        });

        Schema::table('albums', function (Blueprint $table) {

            $table->integer('releaseYear')->after('rating'); 
        });
    }

    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->integer('releaseYear')->after('rating'); 
        });
    }
}