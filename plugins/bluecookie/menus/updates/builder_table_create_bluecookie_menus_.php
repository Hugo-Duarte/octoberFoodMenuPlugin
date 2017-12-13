<?php namespace Bluecookie\Menus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBluecookieMenus extends Migration
{
    public function up()
    {
        Schema::create('bluecookie_menus_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bluecookie_menus_');
    }
}
