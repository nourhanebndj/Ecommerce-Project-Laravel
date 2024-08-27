<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
if (!Schema::hasTable('products')) {
Schema::create('products', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->text('description');
$table->float('price');
$table->float('price_promotion');
$table->integer('qte');
$table->string('photo');
$table->text('additional_photos')->nullable();
$table->unsignedBigInteger('category_id');
$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
$table->timestamps();
});
}
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('products');
}
};