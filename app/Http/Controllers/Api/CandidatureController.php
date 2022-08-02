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
        $user = Auth::user();
        if ($user->Status=='Admin'){
            return CandidatureResource::collection(Candidature::all());
        }
        else{
            return CandidatureResource::collection(Auth()->user()->candidatures()->paginate());
        }
        
        
    }

    /**
     * Store a newly creat  ed resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatureRequest $request)
    {
      //  $user=User::find(1);

   $user = Auth::user();

        DB::beginTransaction();
        try {

            $validated = $request->validated();
         
         

            $file = null;
            $url_file = null;



            if (($request->file('file') !== null) && ($request->file('file')->isValid())) {

                $ext1 = $request->file('file')->extension();
                $fileName1 = Str::uuid() . '.' . $ext1;
                $file = $request->file('file')->storeAs('public/images', $fileName1);
                $url_file = env('APP_URL') . Storage::url($file);
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
                'file' => $file,
                'url_file' => $url_file,
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
      //  $user=User::find(1);

         $user = Auth::user();
        $Candidature=Candidature::find($id);
         DB::beginTransaction();
         try {
 
             $validated = $request->validated();
          
        
             
 
             $file=$Candidature->file;
             $url_file =$Candidature->url_file;
 
 
 
 
             if (($request->file('file') !== null) && ($request->file('file')->isValid())) {
 
                 $ext= $request->file('file')->extension();
                 $fileName = Str::uuid() . '.' . $ext;
                 $file= $request->file('file')->storeAs('public/images',$fileName);
                 $url_file= env('APP_URL') . Storage::url($file);
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
                 'file' => $file,
                 'url_file' => $url_file,
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
