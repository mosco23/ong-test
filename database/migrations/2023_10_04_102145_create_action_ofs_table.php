<?php

use App\Models\ActionOfType;
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
        Schema::create('action_ofs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('name');
            $table->string('description')->nullable();
            $table->foreignIdFor(ActionOfType::class)
                    ->constrained()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('action_ofs');
    }
};
