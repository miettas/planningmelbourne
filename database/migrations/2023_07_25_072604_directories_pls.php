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
        $table->id('drid');
        $table->string('dname');
        $table->string('headlineCol1');
        $table->string('headlineCol2');
        $table->string('headlineCol3');
        $table->text('infoCol1');
        $table->text('infoCol2');
        $table->text('infoCol3');
        $table->text('artthumb');
        $table->text('dirImage');
        $table->text('dirCaption');
        $table->text('dirDescription');       
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
