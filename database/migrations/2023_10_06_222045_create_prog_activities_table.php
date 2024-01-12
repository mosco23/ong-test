<?php

use App\Models\GroupProgActivity;
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
        Schema::create('prog_activities', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('completion_time');
            $table->string('due_date');
            $table->integer('sort')->default(0);
            $table->string('place')->nullable();
            $table->foreignIdFor(GroupProgActivity::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prog_activities');
    }
};
