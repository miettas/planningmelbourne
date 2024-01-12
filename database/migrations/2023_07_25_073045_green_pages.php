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
        $table->id('grid');
        $table->string('grname');
        $table->string('gdescription'); 
        $table->longtext('grinfo');
        $table->integer('chapters_pl_chapid');
        $table->integer('books_pl_bkid');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
