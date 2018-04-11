<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToToDoLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('to_do_lists', function(Blueprint $table) {
            $table->string('status')->after('user_id')->default('new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('to_do_lists', function(Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
