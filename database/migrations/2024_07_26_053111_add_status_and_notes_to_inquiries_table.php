<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('inquiries', function (Blueprint $table) {
        $table->string('status')->default('Pending');
        $table->text('notes')->nullable();
    });
}

public function down()
{
    Schema::table('inquiries', function (Blueprint $table) {
        $table->dropColumn('status');
        $table->dropColumn('notes');
    });
}
};
