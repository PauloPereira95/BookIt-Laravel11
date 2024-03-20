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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->uuid('requisition_id')->primary();
            $table->uuid('user_id')->index();
            $table->uuid('book_id')->index();
            $table->enum('status' , ['Approved', 'Rejected' , 'Pendent']);
            $table->dateTime('order_date')->useCurrent();
            $table->dateTime('delivery_date');
            $table->string('comments' , 1000);
            $table->timestamps();
            //FK'S
//            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('book_id')->references('book_id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
