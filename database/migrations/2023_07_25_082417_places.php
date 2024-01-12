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
        $table->id('plid');        
        $table->text('plinfo');
        $table->string('plimage');
        $table->string('plcaption');
        $table->string('plauthor');
        $table->string('plcredit');
        $table->text('pladdress');
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
