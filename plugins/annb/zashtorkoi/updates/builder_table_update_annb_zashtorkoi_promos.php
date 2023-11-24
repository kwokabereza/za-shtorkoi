<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbZashtorkoiPromos extends Migration
{
    public function up()
    {
        Schema::table('annb_zashtorkoi_promos', function($table)
        {
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('annb_zashtorkoi_promos', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
