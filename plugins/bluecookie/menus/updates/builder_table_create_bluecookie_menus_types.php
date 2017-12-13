<?php namespace Bluecookie\Menus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBluecookieMenusTypes extends Migration
{
    public function up()
    {
        Schema::create('bluecookie_menus_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bluecookie_menus_types');
    }
}
