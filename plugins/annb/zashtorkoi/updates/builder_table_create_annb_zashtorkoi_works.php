<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbZashtorkoiWorks extends Migration
{
    public function up()
    {
        Schema::create('annb_zashtorkoi_works', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('mediafinder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_zashtorkoi_works');
    }
}
