<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 15);
            $table->string('display_name');
            $table->string('avatar')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('url', 40)->nullable();
            $table->string('email_token')->unique();
            $table->string('phone_token')->unique();
            $table->integer('email_verification_status')->default(0);
            $table->integer('phone_verification_status')->default(0);
            $table->integer('disabled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['avatar', 'phone', 'country', 'country_code', 'email_token', 'phone_token', 'email_verification_status', 'phone_verification_status', 'address', 'url', 'disabled']);
        });
    }
}
