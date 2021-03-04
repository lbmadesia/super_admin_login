<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staffs');
            $table->integer("dd")->default('1');
            $table->integer("pe")->default('1');
            $table->integer("sg")->default('1');
            $table->integer("cp")->default('1');
            $table->integer("lt")->default('1');
            $table->integer("n_ct")->default('1');
            $table->integer("m_ct")->default('1');
            $table->integer("n_ne")->default('1');
            $table->integer("n_lt")->default('1');
            $table->integer("l_rs")->default('1');
            $table->integer("m_sy")->default('1');
            $table->integer("s_lt")->default('1');
            $table->integer("m_pt")->default('1');
            $table->integer("g_pp")->default('1');
            $table->integer("s_st")->default('1');
            $table->integer("m_bs")->default('1');
            $table->integer("b_ae")->default('1');
            $table->integer("m_ae")->default('1');
            $table->integer("i_ae")->default('1');
            $table->integer("a_st")->default('1');
            $table->integer("n_ee")->default('1');
            $table->integer("m_ee")->default('1');
            $table->integer("n_re")->default('1');
            $table->integer("m_re")->default('1');
            $table->integer("c_ee")->default('1');
            $table->integer("n_l_cy")->default('1');
            $table->integer("l_c_lt")->default('1');
            $table->integer("n_l_an")->default('1');
            $table->integer("l_a_lt")->default('1');
            $table->integer("l_a_me")->default('1');
            $table->integer("n_e_cy")->default('1');
            $table->integer("e_c_lt")->default('1');
            $table->integer("c_e_lt")->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduls');
    }
}
