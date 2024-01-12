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
        $table->id('ppid');
        $table->string('first');
        $table->string('last');
        $table->string('salutation');
        $table->string('honorifics');
        $table->string('bioauthor');
        $table->string('ppcredit');
        $table->text('biography');
        $table->text('ppimage');
        $table->string('ppaption');
        $table->text('ppcomments');
        $table->string('pptag');
        $table->string('type');
        $table->text('ppsidebar');
        $table->integer('article_artid');
        $table->integer('directories_pl_dirid');
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
