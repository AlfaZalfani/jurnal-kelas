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
        Schema::table('journals', function (Blueprint $table) {
            $table->foreign(columns:'teacher_id', name:'fk_journals_to_teachers')->references(columns:'id')
            ->on(table:'teachers')->onUpdate(action:'cascade')->onDelete(action:'cascade');
            $table->foreign(columns:'class_id', name:'fk_journals_to_class')->references(columns:'id')
            ->on(table:'class')->onUpdate(action:'cascade')->onDelete(action:'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropForeign(index:'fk_journals_to_teachers');
            $table->dropForeign(index:'fk_journals_to_class');
        });
    }
};
