<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table): void {
            $table->id();
            $table->string('group_name');
            $table->string('key_name');
            $table->json('value_json');
            $table->timestamps();
            $table->unique(['group_name', 'key_name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
