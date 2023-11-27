<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbZashtorkoiReviews2 extends Migration
{
    public function up()
    {
        Schema::table('annb_zashtorkoi_reviews', function($table)
        {
            $table->renameColumn('xpositiion', 'xposition');
        });
    }
    
    public function down()
    {
        Schema::table('annb_zashtorkoi_reviews', function($table)
        {
            $table->renameColumn('xposition', 'xpositiion');
        });
    }
}
