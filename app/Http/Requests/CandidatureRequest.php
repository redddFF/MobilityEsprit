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
            'StudentId' =>['required', 'max:100'],
            'PersonalId' => ['required'],
            'MobilityType' => ['max:100'],
            'ExchangeDuration' =>['required'] ,
            'StudentId' =>['required'] ,
            'PersonalId' => ['required'],
            'LastName' =>['required'] ,
            'DateOfBirth' => ['required'],
            'Gender' => ['required'],
            'Nationality' =>['required'] ,
            'NativeLanguage' =>['required'] ,
            'PostalAdress' =>['required'] ,
            'Phone' => ['required'],
            'Email' =>['required'],
            'EmergencyCallName' => ['required'],
            'EmergencyCallAdress' =>['required'],
            'EmergencyCallLanguage' =>['required'],
            'EmergencyCallPhone' =>['required'],
            'HomeInstitutionName' => ['required'],
            'HomeInstitutionAdress' => ['required'],
            'HomeInstitutionCountry' =>['required'],
            'DepartementCoordinatorName' => ['required'],
            'DepartementCoordinatorPhone' => ['required'],
            'DepartementCoordinatorFax' =>['required'] ,
            'DepartementCoordinatorEmail' => ['required'],
            'InstitutionalCoordinatorName' =>['required'] ,
            'InstitutionalCoordinatorPhone' =>['required'],
            'InstitutionalCoordinatorFax' => ['required'],
            'InstitutionalCoordinatorEmail' => ['required'],
            'ExchangeProgram' =>['required'],
            'DoubleDegree' => ['required'],
            'AppDepartment' =>['required'],
            'AppProgram' => ['required'],
            'AppSubject' =>['required'] ,
            'AppAdditionalInfo' =>['required'],
            'AppStudentDormitory' =>['required'],
            'CurrentStudies' =>['required'],
            'FieldStudies' =>['required'],
            'NumberYearsCompleted' =>['required'],
            'InstructionLanguage' => ['required'],
            'LanguageKnown1' =>['required'] ,
            'LanguageLevel1' =>['required'] ,
            'LanguageKnown2' =>['required'] ,
            'LanguageLevel2' =>['required'] ,
            'LanguageKnown3' =>['required'] ,
            'LanguageLevel3' =>['required'],
            'ProposedStudyPlanCode' => ['required'],
            'ProposedStudyPlanName' => ['required'],
            'ProposedStudyPlanECTS' => ['required'],
            'AdditionalData' => ['required'],
        
        
        
        
        ];
    }
}
