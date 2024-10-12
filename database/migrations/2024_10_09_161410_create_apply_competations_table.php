<?php

use App\Models\User;
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
        Schema::create('apply_competations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string("mobile_number")->nullable();
            $table->string("title")->nullable();
            $table->string("papers_present_name")->nullable();
            $table->string("occupation")->nullable();
            $table->string("expertise")->nullable();
            $table->string("organization")->nullable();
            $table->string("nationality")->nullable();
            $table->string("papers_present")->nullable();
            $table->string("status")->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_competations');
    }
};
