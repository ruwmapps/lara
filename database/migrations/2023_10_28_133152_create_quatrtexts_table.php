<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quatrtexts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('quatrtext');
            $table->tinyInteger('serial');

            $table->foreign('user_id','foreign_key_user_id_quatrtexts')->on('users')->references('id')->onDelete('Cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quatrtexts', function (Blueprint $table) {
            $table->dropForeign('foreign_key_user_id_quatrtexts');
        });

        Schema::dropIfExists('quatrtexts');
    }
};
