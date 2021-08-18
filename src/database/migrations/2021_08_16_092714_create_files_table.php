<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_no');
            $table->integer('user_id');
            $table->integer('office');
            $table->integer('department');
            $table->integer('sub_department');
            $table->string('accounting_year');
            $table->enum('account_type',['surkul','gyundon']);
            $table->string('audit_report');
            $table->string('final_account');
            $table->enum('branch',['South','Nepal','North','Centre']);
            $table->integer('pac_committe');
            $table->boolean('pac_status');
            $table->dateTime('start_date');
            $table->dateTime('complete_date');
            $table->dateTime('submission_date');
            $table->boolean('status');
            $table->string('remarks');
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
        Schema::dropIfExists('files');
    }
}
