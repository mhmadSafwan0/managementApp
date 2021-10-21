<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name')->nullable()->nullable()->constrained('projects','id')->onDelete('restrict');;
            $table->foreignId('project_id')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
