<?php

namespace App\Http\Controllers;

use Auth;
use App\Employee;
use App\training_type;
use App\training_location;
use App\training_register;
use App\training_recommendation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainingDevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $trainT = training_type::getAllTrainingTypes();
        $trainR = training_register::getAllTrainingRegister();
        $empL = Employee::getAllEmployees();
        $trainR_complete = training_register::getCompletedTrainingRegister();
        $trainR_uncomplete = training_register::getUncompletedTrainingRegister();
        $trainR_approv = training_register::getApprovedTrainingRegister();
        $trainR_pen = training_register::getPendingTrainingRegister();



        return view('training_dev', compact('trainT', 'trainR', 'empL', 'trainR_complete', 'trainR_uncomplete', 'trainR_approv', 'trainR_pen'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTrainingsRegister()
    {
        //

        $trainT = training_type::getAllTrainingTypes();
        $trainL = training_location::getAllTrainingLocation();
        $empL = Employee::getAllEmployees();
        $trainR = training_register::getAllTrainingRegister();

        return view('trainings_register', ['trainT' => $trainT, 'trainL' => $trainL, 'empL' => $empL, 'trainR' => $trainR]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTrainingTypes()
    {
        //

        $trainT = training_type::getAllTrainingTypes();
        $trainL = training_location::getAllTrainingLocation();

        //dd($trainT);

        return view('training_types', ['trainT' => $trainT, 'trainL' => $trainL]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showTrainingRecommendations()
    {
        //

        $trainT = training_type::getAllTrainingTypes();
        $empL = Employee::getAllEmployees();
        $OutBreco = training_recommendation::getOutboundTrainingRecomm();
        
        $InBreco = training_recommendation::getInboundTrainingRecomm();
        //dd($InBreco);

        return view('training_recommendations', ['trainT' => $trainT, 'empL' => $empL, 'InBreco' => $InBreco, 'OutBreco' => $OutBreco]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $rnd = mt_rand();
        $rand_strip = substr($rnd, 0, 4);
        
            $newtrainingtype = new training_type();
            $newtrainingtype->training_code = '#'.$rand_strip;
            if($check_user->branch_id == null){
                $newtrainingtype->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newtrainingtype->branch_id = $check_user->branch_id;
            }
            $newtrainingtype->training_location_id = $request['t_loca'];
            $newtrainingtype->name = $request['t_title'];
            $newtrainingtype->duration = $request['t_duration'];
            $newtrainingtype->certification = $request['t_cert'];

                //dd($newtrainingtype);
            $newtrainingtype->save();
                alert()->success('Training Type Successfully Added')->autoclose(4000);
                return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLocation(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $rnd = mt_rand();
        $rand_strip = substr($rnd, 0, 4);
        
            $newtrainingtype = new training_location();
            if($check_user->branch_id == null){
                $newtrainingtype->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newtrainingtype->branch_id = $check_user->branch_id;
            }
            $newtrainingtype->name = $request['t_title'];

                //dd($newtrainingtype);
            $newtrainingtype->save();
                alert()->success('Training Location Successfully Added')->autoclose(4000);
                return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTrainRecommendation(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $rnd = mt_rand();
        $rand_strip = substr($rnd, 0, 4);
        
            $newtrainingreco = new training_recommendation();
            $newtrainingreco->training_type_id = $request['tr_course'];
            if($check_user->branch_id == null){
                $newtrainingreco->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newtrainingreco->branch_id = $check_user->branch_id;
            }
            $newtrainingreco->employee_id = $request['emp_recomm'];
            $newtrainingreco->recommendation_note = $request['recomm_note'];
            $newtrainingreco->recommended_by = $check_user->id;
            $newtrainingreco->date_of_recommendation = Carbon::now();
            $newtrainingreco->awaiting_approval_from = $request['emp_to_appr'];
            
               // dd($newtrainingreco);
            $newtrainingreco->save();
                alert()->success('Recommendation Successfully Sent')->autoclose(4000);
                return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTrainingTypes(Request $request, $id)
    {
        //

        $update_appr_comp = training_type::getTrainingTypeByID($id);

        $update_appr_comp->training_location_id = $request['loca'];
        $update_appr_comp->name = $request['name'];
        $update_appr_comp->duration = $request['dura'];
        $update_appr_comp->certification = $request['cert'];

        $update_appr_comp->save();

        alert()->success('Training Course successfully updated')->autoclose(4000);
                return redirect()->back();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

            $deleteTrainingT = training_type::getTrainingTypeByID($id);
            $deleteTrainingT->delete();

             alert()->success('Training Course removed')->autoclose(4000);
            return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addStaffTraining(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        
            $newtrainingreg = new training_register();
            $newtrainingreg->training_type_id = $request['tr_type'];
            if($check_user->branch_id == null){
                $newtrainingreg->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newtrainingreg->branch_id = $check_user->branch_id;
            }
            $newtrainingreg->employee_id = $request['emp_name'];
            $newtrainingreg->why_training_matters = $request['tra_matters'];
            $newtrainingreg->recommended_courses = $request['rec_courses'];
            $newtrainingreg->approval_status = 'Pending';
            $newtrainingreg->training_start_date = $request['start_date'];
            $newtrainingreg->training_end_date = $request['end_date'];
            $newtrainingreg->completed = 'No';


                //dd($newtrainingreg);
            $newtrainingreg->save();
                alert()->success('Successfully Subscribed Employee to Training ')->autoclose(4000);
                return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateApprovalCompleted(Request $request, $id)
    {
        //

        $update_appr_comp = training_register::getTrainingRegByID($id);

        if($update_appr_comp->approval_status == "Pending" && $request['approval'] == "Pending"){

            alert()->error('stop playng with the button, approve already')->autoclose(4000);
                return redirect()->back();

        } elseif($update_appr_comp->approval_status == "Pending" && $request['approval'] == "Approved"){

            $update_appr_comp->approval_status = $request['approval'];
            $update_appr_comp->completed = $update_appr_comp->completed;

            $update_appr_comp->save();

        alert()->success('Approval status successfully updated')->autoclose(4000);
                return redirect()->back();
        } else {
            $update_appr_comp->approval_status = $update_appr_comp->approval_status;
            $update_appr_comp->completed = $request['completed'];

            $update_appr_comp->save();

        alert()->success('Completion status successfully updated')->autoclose(4000);
                return redirect()->back();
        }
        

        

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTrainingLoc(Request $request, $id)
    {
        //

        $update_loc = training_location::getTrainingLocByID($id);
        $update_loc->name = $request['name'];

        $update_loc->save();

        alert()->success('Training Location successfully updated')->autoclose(4000);
                return redirect()->back();

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTrainingRecommendation(Request $request, $id)
    {
        //

        

        $update_tra_recomm = training_recommendation::getTrainingRecommendationByID($id);

        if($request['tr_course'] == $update_tra_recomm->training_type_id && $request['recomm_note'] == $update_tra_recomm->recommendation_note && $request['emp_to_appr'] == $update_tra_recomm->awaiting_approval_from){
            alert()->error('Am i a joke to you? no updates done')->autoclose(4000);
                return redirect()->back();
        }

        $update_tra_recomm->training_type_id = $request['tr_course'];
        $update_tra_recomm->recommendation_note = $request['recomm_note'];
        $update_tra_recomm->awaiting_approval_from = $request['emp_to_appr'];
        
       // dd($update_tra_recomm);
        $update_tra_recomm->save();

        alert()->success('Recommendation successfully updated')->autoclose(4000);
                return redirect()->back();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRecommendation($id)
    {
        //

            $deleteTrainingReco = training_recommendation::getTrainingRecommendationByID($id);
            $deleteTrainingReco->delete();

             alert()->success('Training Recommendation removed')->autoclose(4000);
            return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyLocation($id)
    {
        //

            $deleteTrainingL = training_location::getTrainingLocByID($id);
            $deleteTrainingL->delete();

             alert()->success('Training Location removed')->autoclose(4000);
            return redirect()->back();
    }
}
