<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApplydataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('articles')) {
            // テーブルが存在していればリターンこのif文はautocommitがonの時は必要ない
            return;
        }

        Schema::create('applydata', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('no');
            $table->integer('apply_user_code');
            $table->string('status');
            $table->timestamps();
        });

        $qb = DB::table('applydata');
        $insert = [
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 1,
                'apply_user_code' => 2220415,
                'status' => '許可'
            ],
            [
                'id' => null,
                'student_id' => 2220399,
                'no' => 2,
                'apply_user_code' => 2220415,
                'status' => '拒否'
            ],
            [
                'id' => null,
                'student_id' => 2220415,
                'no' => 1,
                'apply_user_code' => 2220399,
                'status' => '未確認'
            ]

        ];
        $qb->insert($insert);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
