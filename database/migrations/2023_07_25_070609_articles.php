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
        $table->id('artid');
        $table->string('artsort');
        $table->string('headline');
        $table->string('artdate');
        $table->string('artauthor');
        $table->text('artcredit');
        $table->text('abstract');
        $table->longtext('article');
        $table->text('artimage');
        $table->text('artthumb');
        $table->text('artcaption');
        $table->text('artsidebar');
        $table->string('arttag');
        $table->string('tagtype');
        $table->integer('directories_pl_dirid');
        $table->integer('people_pl_ppid');
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
