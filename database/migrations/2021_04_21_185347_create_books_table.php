<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id");
            $table->string("book_name");
            $table->string("book_image")->nullable();
            $table->text("description");
            $table->string("author_name");
            $table->string("publisher");
            $table->integer("pages")->default(0);
            $table->string("slug");
            $table->string('isbn');

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
        Schema::dropIfExists('books');
    }
}
