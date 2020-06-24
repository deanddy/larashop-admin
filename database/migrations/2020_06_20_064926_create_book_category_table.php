<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoryTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('book_category', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('book_id')->nullable();
      $table->unsignedBigInteger('category_id')->nullable();
      // Karena atribut yang direferensikan menggunakan bigIncrements (table book dan category)
      
			$table->timestamps();
			
			$table->foreign('book_id')->references('id')->on('books');
			$table->foreign('category_id')->references('id')->on('categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('book_category');
  }
}
