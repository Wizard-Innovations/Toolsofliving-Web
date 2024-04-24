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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();    
            $table->string('desc')->nullable();  
         
            $table->integer('status')->default(1)->comment("0=inactive,1=active");
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted')->default(0)->comment('0=not deleted,1=deleted');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
