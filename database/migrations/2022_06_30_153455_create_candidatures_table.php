<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('MobilityType')->nullable();
            $table->string('ExchangeDuration')->nullable();
            $table->integer('StudentId')->nullable();
            $table->integer('PersonalId')->nullable();
            $table->string('LastName')->nullable();
            $table->string('DateOfBirth')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('NativeLanguage')->nullable();
            $table->string('PostalAdress')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('EmergencyCallName')->nullable();
            $table->string('EmergencyCallAdress')->nullable();
            $table->string('EmergencyCallLanguage')->nullable();
            $table->string('EmergencyCallPhone')->nullable();
            $table->string('HomeInstitutionName')->nullable();
            $table->string('HomeInstitutionAdress')->nullable();
            $table->string('HomeInstitutionCountry')->nullable();
            $table->string('DepartementCoordinatorName')->nullable();
            $table->string('DepartementCoordinatorPhone')->nullable();
            $table->string('DepartementCoordinatorFax')->nullable();
            $table->string('DepartementCoordinatorEmail')->nullable();
            $table->string('InstitutionalCoordinatorName')->nullable();
            $table->string('InstitutionalCoordinatorPhone')->nullable();
            $table->string('InstitutionalCoordinatorFax')->nullable();
            $table->string('InstitutionalCoordinatorEmail')->nullable();
            $table->string('ExchangeProgram')->nullable();
            $table->boolean('DoubleDegree')->nullable();
            $table->string('AppDepartment')->nullable();
            $table->string('AppProgram')->nullable();
            $table->string('AppSubject')->nullable();
            $table->string('AppAdditionalInfo')->nullable();
            $table->boolean('AppStudentDormitory')->nullable();
            $table->string('CurrentStudies')->nullable();
            $table->string('FieldStudies')->nullable();
            $table->integer('NumberYearsCompleted')->nullable();
            $table->string('InstructionLanguage')->nullable();
            $table->string('LanguageKnown1')->nullable();
            $table->string('LanguageLevel1')->nullable();
            $table->string('LanguageKnown2')->nullable();
            $table->string('LanguageLevel2')->nullable();
            $table->string('LanguageKnown3')->nullable();
            $table->string('LanguageLevel3')->nullable();
            $table->integer('ProposedStudyPlanCode')->nullable();
            $table->string('ProposedStudyPlanName')->nullable();
            $table->string('ProposedStudyPlanECTS')->nullable();
            $table->text('AdditionalData')->nullable();
            $table->string('file')->nullable();
            $table->string('url_file')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('candidatures');
    }
};
