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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
<<<<<<< HEAD
            $table->integer('age')->nullable();
            $table->string('gender')->default(0);
            $table->string('address')->nullable();
            $table->string('image')->nullable();


=======
            $table->string('role')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->default(0);
            $table->string('image')->nullable();
            $table->unsignedSmallInteger('address')->nullable();
>>>>>>> origin/main
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->dropColumn('username');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('image');

=======
            $table->dropColumn('surname');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
>>>>>>> origin/main
        });
    }
};
