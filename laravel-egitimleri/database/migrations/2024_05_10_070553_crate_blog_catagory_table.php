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

        Schema::create('blog_catagory', function (Blueprint $table) {
        $table->id();
        $table->foreignId('catagory_id')->constrained()->onDelete('cascade');
        $table->foreignId('blogs_id')->constrained()->onDelete('cascade');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
