<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidatureRequest;
use App\Http\Resources\CandidatureResource;
use App\Models\Candidature;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CandidatureResource::collection(Candidature::paginate());
    }

    /**
     * Store a newly creat  ed resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatureRequest $request)
    {
        $user=User::find(1);

      // $user = Auth::user();

        DB::beginTransaction();
        try {

            $validated = $request->validated();
         
            $user->registred =1;
            $user->save();

            $ConfirmationOfHomeInstitution = null;
            $url_ConfirmationOfHomeInstitution = null;

            $LearningAgreement = null;
            $url_LearningAgreement = null;

            $TranscriptOfRecords = null;
            $url_TranscriptOfRecords = null;

            $Cv = null;
            $url_Cv = null;

            $CertificateOfLanguageCompetence = null;
            $url_CertificateOfLanguageCompetence = null;

            $CetificateOfBachelorMasterDegree = null;
            $url_CetificateOfBachelorMasterDegree = null;

            $ConfirmationOfRegistrationForStudentDormitory = null;
            $url_ConfirmationOfRegistrationForStudentDormitory = null;

            $PersonalPhoto = null;
            $url_PersonalPhoto = null;

            $Passport = null;
            $url_Passport = null;



            if (($request->file('ConfirmationOfHomeInstitution') !== null) && ($request->file('ConfirmationOfHomeInstitution')->isValid())) {

                $ext1 = $request->file('ConfirmationOfHomeInstitution')->extension();
                $fileName1 = Str::uuid() . '.' . $ext1;
                $ConfirmationOfHomeInstitution = $request->file('ConfirmationOfHomeInstitution')->storeAs('public/images', $fileName1);
                $url_ConfirmationOfHomeInstitution = env('APP_URL') . Storage::url($ConfirmationOfHomeInstitution);
            }

            if (($request->file('LearningAgreement') !== null) && ($request->file('LearningAgreement')->isValid())) {

                $ext2 = $request->file('LearningAgreement')->extension();
                $fileName2 = Str::uuid() . '.' . $ext2;
                $LearningAgreement = $request->file('LearningAgreement')->storeAs('public/images', $fileName2);
                $url_LearningAgreement = env('APP_URL') . Storage::url($LearningAgreement);
            }
            if (($request->file('TranscriptOfRecords') !== null) && ($request->file('TranscriptOfRecords')->isValid())) {

                $ext3 = $request->file('TranscriptOfRecords')->extension();
                $fileName3 = Str::uuid() . '.' . $ext3;
                $TranscriptOfRecords = $request->file('TranscriptOfRecords')->storeAs('public/images', $fileName3);
                $url_TranscriptOfRecords = env('APP_URL') . Storage::url($TranscriptOfRecords);
            }
            if (($request->file('Cv') !== null) && ($request->file('Cv')->isValid())) {

                $ext4 = $request->file('Cv')->extension();
                $fileName4 = Str::uuid() . '.' . $ext4;
                $Cv = $request->file('Cv')->storeAs('public/images', $fileName4);
                $url_Cv = env('APP_URL') . Storage::url($Cv);
            }
            if (($request->file('CertificateOfLanguageCompetence') !== null) && ($request->file('CertificateOfLanguageCompetence')->isValid())) {

                $ext5 = $request->file('CertificateOfLanguageCompetence')->extension();
                $fileName5 = Str::uuid() . '.' . $ext5;
                $CertificateOfLanguageCompetence = $request->file('CertificateOfLanguageCompetence')->storeAs('public/images', $fileName5);
                $url_CertificateOfLanguageCompetence = env('APP_URL') . Storage::url($CertificateOfLanguageCompetence);
            }
            if (($request->file('CetificateOfBachelorMasterDegree') !== null) && ($request->file('CetificateOfBachelorMasterDegree')->isValid())) {

                $ext6 = $request->file('CetificateOfBachelorMasterDegree')->extension();
                $fileName6 = Str::uuid() . '.' . $ext6;
                $CetificateOfBachelorMasterDegree = $request->file('CetificateOfBachelorMasterDegree')->storeAs('public/images', $fileName6);
                $url_CetificateOfBachelorMasterDegree = env('APP_URL') . Storage::url($CetificateOfBachelorMasterDegree);
            }
            if (($request->file('ConfirmationOfRegistrationForStudentDormitory') !== null) && ($request->file('ConfirmationOfRegistrationForStudentDormitory')->isValid())) {

                $ext7 = $request->file('ConfirmationOfRegistrationForStudentDormitory')->extension();
                $fileName7 = Str::uuid() . '.' . $ext7;
                $ConfirmationOfRegistrationForStudentDormitory = $request->file('ConfirmationOfRegistrationForStudentDormitory')->storeAs('public/images', $fileName7);
                $url_ConfirmationOfRegistrationForStudentDormitory = env('APP_URL') . Storage::url($ConfirmationOfRegistrationForStudentDormitory);
            }
            if (($request->file('PersonalPhoto') !== null) && ($request->file('PersonalPhoto')->isValid())) {

                $ext8 = $request->file('PersonalPhoto')->extension();
                $fileName8 = Str::uuid() . '.' . $ext8;
                $PersonalPhoto = $request->file('PersonalPhoto')->storeAs('public/images', $fileName8);
                $url_PersonalPhoto = env('APP_URL') . Storage::url($PersonalPhoto);
            }
            if (($request->file('Passport') !== null) && ($request->file('Passport')->isValid())) {

                $ext9 = $request->file('Passport')->extension();
                $fileName9 = Str::uuid() . '.' . $ext9;
                $Passport = $request->file('Passport')->storeAs('public/images', $fileName9);
                $url_Passport = env('APP_URL') . Storage::url($Passport);
            }

            $Candidature = Candidature::create([
                'MobilityType' => $validated['MobilityType'],
                'ExchangeDuration' => $validated['ExchangeDuration'],
                'StudentId' => $validated['StudentId'],
                'PersonalId' => $validated['PersonalId'],
                'LastName' => $validated['LastName'],
                'DateOfBirth' => $validated['DateOfBirth'],
                'Gender' => $validated['Gender'],
                'Nationality' => $validated['Nationality'],
                'NativeLanguage' => $validated['NativeLanguage'],
                'PostalAdress' => $validated['PostalAdress'],
                'Phone' => $validated['Phone'],
                'Email' => $validated['Email'],
                'EmergencyCallName' => $validated['EmergencyCallName'],
                'EmergencyCallAdress' => $validated['EmergencyCallAdress'],
                'EmergencyCallLanguage' => $validated['EmergencyCallLanguage'],
                'EmergencyCallPhone' => $validated['EmergencyCallPhone'],
                'HomeInstitutionName' => $validated['HomeInstitutionName'],
                'HomeInstitutionAdress' => $validated['HomeInstitutionAdress'],
                'HomeInstitutionCountry' => $validated['HomeInstitutionCountry'],
                'DepartementCoordinatorName' => $validated['DepartementCoordinatorName'],
                'DepartementCoordinatorPhone' => $validated['DepartementCoordinatorPhone'],
                'DepartementCoordinatorFax' => $validated['DepartementCoordinatorFax'],
                'DepartementCoordinatorEmail' => $validated['DepartementCoordinatorEmail'],
                'InstitutionalCoordinatorName' => $validated['InstitutionalCoordinatorName'],
                'InstitutionalCoordinatorPhone' => $validated['InstitutionalCoordinatorPhone'],
                'InstitutionalCoordinatorFax' => $validated['InstitutionalCoordinatorFax'],
                'InstitutionalCoordinatorEmail' => $validated['InstitutionalCoordinatorEmail'],
                'ExchangeProgram' => $validated['ExchangeProgram'],
                'DoubleDegree' => $validated['DoubleDegree'],
                'AppDepartment' => $validated['AppDepartment'],
                'AppProgram' => $validated['AppProgram'],
                'AppSubject' => $validated['AppSubject'],
                'AppAdditionalInfo' => $validated['AppAdditionalInfo'],
                'AppStudentDormitory' => $validated['AppStudentDormitory'],
                'CurrentStudies' => $validated['CurrentStudies'],
                'FieldStudies' => $validated['FieldStudies'],
                'NumberYearsCompleted' => $validated['NumberYearsCompleted'],
                'InstructionLanguage' => $validated['InstructionLanguage'],
                'LanguageKnown1' => $validated['LanguageKnown1'],
                'LanguageLevel1' => $validated['LanguageLevel1'],
                'LanguageKnown2' => $validated['LanguageKnown2'],
                'LanguageLevel2' => $validated['LanguageLevel2'],
                'LanguageKnown3' => $validated['LanguageKnown3'],
                'LanguageLevel3' => $validated['LanguageLevel3'],
                'ProposedStudyPlanCode' => $validated['ProposedStudyPlanCode'],
                'ProposedStudyPlanName' => $validated['ProposedStudyPlanName'],
                'ProposedStudyPlanECTS' => $validated['ProposedStudyPlanECTS'],
                'AdditionalData' => $validated['AdditionalData'],
                'ConfirmationOfHomeInstitution' => $ConfirmationOfHomeInstitution,
                'url_ConfirmationOfHomeInstitution' => $url_ConfirmationOfHomeInstitution,
                'LearningAgreement' => $LearningAgreement,
                'url_LearningAgreement' => $url_LearningAgreement,
                'TranscriptOfRecords' => $TranscriptOfRecords,
                'url_TranscriptOfRecords' => $url_TranscriptOfRecords,
                'Cv' => $Cv,
                'url_Cv' => $url_Cv,
                'CertificateOfLanguageCompetence' => $CertificateOfLanguageCompetence,
                'url_CertificateOfLanguageCompetence' => $url_CertificateOfLanguageCompetence,
                'CetificateOfBachelorMasterDegree' => $CetificateOfBachelorMasterDegree,
                'url_CetificateOfBachelorMasterDegree' => $url_CetificateOfBachelorMasterDegree,
                'ConfirmationOfRegistrationForStudentDormitory' => $ConfirmationOfRegistrationForStudentDormitory,
                'url_ConfirmationOfRegistrationForStudentDormitory' => $url_ConfirmationOfRegistrationForStudentDormitory,
                'PersonalPhoto' => $PersonalPhoto,
                'url_PersonalPhoto' => $url_PersonalPhoto,
                'Passport' => $Passport,
                'url_Passport' => $url_Passport,
                'user_id' => $user->id



            ]);
             
            
        } catch (ValidationException $exception) {
            DB::rollBack();
        }

        DB::commit();

        return response(new CandidatureResource($Candidature), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CandidatureResource(Candidature::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandidatureRequest $request, $id)
    {
        $user=User::find(1);

         //$user = Auth::user();
        $Candidature=Candidature::find($id);
         DB::beginTransaction();
         try {
 
             $validated = $request->validated();
          
             $user->registred =1;
             $user->save();
             
 
             $ConfirmationOfHomeInstitution =$Candidature->ConfirmationOfHomeInstitution;
             $url_ConfirmationOfHomeInstitution =$Candidature->url_ConfirmationOfHomeInstitution;
 
             $LearningAgreement = $Candidature->LearningAgreement;
             $url_LearningAgreement = $Candidature->url_LearningAgreement;
 
             $TranscriptOfRecords =$Candidature->TranscriptOfRecords;
             $url_TranscriptOfRecords = $Candidature->url_TranscriptOfRecords;
 
             $Cv = $Candidature->Cv;
             $url_Cv = $Candidature->url_Cv;
 
             $CertificateOfLanguageCompetence = $Candidature->CertificateOfLanguageCompetence;
             $url_CertificateOfLanguageCompetence = $Candidature->url_CertificateOfLanguageCompetence;
 
             $CetificateOfBachelorMasterDegree = $Candidature->CetificateOfBachelorMasterDegree;
             $url_CetificateOfBachelorMasterDegree = $Candidature->url_CetificateOfBachelorMasterDegree;
 
             $ConfirmationOfRegistrationForStudentDormitory = $Candidature->ConfirmationOfRegistrationForStudentDormitory;
             $url_ConfirmationOfRegistrationForStudentDormitory = $Candidature->url_ConfirmationOfRegistrationForStudentDormitory;
 
             $PersonalPhoto = $Candidature->PersonalPhoto;
             $url_PersonalPhoto = $Candidature->url_PersonalPhoto;
 
             $Passport =$Candidature->Passport;
             $url_Passport = $Candidature->url_Passport;
 
 
 
             if (($request->file('ConfirmationOfHomeInstitution') !== null) && ($request->file('ConfirmationOfHomeInstitution')->isValid())) {
 
                 $ext1 = $request->file('ConfirmationOfHomeInstitution')->extension();
                 $fileName1 = Str::uuid() . '.' . $ext1;
                 $ConfirmationOfHomeInstitution = $request->file('ConfirmationOfHomeInstitution')->storeAs('public/images', $fileName1);
                 $url_ConfirmationOfHomeInstitution = env('APP_URL') . Storage::url($ConfirmationOfHomeInstitution);
             }
 
             if (($request->file('LearningAgreement') !== null) && ($request->file('LearningAgreement')->isValid())) {
 
                 $ext2 = $request->file('LearningAgreement')->extension();
                 $fileName2 = Str::uuid() . '.' . $ext2;
                 $LearningAgreement = $request->file('LearningAgreement')->storeAs('public/images', $fileName2);
                 $url_LearningAgreement = env('APP_URL') . Storage::url($LearningAgreement);
             }
             if (($request->file('TranscriptOfRecords') !== null) && ($request->file('TranscriptOfRecords')->isValid())) {
 
                 $ext3 = $request->file('TranscriptOfRecords')->extension();
                 $fileName3 = Str::uuid() . '.' . $ext3;
                 $TranscriptOfRecords = $request->file('TranscriptOfRecords')->storeAs('public/images', $fileName3);
                 $url_TranscriptOfRecords = env('APP_URL') . Storage::url($TranscriptOfRecords);
             }
             if (($request->file('Cv') !== null) && ($request->file('Cv')->isValid())) {
 
                 $ext4 = $request->file('Cv')->extension();
                 $fileName4 = Str::uuid() . '.' . $ext4;
                 $Cv = $request->file('Cv')->storeAs('public/images', $fileName4);
                 $url_Cv = env('APP_URL') . Storage::url($Cv);
             }
             if (($request->file('CertificateOfLanguageCompetence') !== null) && ($request->file('CertificateOfLanguageCompetence')->isValid())) {
 
                 $ext5 = $request->file('CertificateOfLanguageCompetence')->extension();
                 $fileName5 = Str::uuid() . '.' . $ext5;
                 $CertificateOfLanguageCompetence = $request->file('CertificateOfLanguageCompetence')->storeAs('public/images', $fileName5);
                 $url_CertificateOfLanguageCompetence = env('APP_URL') . Storage::url($CertificateOfLanguageCompetence);
             }
             if (($request->file('CetificateOfBachelorMasterDegree') !== null) && ($request->file('CetificateOfBachelorMasterDegree')->isValid())) {
 
                 $ext6 = $request->file('CetificateOfBachelorMasterDegree')->extension();
                 $fileName6 = Str::uuid() . '.' . $ext6;
                 $CetificateOfBachelorMasterDegree = $request->file('CetificateOfBachelorMasterDegree')->storeAs('public/images', $fileName6);
                 $url_CetificateOfBachelorMasterDegree = env('APP_URL') . Storage::url($CetificateOfBachelorMasterDegree);
             }
             if (($request->file('ConfirmationOfRegistrationForStudentDormitory') !== null) && ($request->file('ConfirmationOfRegistrationForStudentDormitory')->isValid())) {
 
                 $ext7 = $request->file('ConfirmationOfRegistrationForStudentDormitory')->extension();
                 $fileName7 = Str::uuid() . '.' . $ext7;
                 $ConfirmationOfRegistrationForStudentDormitory = $request->file('ConfirmationOfRegistrationForStudentDormitory')->storeAs('public/images', $fileName7);
                 $url_ConfirmationOfRegistrationForStudentDormitory = env('APP_URL') . Storage::url($ConfirmationOfRegistrationForStudentDormitory);
             }
             if (($request->file('PersonalPhoto') !== null) && ($request->file('PersonalPhoto')->isValid())) {
 
                 $ext8 = $request->file('PersonalPhoto')->extension();
                 $fileName8 = Str::uuid() . '.' . $ext8;
                 $PersonalPhoto = $request->file('PersonalPhoto')->storeAs('public/images', $fileName8);
                 $url_PersonalPhoto = env('APP_URL') . Storage::url($PersonalPhoto);
             }
             if (($request->file('Passport') !== null) && ($request->file('Passport')->isValid())) {
 
                 $ext9 = $request->file('Passport')->extension();
                 $fileName9 = Str::uuid() . '.' . $ext9;
                 $Passport = $request->file('Passport')->storeAs('public/images', $fileName9);
                 $url_Passport = env('APP_URL') . Storage::url($Passport);
             }
 
             $Candidature->update([
                 'MobilityType' => $validated['MobilityType'],
                 'ExchangeDuration' => $validated['ExchangeDuration'],
                 'StudentId' => $validated['StudentId'],
                 'PersonalId' => $validated['PersonalId'],
                 'LastName' => $validated['LastName'],
                 'DateOfBirth' => $validated['DateOfBirth'],
                 'Gender' => $validated['Gender'],
                 'Nationality' => $validated['Nationality'],
                 'NativeLanguage' => $validated['NativeLanguage'],
                 'PostalAdress' => $validated['PostalAdress'],
                 'Phone' => $validated['Phone'],
                 'Email' => $validated['Email'],
                 'EmergencyCallName' => $validated['EmergencyCallName'],
                 'EmergencyCallAdress' => $validated['EmergencyCallAdress'],
                 'EmergencyCallLanguage' => $validated['EmergencyCallLanguage'],
                 'EmergencyCallPhone' => $validated['EmergencyCallPhone'],
                 'HomeInstitutionName' => $validated['HomeInstitutionName'],
                 'HomeInstitutionAdress' => $validated['HomeInstitutionAdress'],
                 'HomeInstitutionCountry' => $validated['HomeInstitutionCountry'],
                 'DepartementCoordinatorName' => $validated['DepartementCoordinatorName'],
                 'DepartementCoordinatorPhone' => $validated['DepartementCoordinatorPhone'],
                 'DepartementCoordinatorFax' => $validated['DepartementCoordinatorFax'],
                 'DepartementCoordinatorEmail' => $validated['DepartementCoordinatorEmail'],
                 'InstitutionalCoordinatorName' => $validated['InstitutionalCoordinatorName'],
                 'InstitutionalCoordinatorPhone' => $validated['InstitutionalCoordinatorPhone'],
                 'InstitutionalCoordinatorFax' => $validated['InstitutionalCoordinatorFax'],
                 'InstitutionalCoordinatorEmail' => $validated['InstitutionalCoordinatorEmail'],
                 'ExchangeProgram' => $validated['ExchangeProgram'],
                 'DoubleDegree' => $validated['DoubleDegree'],
                 'AppDepartment' => $validated['AppDepartment'],
                 'AppProgram' => $validated['AppProgram'],
                 'AppSubject' => $validated['AppSubject'],
                 'AppAdditionalInfo' => $validated['AppAdditionalInfo'],
                 'AppStudentDormitory' => $validated['AppStudentDormitory'],
                 'CurrentStudies' => $validated['CurrentStudies'],
                 'FieldStudies' => $validated['FieldStudies'],
                 'NumberYearsCompleted' => $validated['NumberYearsCompleted'],
                 'InstructionLanguage' => $validated['InstructionLanguage'],
                 'LanguageKnown1' => $validated['LanguageKnown1'],
                 'LanguageLevel1' => $validated['LanguageLevel1'],
                 'LanguageKnown2' => $validated['LanguageKnown2'],
                 'LanguageLevel2' => $validated['LanguageLevel2'],
                 'LanguageKnown3' => $validated['LanguageKnown3'],
                 'LanguageLevel3' => $validated['LanguageLevel3'],
                 'ProposedStudyPlanCode' => $validated['ProposedStudyPlanCode'],
                 'ProposedStudyPlanName' => $validated['ProposedStudyPlanName'],
                 'ProposedStudyPlanECTS' => $validated['ProposedStudyPlanECTS'],
                 'AdditionalData' => $validated['AdditionalData'],
                 'ConfirmationOfHomeInstitution' => $ConfirmationOfHomeInstitution,
                 'url_ConfirmationOfHomeInstitution' => $url_ConfirmationOfHomeInstitution,
                 'LearningAgreement' => $LearningAgreement,
                 'url_LearningAgreement' => $url_LearningAgreement,
                 'TranscriptOfRecords' => $TranscriptOfRecords,
                 'url_TranscriptOfRecords' => $url_TranscriptOfRecords,
                 'Cv' => $Cv,
                 'url_Cv' => $url_Cv,
                 'CertificateOfLanguageCompetence' => $CertificateOfLanguageCompetence,
                 'url_CertificateOfLanguageCompetence' => $url_CertificateOfLanguageCompetence,
                 'CetificateOfBachelorMasterDegree' => $CetificateOfBachelorMasterDegree,
                 'url_CetificateOfBachelorMasterDegree' => $url_CetificateOfBachelorMasterDegree,
                 'ConfirmationOfRegistrationForStudentDormitory' => $ConfirmationOfRegistrationForStudentDormitory,
                 'url_ConfirmationOfRegistrationForStudentDormitory' => $url_ConfirmationOfRegistrationForStudentDormitory,
                 'PersonalPhoto' => $PersonalPhoto,
                 'url_PersonalPhoto' => $url_PersonalPhoto,
                 'Passport' => $Passport,
                 'url_Passport' => $url_Passport,
                 'user_id' => $user->id
 
 
 
             ]);
              
             
         } catch (ValidationException $exception) {
             DB::rollBack();
         }
 
         DB::commit();
 
         return response(new CandidatureResource($Candidature), Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Candidature=Candidature::find($id);

        DB::beginTransaction();
        try{
        
            $Candidature->delete();

        }catch(ValidationException $e){
            DB::rollback();
        }
        DB::commit();

        

        return response(null,Response::HTTP_NO_CONTENT);
    }
}
