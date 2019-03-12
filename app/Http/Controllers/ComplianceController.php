<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compliance_policy;
use App\compliance_file;
use App\Employee;
use Auth;
use Storage;
use Session;

class ComplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cbid,$id)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        if($check_user->branch_id == null){
            $cbid = $check_user->company_id;
        } elseif($check_user->company_id == null){
            $cbid = $check_user->branch_id;
        }   

        Session::put('comp_or_bra_id', $cbid); 

        $compli_file = compliance_file::getAllComplienceFiles($id);
        $compli = compliance_policy::getAllCompliancePolicy();

        foreach ($compli as $key => $all_compli) {
            # code...
            $select_compli1 = $all_compli->id;

            //dd($select_compli1);
            Session::put('polID', $select_compli1);
        }

        


        return view('compliance_policy', ['compli' => compliance_policy::getAllCompliancePolicy(), 'compli_file' => compliance_file::getAllComplienceFiles($id), 'id' => $select_compli1, 'cbid' => $cbid]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accPolicy()
    {
        //

        
        
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

        // $chk_type = $request['text_text'];
        
        // header("Content-type: application/vnd.ms-word");
        // header("Content-Disposition: attachment;Filename=".rand().".doc");
        // header("Pragma: no-cache");
        // header("Expires: 0");

        // echo $request['text_text'];

                // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        /* Note: any element you append to a document must reside inside of a Section. */

         // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        $chk_type = $request['text_text'];

        // Adding Text element to the Section having font styled by default...
        $section->addText($request["text_text"]);

        // Saving the document as HTML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('helloWorld.docx');

        alert()->success('Yes, it got here')->autoclose(4000);
                return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePolicyFile(Request $request)
    {

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $a = $request['p_name'];

        $file_client = $request->file('p_file');
        $company_name = $check_user->company->name;

        $extension = strtolower($file_client->getClientOriginalExtension());
        if($extension == 'pdf' || $extension == 'docx'){
            $pol_file = 'COMPLI'."_".$company_name.time().'.'.$file_client->getClientOriginalExtension();
        } else {

            alert()->error('Invalid File format')->autoclose(4000);
            return redirect()->back();
        }

         // dd($pol_file);

        if($check_user->branch_id == null){
            $check_if_pol_exists = compliance_policy::select('id')->where('company_id', $check_user->company_id)
                                                      ->where('policy_name', $request['p_name'])
                                                      ->count('id');
        } elseif($check_user->company_id == null){

            $check_if_pol_exists = compliance_policy::select('id')->where('branch_id', $check_user->branch_id)
                                                      ->where('policy_name', $request['p_name'])
                                                      ->count('id');
        }

        if($check_if_pol_exists == 0) {

            $new_comp_pol = new compliance_policy();
            $new_comp_pol->policy_name = $request['p_name'];
                if($check_user->branch_id == null){
                        $new_comp_pol->company_id = $check_user->company_id;
                } elseif ($check_user->company_id == null){
                        $new_comp_pol->branch_id = $check_user->branch_id;
                }
            $new_comp_pol->by_who = "U";
            //dd($new_comp_pol);
            $new_comp_pol->save();

            $new_comp_file = new compliance_file();
            $new_comp_file->compliance_policy_id = $new_comp_pol->id;
                if($check_user->branch_id == null){
                        $new_comp_file->company_id = $check_user->company_id;
                } elseif ($check_user->company_id == null){
                        $new_comp_file->branch_id = $check_user->branch_id;
                }
            $new_comp_file->filename = $pol_file;
            $new_comp_file->save();
            //dd($new_comp_file);

                 $destinationPath = Storage::putFileAs('public/images/PolicyFiles', $file_client,$pol_file);
                 alert()->success('Policy successfully added')->autoclose(4000);
                return redirect()->back();

        } else {

            alert()->error('Policy with this name already exists')->autoclose(4000);
            return redirect()->back();
        }
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addMorePolicyFile(Request $request, $cbid, $id)
    {

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $file_client = $request->file('padd_file');
        $company_name = $check_user->company->name;

        $extension = strtolower($file_client->getClientOriginalExtension());
        if($extension == 'pdf' || $extension == 'docx'){
            $pol_file = 'COMPLI'."_".$company_name.time().'.'.$file_client->getClientOriginalExtension();
        } else {

            alert()->error('Invalid File format')->autoclose(4000);
            return redirect()->back();
        }

         // dd($pol_file);

        if($check_user->branch_id == null){
            $check_if_pol_exists = compliance_policy::select('id')->where('company_id', $check_user->company_id)
                                                      ->where('id', $id)
                                                      ->first('id');
        } elseif($check_user->company_id == null){

            $check_if_pol_exists = compliance_policy::select('id')->where('branch_id', $check_user->branch_id)
                                                      ->where('id', $id)
                                                      ->first('id');
        }

        if($check_if_pol_exists) {

            $new_comp_file = new compliance_file();
            $new_comp_file->compliance_policy_id = Session::get('try_comp_id');
                if($check_user->branch_id == null){
                        $new_comp_file->company_id = $check_user->company_id;
                } elseif ($check_user->company_id == null){
                        $new_comp_file->branch_id = $check_user->branch_id;
                }
            $new_comp_file->filename = $pol_file;
            //dd($new_comp_file->compliance_policy_id);
            $new_comp_file->save();
            

                 $destinationPath = Storage::putFileAs('public/images/PolicyFiles', $file_client,$pol_file);
                 alert()->success('File successfully added')->autoclose(4000);
                return redirect()->back();

        } else {

            alert()->error('Policy with this name does not exists')->autoclose(4000);
            return redirect()->back();
        }
  
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
