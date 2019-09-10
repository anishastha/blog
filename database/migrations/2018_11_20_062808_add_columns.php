<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {


          $table->string('uname');
          $table->string('fname');
          $table->string('lanme');
          $table->string('address');
          $table->string('email');
          $table->string('contact');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
          $table->dropColumn('uname');
          $table->dropColumn('fname');
          $table->dropColumn('lanme');
          $table->dropColumn('address');
          $table->dropColumn('email');
          $table->dropColumn('contact');

        });
    }
}
