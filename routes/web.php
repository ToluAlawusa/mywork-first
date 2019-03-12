<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects','ProjectsController@index')->name('projects');

Route::get('Company_setting','CompanyController@create')->name('Company_setting');

Route::post('/createCompany','CompanyController@store');

Route::post('submit_employee', 'EmployeesController@store')->name('submit_employee');

Route::get('create_employee','EmployeesController@create')->name('create_employee');

Route::get('view_employee/{id?}', 'EmployeesController@index')->name('view_employee');

//INVITE SECTION

Route::get('user_invite/{email}/{token}', 'UserInviteController@index');

Route::Post('user_invite/{email}/{token}', 'UserInviteController@store');


//Route::get('/employee/create_employee','EmployeesController@index')->name('create_employee');

Route::get('holidays','HolidaysController@index')->name('holidays');
//invite section
Route::get('/sendInvite/{email}/{desig}','InvitesController@invite');

// client routes
Route::get('/client', 'ClientController@index')->name('client');

Route::post('/client', 'ClientController@store')->name('client');

Route::post('/edit_client/{id}', 'ClientController@edit')->name('edit_client');

Route::post('/delete_client/{id}', 'ClientController@destroy')->name('delete_client');

Route::post('/client_send_email/{id}', 'ClientController@sendClientEmail')->name('client_send_email');

Route::get('/email_view_test', 'ClientController@testEmailView')->name('email_view_test');


// employee fin data routes
Route::get('/employee_fin_data', 'EmployeeDataController@index')->name('employee_fin_data');
Route::post('/employee_fin_data', 'EmployeeDataController@store')->name('employee_fin_data');
Route::post('/edit_payroll_data/{id}', 'EmployeeDataController@update')->name('edit_payroll_data');
Route::post('/delete_payroll_data/{id}', 'EmployeeDataController@destroy')->name('delete_payroll_data');

//payslip routes
Route::get('/payslips', 'EmployeeDataController@create')->name('payslips');
Route::get('/generate_payslip/{id}', 'EmployeeDataController@show')->name('generate_payslip');
Route::post('/generate_payslip/{id}', 'PayslipController@store')->name('generate_payslip');
Route::post('/delete_payslip/{id}', 'PayslipController@destroy')->name('delete_payslip');

// attendance routes
Route::get('/attendance_settings', 'AttendanceController@showSettings')->name('attendance_settings');
Route::post('/attendance_settings', 'AttendanceController@storeSettings')->name('attendance_settings');
Route::post('/update_attendance_settings/{id}', 'AttendanceController@updateSettings')->name('update_attendance_settings');
Route::get('/attendance_register', 'AttendanceController@index')->name('attendance_register');
Route::post('/lateness_reason', 'AttendanceController@doLatenessReason')->name('lateness_reason');
Route::post('/location_reason', 'AttendanceController@doLocationDiffReason')->name('location_reason');

// test route
Route::get('/clockin', 'HomeController@clockIn')->name('clockin');

// support and maintenance routes
Route::get('/support_maintenance', 'SupportController@index')->name('support_maintenance');
Route::get('/view_support_ticket/{id}', 'SupportController@showViewSupport')->name('view_support_ticket');
Route::post('/open_new_ticket', 'SupportController@store')->name('open_new_ticket');
Route::post('/add_new_ticket_mess/{id}', 'SupportController@sendOtherMessagesToTicket')->name('add_new_ticket_mess');

// training and career dev routes
Route::get('/training_dev', 'TrainingDevController@index')->name('training_dev');
Route::get('/trainings_register', 'TrainingDevController@showTrainingsRegister')->name('trainings_register');
Route::get('/training_types', 'TrainingDevController@showTrainingTypes')->name('training_types');
Route::post('/add_training_types', 'TrainingDevController@store')->name('add_training_types');
Route::post('/add_training_location', 'TrainingDevController@storeLocation')->name('add_training_location');
Route::post('/add_staff_training', 'TrainingDevController@addStaffTraining')->name('add_staff_training');
Route::post('/update_staff_training/{id}', 'TrainingDevController@updateApprovalCompleted')->name('update_staff_training');
Route::post('/update_training_types/{id}', 'TrainingDevController@updateTrainingTypes')->name('update_training_types');
Route::post('/delete_training_types/{id}', 'TrainingDevController@destroy')->name('delete_training_types');
Route::post('/update_training_loc/{id}', 'TrainingDevController@updateTrainingLoc')->name('update_training_loc');
Route::post('/delete_training_location/{id}', 'TrainingDevController@destroyLocation')->name('delete_training_location');
Route::get('/training_recommendations', 'TrainingDevController@showTrainingRecommendations')->name('training_recommendations');
Route::post('/training_recommendations', 'TrainingDevController@storeTrainRecommendation')->name('training_recommendations');
Route::post('/update_training_recomm/{id}', 'TrainingDevController@updateTrainingRecommendation')->name('update_training_recomm');
Route::post('/delete_training_recomm/{id}', 'TrainingDevController@destroyRecommendation')->name('delete_training_recomm');

//email manager routes
Route::get('/email_manager', 'MailManagerController@index')->name('email_manager');
Route::get('/signin', 'MailManagerController@signIn')->name('signin');
Route::get('/authorize', 'MailManagerController@gettoken')->name('authorize');

Route::get('/oauth/gmail', function (){
    return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function (){
    LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function (){
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});

// compliance routes

Route::get('/compliance_policy/{cbid}/{id?}', 'ComplianceController@index')->name('compliance_policy');
Route::post('/create_compliance_text', 'ComplianceController@store')->name('create_compliance_text');
Route::post('/create_compliance_upload', 'ComplianceController@storePolicyFile')->name('create_compliance_upload');
Route::post('/add_compliance_upload/{cbid}/{id?}', 'ComplianceController@addMorePolicyFile')->name('add_compliance_upload');

// asset manangement routes
Route::get('/asset_man/{id}', 'AssetManController@index')->name('asset_man');
Route::get('/asset_types/{id}', 'AssetManController@showAssetTypes')->name('asset_types');
Route::get('/assets_register/{id}', 'AssetManController@showAssetsRegister')->name('assets_regiater');

// marketing campaign routes
Route::get('/marketing_campaign', 'MarketingCampaignController@index')->name('marketing_campaign');
Route::post('/add_campaign_type', 'MarketingCampaignController@storeCampaignType')->name('add_campaign_type');
Route::post('/add_campaign_status', 'MarketingCampaignController@storeCampaignStatus')->name('add_campaign_status');
Route::get('/campaigns', 'MarketingCampaignController@indexAllCampaigns')->name('campaigns');



// Route::post('create_employee.store', [

//     'uses' => 'EmployeesController@store',

//     'as' => 'create_employee'

// ]);





