<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use \App\Helpers\ServerResponse;
use Illuminate\Support\Facades\Auth;

class AppMainController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth", "verified"]);
    }

    /**
     * index
     * @param Request $request request
     * @return View
     **/
    public function index(Request $request)
    { return view("main.main"); }


    /**
     * operation
     * @param Request $request request
     * @return Array|JSON
     **/
    public function action(Request $request, string $operation, string $info)
    {   //
        switch($operation)
        {
            case "insert":
                switch($info)
                {
                    case "car":
                        return $this->insert__car($request);
                    case "client":
                        return $this->insert__client($request);
                }
                return;
            case "update":
                switch($info)
                {
                    case "car":
                        return;
                    case "acc":
                        return;
                    case "client":
                        return;
                }
        }
        /*
         | fallback
         */
        return abort(404);
    }


    // =============== IMPLEMENTATION

    /**
     * insert__car
     * @param Request $request request
     * @return Array|JSON
     **/
    public function insert__car(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "brand" => "required|string",
            "model" => "required|string",
            "plate" => "required|string",
            "color" => "required|string",
            "filecount" => "required|int|min:1",
        ]);

        if ($validator->fails())
        return ServerResponse::fail("failed!", $validator->messages()->toArray());


        // STEP1: insert car
        $car = \App\Models\Car::create([
            "car_brand" => $request->input("brand"),
            "car_model" => $request->input("model"),
        ]);

        // STEP2: insert user car details
        $ucd = \App\Models\UserCompanyCarDetails::create([
            "user_company_details_id_fk" => Auth::user(),
            "car_id_fk"  => $car->id,
            "color" => $request->input("color"),
            "car_plate_number" => $request->input("plate"),
            /*
             |  TABLE: car_status
             |  +---------------+-----------------+
             |  | car_status_id | car_status_name |
             |  +---------------+-----------------+
             |  |       1       |      Vacant     |
             |  +---------------+-----------------+
             |  |       2       |     Occupied    |
             |  +---------------+-----------------+
             */
            "car_status_id_fk" => 1
        ]);

        // STEP3: insert images
        for($idx = 0; $idx < $request->input("filecount"); $idx++)
        {
            $num = $idx + 1;
            $img = $request->file("file$num");

            $name = $img->getClientOriginalName()."-".time().$img->getClientOriginalExtension();
            $path = "/";
            $img->storeAs($path, $name);
        }

        return ServerResponse::success("success!");
    }

    /**
     * insert__client
     * @param Request $request request
     * @return Array|JSON
     **/
    public function insert__client(Request $request)
    {
        return response()->json(["status" => 'ok']);
    }
}
