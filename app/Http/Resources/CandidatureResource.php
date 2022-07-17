<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CandidatureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[

            'id'=>$this->id,
            'MobilityType'=>$this->MobilityType,
            'ExchangeDuration'=>$this->ExchangeDuration,
            'StudentId'=>$this->StudentId,
            'PersonalId'=>$this->PersonalId,
            'LastName'=>$this->LastName,
            'DateOfBirth'=>$this->DateOfBirth,
            'GenderNationality'=>$this->GenderNationality,
            'NativeLanguage'=>$this->NativeLanguage,
            'PostalAdress'=>$this->PostalAdress,
            'Phone'=>$this->Phone,
            'Email'=>$this->Email,
            'EmergencyCallName'=>$this->EmergencyCallName,
            'EmergencyCallAdress'=>$this->EmergencyCallAdress,
            'EmergencyCallLanguage'=>$this->EmergencyCallLanguage,
            'EmergencyCallPhone'=>$this->EmergencyCallPhone,
            'HomeInstitutionName'=>$this->HomeInstitutionName,
            'HomeInstitutionAdress'=>$this->HomeInstitutionAdress,
            'HomeInstitutionCountry'=>$this->HomeInstitutionCountry,
            'DepartementCoordinatorName'=>$this->DepartementCoordinatorName,
            'DepartementCoordinatorPhone'=>$this->DepartementCoordinatorPhone,
            'DepartementCoordinatorFax'=>$this->DepartementCoordinatorFax,
            'DepartementCoordinatorEmail'=>$this->DepartementCoordinatorEmail,
            'InstitutionalCoordinatorName'=>$this->InstitutionalCoordinatorName,
            'InstitutionalCoordinatorPhone'=>$this->InstitutionalCoordinatorPhone,
            'InstitutionalCoordinatorFax'=>$this->InstitutionalCoordinatorFax,
            'InstitutionalCoordinatorEmail'=>$this->InstitutionalCoordinatorEmail,
            'ExchangeProgram'=>$this->ExchangeProgram,
            'DoubleDegree'=>$this->DoubleDegree,
            'AppDepartment'=>$this->AppDepartment,
            'AppProgram'=>$this->AppProgram,
            'AppSubject'=>$this->AppSubject,
            'AppAdditionalInfo'=>$this->AppAdditionalInfo,
            'AppStudentDormitory'=>$this->AppStudentDormitory,
            'CurrentStudies'=>$this->CurrentStudies,
            'FieldStudies'=>$this->FieldStudies,
            'NumberYearsCompleted'=>$this->NumberYearsCompleted,
            'InstructionLanguage'=>$this->InstructionLanguage,
            'LanguageKnown1'=>$this->LanguageKnown1,
            'LanguageLevel1'=>$this->LanguageLevel1,
            'LanguageKnown2'=>$this->LanguageKnown2,
            'LanguageLevel2'=>$this->LanguageLevel2,
            'LanguageKnown3'=>$this->LanguageKnown3,
            'LanguageLevel3'=>$this->LanguageLevel3,
            'ProposedStudyPlanCode'=>$this->ProposedStudyPlanCode,
            'ProposedStudyPlanName'=>$this->ProposedStudyPlanName,
            'ProposedStudyPlanECTS'=>$this->ProposedStudyPlanECTS,
            'AdditionalData'=>$this->AdditionalData,
            'url_ConfirmationOfHomeInstitution'=>$this->url_ConfirmationOfHomeInstitution,
            'url_LearningAgreement'=>$this->url_LearningAgreement,
            'url_TranscriptOfRecords'=>$this->url_TranscriptOfRecords,
            'url_Cv'=>$this->url_Cv,
            'url_CertificateOfLanguageCompetence'=>$this->url_CertificateOfLanguageCompetence,
            'url_CetificateOfBachelorMasterDegree'=>$this->url_CetificateOfBachelorMasterDegree,
            'url_ConfirmationOfRegistrationForStudentDormitory'=>$this->url_ConfirmationOfRegistrationForStudentDormitory,
            'url_PersonalPhoto'=>$this->url_PersonalPhoto,
            'url_Passport'=>$this->url_Passport,
            'user_id'=>$this->user_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,      
        ]; 
    }
}
