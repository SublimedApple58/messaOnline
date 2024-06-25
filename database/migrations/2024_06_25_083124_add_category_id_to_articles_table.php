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
        Schema::table('articles', function (Blueprint $table) {
            $table->dropcolumn('category');

            $table->unsignedBigInteger('category_id')->after('title')->nullable();
            $table->foreign('category_id')->references('id')->on('categories'); // Vincolo di integrità referenziale
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // rompere il vincolo
            $table->dropForeign(['category_id']);

            // elimino la colonna
            $table->dropColumn('category_id');
            
            // ripristino la colonna rotta nell'up
            $table->string('category')->nullable();

        });
    }
};
