<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbZashtorkoiPromos extends Migration
{
    public function up()
    {
        Schema::create('annb_zashtorkoi_promos', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('mediafinder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_zashtorkoi_promos');
    }
}
