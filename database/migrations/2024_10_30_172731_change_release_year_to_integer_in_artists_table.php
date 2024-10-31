<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//write comments for this later
class ChangeReleaseYearToIntegerInArtistsTable extends Migration
{
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
           
            $table->dropColumn('releaseYear');
        });

        Schema::table('artists', function (Blueprint $table) {

            $table->integer('releaseYear')->after('rating'); 
        });
    }

    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->date('releaseYear')->after('rating'); 
        });
    }
}