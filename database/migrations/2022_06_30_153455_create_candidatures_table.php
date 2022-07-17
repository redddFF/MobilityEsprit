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
            $table->string('ExchangeDuration');
            $table->integer('StudentId');
            $table->integer('PersonalId');
            $table->string('LastName');
            $table->date('DateOfBirth');
            $table->string('Gender');
            $table->string('Nationality');
            $table->string('NativeLanguage');
            $table->string('PostalAdress');
            $table->integer('Phone');
            $table->string('Email');
            $table->string('EmergencyCallName');
            $table->string('EmergencyCallAdress');
            $table->string('EmergencyCallLanguage');
            $table->integer('EmergencyCallPhone');
            $table->string('HomeInstitutionName');
            $table->string('HomeInstitutionAdress');
            $table->string('HomeInstitutionCountry');
            $table->string('DepartementCoordinatorName');
            $table->integer('DepartementCoordinatorPhone');
            $table->integer('DepartementCoordinatorFax');
            $table->string('DepartementCoordinatorEmail');
            $table->string('InstitutionalCoordinatorName');
            $table->integer('InstitutionalCoordinatorPhone');
            $table->integer('InstitutionalCoordinatorFax');
            $table->string('InstitutionalCoordinatorEmail');
            $table->string('ExchangeProgram');
            $table->boolean('DoubleDegree');
            $table->string('AppDepartment');
            $table->string('AppProgram');
            $table->string('AppSubject');
            $table->string('AppAdditionalInfo');
            $table->boolean('AppStudentDormitory');
            $table->string('CurrentStudies');
            $table->string('FieldStudies');
            $table->string('NumberYearsCompleted');
            $table->string('InstructionLanguage');
            $table->string('LanguageKnown1');
            $table->string('LanguageLevel1');
            $table->string('LanguageKnown2');
            $table->string('LanguageLevel2');
            $table->string('LanguageKnown3');
            $table->string('LanguageLevel3');
            $table->string('ProposedStudyPlanCode');
            $table->string('ProposedStudyPlanName');
            $table->string('ProposedStudyPlanECTS');
            $table->text('AdditionalData');
            $table->string('ConfirmationOfHomeInstitution');
            $table->string('url_ConfirmationOfHomeInstitution');
            $table->string('LearningAgreement');
            $table->string('url_LearningAgreement');
            $table->string('TranscriptOfRecords');
            $table->string('url_TranscriptOfRecords');
            $table->string('Cv');
            $table->string('url_Cv');
            $table->string('CertificateOfLanguageCompetence');
            $table->string('url_CertificateOfLanguageCompetence');
            $table->string('CetificateOfBachelorMasterDegree');
            $table->string('url_CetificateOfBachelorMasterDegree');
            $table->string('ConfirmationOfRegistrationForStudentDormitory');
            $table->string('url_ConfirmationOfRegistrationForStudentDormitory');
            $table->string('PersonalPhoto');
            $table->string('url_PersonalPhoto');
            $table->string('Passport');
            $table->string('url_Passport');
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
