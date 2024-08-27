<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEtatEnumInCommandesTable extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
Schema::table('commandes', function (Blueprint $table) {
$table->enum('etat', ['en cours', 'payer', 'completed'])->change();
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::table('commandes', function (Blueprint $table) {
$table->enum('etat', ['en cours', 'payer'])->change(); // Revert to the original enum
});
}
}