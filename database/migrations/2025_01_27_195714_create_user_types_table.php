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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['id' => 1, 'name' => 'Client'],
            ['id' => 2, 'name' => 'Prestataire'],
            ['id' => 3, 'name' => 'Employé'],
        ]);

        Schema::table('users', function (Blueprint $table) {    
            $table->foreignId('type_id')->constrained('user_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
        });
    }
};
