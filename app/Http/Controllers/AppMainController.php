<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use \App\Models\Car;
use \App\Helpers\ServerResponse;

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

            // let user use existing car info
            // do not validate car
            // "brand" => "required|string|unique:car,car_brand",
            // "model" => "required|string|unique:car,car_model",

            "brand" => "required|string",
            "model" => "required|string",
            "description" => "required|string|min:20",
            "plate" => "required|string|unique:user_company_car_details,car_plate_number",
            "color" => "required|string",
            "filecount" => "required|int|min:1",
        ]);

        if ($validator->fails())
        return ServerResponse::fail("failed!", $validator->messages()->toArray());

        // STEP1: insert user car details
        $ucd = Auth::user()->userCompanyCar()->create([
            "car_brand" => $request->input("brand"),
            "car_model" => $request->input("model"),
            "car_color" => $request->input("color"),
            "car_plate_number" => $request->input("plate"),
            "car_description"  => $request->input("description"),
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

        // STEP2: insert images
        for($idx = 0; $idx < $request->input("filecount"); $idx++)
        {
            $num = $idx + 1;
            $img = $request->file("file$num");

            $name = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME) . "-" .time() . "." .$img->getClientOriginalExtension();
            $path = "public/cars/" . $ucd->car_brand . "/" . $ucd->car_model . "/" . $ucd->user_company_car_details_id . "/";
            $img->storeAs($path, $name);

            $imgSRC = "cars/" . $ucd->car_brand . "/" . $ucd->car_model . "/" . $ucd->user_company_car_details_id . "/";

            $ucd->carImage()->create([
                "car_image_link" => $imgSRC . $name
            ]);
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
