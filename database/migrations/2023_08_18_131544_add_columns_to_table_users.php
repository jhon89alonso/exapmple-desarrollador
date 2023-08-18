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
            $table->string('last_name')->nullable()->comment('apellido de usuario')->after('name');
            $table->tinyInteger('type_document')->default(1)->comment('tipo de documento')->after('last_name');
            $table->integer('document')->nullable()->comment('numero de documento')->after('type_document');
            $table->string('phone', 100)->nullable()->comment('telefono')->after('document');
            $table->string('id_area', 10)->nullable()->comment('id_area')->after('password');
            $table->string('area')->nullable()->comment('area')->after('id_area');
            $table->boolean('user_verified')->default(false)->comment('usuario verificado')->after('area');
            $table->tinyInteger('status')->default(1)->comment('0:inactivo, 1:activo,2:bloqueado')->after('user_verified');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('type_document');
            $table->dropColumn('document');
            $table->dropColumn('phone');
            $table->dropColumn('id_area');
            $table->dropColumn('area');
            $table->dropColumn('user_verified');
            $table->dropColumn('status');
            $table->dropSoftDeletes();
        });
    }
};
