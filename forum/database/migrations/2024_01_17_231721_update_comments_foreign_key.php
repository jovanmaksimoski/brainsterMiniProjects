<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCommentsForeignKey extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['discussion_id']);

            $table->foreign('discussion_id')
                ->references('id')->on('discussions')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('discussion_id')
                ->references('id')->on('discussions');
        });
    }
}
