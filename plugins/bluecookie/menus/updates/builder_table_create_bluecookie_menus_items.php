<?php namespace Bluecookie\Menus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBluecookieMenusItems extends Migration
{
    public function up()
    {
        Schema::create('bluecookie_menus_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('price', 10, 0);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bluecookie_menus_items');
    }
}
