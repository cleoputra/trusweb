<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyPostPanelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_panel', function (Blueprint $table) {
            $table->dropColumn('post');
            $table->text('content');
            $table->string('photo', 255);
        });

        Schema::rename('post_panel', 'posts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('posts', 'post_panel');

        Schema::table('post_panel', function (Blueprint $table) {
            $table->string('content', 500);
            $table->dropColumn('content');
            $table->dropColumn('photo');
        });
    }
}
