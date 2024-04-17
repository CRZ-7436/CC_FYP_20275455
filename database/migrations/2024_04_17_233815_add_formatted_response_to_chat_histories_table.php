<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('chat_histories', function (Blueprint $table) {
            $table->text('formatted_response')->nullable(); // Using text to accommodate potentially long responses
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('chat_histories', function (Blueprint $table) {
            $table->dropColumn('formatted_response');
        });
    }
};
