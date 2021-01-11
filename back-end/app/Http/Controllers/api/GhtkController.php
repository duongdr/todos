<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GhtkController extends Controller
{

    public function getInfo()
    {
        $code = 'S18310248.MB20.C4.1000000725';
        $response = Http::withHeaders([
            'token' => 'a521F84304bc81EFeFb641d745f4a1313b6c9fee'
        ])->get('http://vinhtq1.ghtklab.com/services/shipment/v2/' . $code);

        return $response;
    }
}
