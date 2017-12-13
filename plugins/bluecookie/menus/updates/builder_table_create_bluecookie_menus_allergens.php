<?php namespace Bluecookie\Menus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBluecookieMenusAllergens extends Migration
{
    public function up()
    {
        Schema::create('bluecookie_menus_allergens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bluecookie_menus_allergens');
    }
}
