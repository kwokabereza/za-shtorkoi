<?php namespace Annb\ZaShtorkoi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbZashtorkoiReviews extends Migration
{
    public function up()
    {
        Schema::create('annb_zashtorkoi_reviews', function($table)
        {
            $table->increments('id');
            $table->string('mediafinder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_zashtorkoi_reviews');
    }
}
