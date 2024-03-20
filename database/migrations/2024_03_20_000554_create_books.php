<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('book_id')->primary();
            $table->uuid('library_id')->index();
            $table->string('name' , 100);
            $table->string('author' , 100);
            $table->string('editor' , 100);
            $table->string('edition' , 50);
            $table->integer('number_pages');
            $table->string('ean');
            $table->string('language' , 50);
            $table->string('gender' , 50);
            $table->integer('quantity' , );
            $table->enum('status' , ['Requested' , 'Available' , 'Soon']);
            $table->integer('number_evaluation')->nullable();
            $table->float('avg_evaluation',2)->default(0);
            $table->integer('evaluation')->nullable();
            $table->timestamps();

            $table->foreign('library_id')->references('library_id')->on('libraries');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
