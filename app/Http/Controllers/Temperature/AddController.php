<?php

namespace App\Http\Controllers\Temperature;

use App\Http\Controllers\Controller;
use App\Models\Api\Weather;
use App\Models\Temperature;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function make(Request $request, Temperature $temperatureObj, Weather $weatherObj)
    {
        $averageTemperature = $weatherObj->averageTemperature($request->city, $request->countryCode);
        $temperature        = $temperatureObj->newEntity($request->city, $request->countryCode, $averageTemperature);

        return redirect()->route('details', ['temperatureID' => $temperature->id]);
    }
}
