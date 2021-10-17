<?php

namespace App\Http\Controllers\Temperature;

use App\Http\Controllers\Controller;
use App\Models\Api\Weather;
use App\Models\Temperature;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function details(Request $request, Temperature $temperatureObj, $temperatureID)
    {
        $temperature = $temperatureObj->getByID($temperatureID);

        return view('Temperature.detail', compact('temperature'));
    }
}
