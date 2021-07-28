<?php

  use Illuminate\Support\Facades\Schema;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateDeskListsTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('desk_lists', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('desk_id')->constrained();
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
      Schema::dropIfExists('desk_lists');
    }
  }
