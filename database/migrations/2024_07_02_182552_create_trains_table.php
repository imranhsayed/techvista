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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
			$table->string( 'name' );
	        $table->string( 'image' );
	        $table->string( 'short_description' );
	        $table->string( 'description' );

			// Add 3 more fields based on trains.
	        $table->string( 'started_on' );
	        $table->string( 'cost' );
	        $table->string( 'speed' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
