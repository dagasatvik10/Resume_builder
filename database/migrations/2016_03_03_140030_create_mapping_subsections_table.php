<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMappingSubsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapping_subsections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mapping_section_id')->unsigned();
            $table->foreign('mapping_section_id')->references('id')->on('mapping_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('subsection_id')->unsigned();
            $table->foreign('subsection_id')->references('id')->on('subsections')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('mapping_subsections');
    }
}
