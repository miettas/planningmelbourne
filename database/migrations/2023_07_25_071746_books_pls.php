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
        $table->id('bkid');
        $table->string('bkname');
        $table->string('bkauthor');
        $table->string('bkthumb');
        $table->text('bkdescription');
        $table->string('publisher');
        $table->string('isbn');
        $table->string('datepublished');
        $table->text('bkinfo');     
        $table->string('bktype');       
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
