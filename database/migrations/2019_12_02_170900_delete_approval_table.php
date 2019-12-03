<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteApprovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('approval', function (Blueprint $table) {
            Schema::dropIfExists('approval');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('approval', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_approved')->default('false');
            $table->timestamps();
        });
    }
}
