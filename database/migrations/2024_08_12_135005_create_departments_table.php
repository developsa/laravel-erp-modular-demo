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
        if (!Schema::hasTable("departments")) {
            Schema::create('departments', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->unsignedBigInteger('company_id')->nullable();
                $table->foreign("company_id")->references("id")->on("companies")->onDelete("cascade")->onUpdate("cascade");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};