<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Project;

class CreateProjectsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->index();
            $table->string('title');
            $table->string('slug');
            $table->string('technologies_use');
            $table->string('url_1')->nullable();
            $table->string('url_2')->nullable();
            $table->text('sort_desc');
            $table->boolean('is_publish')->default(Project::UNPUBLISHED);

            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
