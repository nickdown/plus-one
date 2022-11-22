<?php

use App\Models\Statistic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('value');
            $table->timestamps();
        });

        Statistic::query()->create([
            'name' => 'count',
            'value' => 0,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
