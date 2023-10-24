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
        Schema::table('chirps', function (Blueprint $table) {
            $table->string('message');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasColumns('users', ['message', 'user_id'])) {

            Schema::table('chirps', function (Blueprint $table) {
                $table->removeColumn('message');
                $table->removeColumn('user_id');
            });

        }
    }
};
