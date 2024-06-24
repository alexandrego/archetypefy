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
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('question_1', 1);
            $table->string('question_2', 1);
            $table->string('question_3', 1);
            $table->string('question_4', 1);
            $table->string('question_5', 1);
            $table->string('question_6', 1);
            $table->string('question_7', 1);
            $table->string('question_8', 1);
            $table->string('question_9', 1);
            $table->string('question_10', 1);
            $table->string('question_11', 1);
            $table->string('question_12', 1);
            $table->string('question_13', 1);
            $table->string('question_14', 1);
            $table->string('question_15', 1);
            $table->string('question_16', 1);
            $table->string('question_17', 1);
            $table->string('question_18', 1);
            $table->string('question_19', 1);
            $table->string('question_20', 1);
            $table->string('question_21', 1);
            $table->string('question_22', 1);
            $table->string('question_23', 1);
            $table->string('question_24', 1);
            $table->string('question_25', 1);
            $table->string('question_26', 1);
            $table->string('question_27', 1);
            $table->string('question_28', 1);
            $table->string('question_29', 1);
            $table->string('question_30', 1);
            $table->string('question_31', 1);
            $table->string('question_32', 1);
            $table->string('question_33', 1);
            $table->string('question_34', 1);
            $table->string('question_35', 1);
            $table->string('question_36', 1);
            $table->string('question_37', 1);
            $table->string('question_38', 1);
            $table->string('question_39', 1);
            $table->string('question_40', 1);
            $table->string('question_41', 1);
            $table->string('question_42', 1);
            $table->string('question_43', 1);
            $table->string('question_44', 1);
            $table->string('question_45', 1);
            $table->string('question_46', 1);
            $table->string('question_47', 1);
            $table->string('question_48', 1);
            $table->integer('times_exec');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('question_1');
            $table->dropColumn('question_2');
            $table->dropColumn('question_3');
            $table->dropColumn('question_4');
            $table->dropColumn('question_5');
            $table->dropColumn('question_6');
            $table->dropColumn('question_7');
            $table->dropColumn('question_8');
            $table->dropColumn('question_9');
            $table->dropColumn('question_10');
            $table->dropColumn('question_11');
            $table->dropColumn('question_12');
            $table->dropColumn('question_13');
            $table->dropColumn('question_14');
            $table->dropColumn('question_15');
            $table->dropColumn('question_16');
            $table->dropColumn('question_17');
            $table->dropColumn('question_18');
            $table->dropColumn('question_19');
            $table->dropColumn('question_20');
            $table->dropColumn('question_21');
            $table->dropColumn('question_22');
            $table->dropColumn('question_23');
            $table->dropColumn('question_24');
            $table->dropColumn('question_25');
            $table->dropColumn('question_26');
            $table->dropColumn('question_27');
            $table->dropColumn('question_28');
            $table->dropColumn('question_29');
            $table->dropColumn('question_30');
            $table->dropColumn('question_31');
            $table->dropColumn('question_32');
            $table->dropColumn('question_33');
            $table->dropColumn('question_34');
            $table->dropColumn('question_35');
            $table->dropColumn('question_36');
            $table->dropColumn('question_37');
            $table->dropColumn('question_38');
            $table->dropColumn('question_39');
            $table->dropColumn('question_40');
            $table->dropColumn('question_41');
            $table->dropColumn('question_42');
            $table->dropColumn('question_43');
            $table->dropColumn('question_44');
            $table->dropColumn('question_45');
            $table->dropColumn('question_46');
            $table->dropColumn('question_47');
            $table->dropColumn('question_48');
            $table->dropColumn('times_exec');
        });
    }
};
