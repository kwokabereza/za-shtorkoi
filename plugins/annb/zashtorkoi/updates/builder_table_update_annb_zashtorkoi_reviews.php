<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbZashtorkoiReviews extends Migration
{
    public function up()
    {
        Schema::table('annb_zashtorkoi_reviews', function($table)
        {
            $table->integer('xpositiion')->nullable();
            $table->integer('yposition')->nullable();
            $table->integer('angle')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('annb_zashtorkoi_reviews', function($table)
        {
            $table->dropColumn('xpositiion');
            $table->dropColumn('yposition');
            $table->dropColumn('angle');
        });
    }
}
