<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('slug', 255)->unique();
			$table->text('summary');
			$table->text('content');
			$table->boolean('seen')->default(false);
			$table->boolean('active')->default(false);
			$table->integer('user_id')->unsigned();
			$table->text('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grades');
    }
}
