<?php namespace Amaryfilo\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreatePortfoliosTable extends Migration
{
    public function up()
    {
        Schema::create('amaryfilo_portfolio_portfolios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('is_active');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('feature');
            $table->text('stack');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amaryfilo_portfolio_portfolios');
    }
}
