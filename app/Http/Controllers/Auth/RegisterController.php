<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\Models\User;
use App\Models\Company;
use App\Models\UserCompanyPlanDetails;


use App\Models\UserPlanDetails;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("guest");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "lastname" => "required|string|max:255",
            "firstname" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:user",
            "password" => "required|string|min:8|confirmed",
            /* other */
            "company" => "required|string|min:5|unique:company,company_name",
            "address" => "required|string|min:20",
            "plan" => "required|int|exists:plan,plan_id"
            /* end */
        ], ["address.min" => "please describe your location properly"]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // STEP1: save user
        $user = User::create([
            "lastname" => $data["lastname"],
            "firstname" => $data["firstname"],
            "email" => $data["email"],
            "password" => Hash::make($data["password"]),
        ]);

        // STEP2: save user plan details
        $upd = $user->userPlan()->create([
            "user_id_fk" => $user->user_id,
            "plan_id_fk" => 1
        ]);

        // STEP3: store company
        $com = Company::create([
            "company_name" => $data["company"],
            "company_address" => $data["address"]
        ]);

        error_log(json_encode($upd));
        error_log($upd->id);

        // STEP4: store user company plan
        $x = $upd->userCompanyDetails()->create([
            "company_id_fk" => $com->id,
            "user_plan_details_id_fk" => $upd->id,
        ]);

        return $user;
    }
}
