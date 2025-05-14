<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // di database/migrations/xxxx_add_price_and_tutor_id_to_courses_table.php

    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('price')->default(0)->after('title');
            $table->foreignId('tutor_id')->nullable()->constrained('users')->after('price');
        });
    }


    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['tutor_id']);
            $table->dropColumn('tutor_id');
            $table->dropColumn('price');
        });
    }

  
};
