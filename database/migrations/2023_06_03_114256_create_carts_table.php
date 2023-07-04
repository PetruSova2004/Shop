<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained();

            // Метод constrained() автоматически добавляет необходимые ограничения внешнего ключа на основе соглашений об именах в Laravel. По умолчанию предполагается, что столбец внешнего ключа в текущей таблице ( carts) соответствует столбцу первичного ключа (id) в таблице, на которую ссылаются.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
