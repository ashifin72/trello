<?php

  use Illuminate\Support\Facades\Schema;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateCardsTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cards', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('desk_list_id')->constrained();
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
      Schema::dropIfExists('cards');
    }
  }
