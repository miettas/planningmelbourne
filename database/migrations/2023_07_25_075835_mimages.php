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
        $table->id('imgid');
        $table->string('imgname');
        $table->string('imgpath');
        $table->string('imgext');
        $table->string('alt');
        $table->text('caption');
        $table->string('credit');
        $table->text('imgcomments');  
        $table->integer('person_ppid');
        $table->integer('place_plid');
        $table->integer('article_artid');
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
