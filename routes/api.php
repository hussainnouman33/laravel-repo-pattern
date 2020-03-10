<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('all','BlogController@index');
Route::post('save','BlogController@store');





Route::get('drop', function (Request $request) {
    Schema::dropIfExists('_visit');
    Schema::dropIfExists('_user_timings');
    Schema::dropIfExists('_user_speciality');
    Schema::dropIfExists('_user_contact_details');
    Schema::dropIfExists('_user_appointments');
    Schema::dropIfExists('_user_access_modules');
    Schema::dropIfExists('_task_states');
    Schema::dropIfExists('_task_priorities');
    Schema::dropIfExists('_supervisor');
    Schema::dropIfExists('_supdocnotf');
    Schema::dropIfExists('_rolemapping');
    Schema::dropIfExists('_relationships');
    Schema::dropIfExists('_purpose_of_visits');
    Schema::dropIfExists('_patient_visit');
    Schema::dropIfExists('_patient_contact_person');
    Schema::dropIfExists('_ovada_cases');
    Schema::dropIfExists('_othercontactperson');
    Schema::dropIfExists('_notificationtypes');
    Schema::dropIfExists('_notifications');
    Schema::dropIfExists('_message_types');
    Schema::dropIfExists('_md_times_report');
    Schema::dropIfExists('_md_synaptic_details');
    Schema::dropIfExists('_md_speciality_consultation');
    Schema::dropIfExists('_md_referral_weightbearing');
    Schema::dropIfExists('_md_referral_tharapies');
    Schema::dropIfExists('_md_referral_modalities');
    Schema::dropIfExists('_md_referral_goals');
    Schema::dropIfExists('_md_referral_excercises');
    Schema::dropIfExists('_md_phy_occ_chir');
    Schema::dropIfExists('_md_mri_referral');
    Schema::dropIfExists('_md_hbot_notes');
    Schema::dropIfExists('_insurance_company');
    Schema::dropIfExists('_frontdesknotf');
    Schema::dropIfExists('_favourite_patient_doctor');
    Schema::dropIfExists('_facility_type');
    Schema::dropIfExists('_doctor_professional');
    Schema::dropIfExists('_doctor_favourite_codes');
    Schema::dropIfExists('_doctor_academic');
    Schema::dropIfExists('_doctor');
    Schema::dropIfExists('_docsupnotf');
    Schema::dropIfExists('_contact_person_types');
    Schema::dropIfExists('_contact_person_address_info');
    Schema::dropIfExists('_contact_person');
    Schema::dropIfExists('_case_allergies');
    Schema::dropIfExists('_case');
    Schema::dropIfExists('_bodyparts_sensation');
    Schema::dropIfExists('_available_specialties');
    Schema::dropIfExists('_areas');
    Schema::dropIfExists('_appointmenttype');
    Schema::dropIfExists('_appointmentpriority');

//    Schema::dropIfExists('_modules');
//    Schema::dropIfExists('_md_synaptic');
//    Schema::dropIfExists('_md_speciality');
//    Schema::dropIfExists('_md_range_of_motion');
//    Schema::dropIfExists('_md_mri');
//    Schema::dropIfExists('_doctor_favourite_folder');



});


Route::get('/clear', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});
