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
Schema::create('orders', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('client_id');
$table->string('lastname');
$table->string('phone');
$table->integer('wilaya_id');
$table->integer('commune_id');
$table->enum('delivery', ['domicile', 'bureau']);
$table->decimal('total_price', 10, 2);
$table->timestamps();

// Add the foreign key constraint
$table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('orders');
}
};