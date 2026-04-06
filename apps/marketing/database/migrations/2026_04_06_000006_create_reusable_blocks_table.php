<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reusable_blocks', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('block_type');
            $table->string('status')->default('draft');
            $table->json('payload_json');
            $table->unsignedInteger('version')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reusable_blocks');
    }
};
