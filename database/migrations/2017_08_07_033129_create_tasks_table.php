<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("description")->nullable();
            $table->integer("feature_id")->unsigned();
            $table->timestamps();
            $table->foreign("feature_id")->references("id")->on("features");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
