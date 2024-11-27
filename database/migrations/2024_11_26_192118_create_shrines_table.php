<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShrinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shrines', function (Blueprint $table) {
            $table->id(); // Унікальний ідентифікатор
            $table->string('name'); // Назва храму
            $table->string('image')->nullable(); // Зображення храму
            $table->text('description')->nullable(); // Опис храму
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shrines');
    }
}
