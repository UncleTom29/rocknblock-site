<?php namespace Amaryfilo\Feedbacks\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateIntegrationsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('amaryfilo_integrations');

        Schema::create('amaryfilo_integrations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('user');
            $table->boolean('active')->default(true);
            $table->longtext('data_fields');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amaryfilo_integrations');
    }
}
