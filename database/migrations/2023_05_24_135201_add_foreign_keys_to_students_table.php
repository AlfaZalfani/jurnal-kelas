<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_students_to_users')->references('id')
            ->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('class_id', 'fk_students_to_class')->references('id')
            ->on('class')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('fk_students_to_users');
            $table->dropForeign('fk_students_to_class');
        });
    }
};
