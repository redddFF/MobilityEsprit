<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'StudentId' =>['max:100'],
            'PersonalId' => ['max:100'],
            'MobilityType' => ['max:100'],
            'ExchangeDuration' =>['max:100'],
            'StudentId' =>['max:100'],
            'PersonalId' =>['max:100'],
            'LastName' =>['max:100'],
            'DateOfBirth' => ['max:100'],
            'Gender' => ['max:100'],
            'Nationality' =>['max:100'],
            'NativeLanguage' =>['max:100'],
            'PostalAdress' =>['max:100'],
            'Phone' => ['max:100'],
            'Email' =>['max:100'],
            'EmergencyCallName' => ['max:100'],
            'EmergencyCallAdress' =>['max:100'],
            'EmergencyCallLanguage' =>['max:100'],
            'EmergencyCallPhone' =>['max:100'],
            'HomeInstitutionName' =>['max:100'],
            'HomeInstitutionAdress' =>['max:100'],
            'HomeInstitutionCountry' =>['max:100'],
            'DepartementCoordinatorName' => ['max:100'],
            'DepartementCoordinatorPhone' => ['max:100'],
            'DepartementCoordinatorFax' =>['max:100'],
            'DepartementCoordinatorEmail' => ['max:100'],
            'InstitutionalCoordinatorName' =>['max:100'],
            'InstitutionalCoordinatorPhone' =>['max:100'],
            'InstitutionalCoordinatorFax' => ['max:100'],
            'InstitutionalCoordinatorEmail' =>['max:100'],
            'ExchangeProgram' =>['max:100'],
            'DoubleDegree' => ['max:100'],
            'AppDepartment' =>['max:100'],
            'AppProgram' => ['max:100'],
            'AppSubject' =>['max:100'],
            'AppAdditionalInfo' =>['max:100'],
            'AppStudentDormitory' =>['max:100'],
            'CurrentStudies' =>['max:100'],
            'FieldStudies' =>['max:100'],
            'NumberYearsCompleted' =>['max:100'],
            'InstructionLanguage' => ['max:100'],
            'LanguageKnown1' =>['max:100'],
            'LanguageLevel1' =>['max:100'],
            'LanguageKnown2' =>['max:100'],
            'LanguageLevel2' =>['max:100'],
            'LanguageKnown3' =>['max:100'],
            'LanguageLevel3' =>['max:100'],
            'ProposedStudyPlanCode' =>['max:100'],
            'ProposedStudyPlanName' => ['max:100'],
            'ProposedStudyPlanECTS' =>['max:100'],
            'AdditionalData' => ['max:100'],
        
        
        
        
        ];
    }
}
