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
        Schema::create('prestacions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('status')->default(1);
            $table->foreignId('personal_id')->nullable()->constrained('personals')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('item_id')->nullable()->constrained('Items')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestacions');
    }
};
