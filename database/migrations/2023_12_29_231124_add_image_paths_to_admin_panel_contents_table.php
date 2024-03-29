<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagePathsToAdminPanelContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_panel_contents', function (Blueprint $table) {
            $table->string('image_path_1')->nullable();
            $table->string('image_path_2')->nullable();
            $table->string('image_path_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_panel_contents', function (Blueprint $table) {
            $table->dropColumn('image_path_1');
            $table->dropColumn('image_path_2');
            $table->dropColumn('image_path_3');
        });
    }
}
