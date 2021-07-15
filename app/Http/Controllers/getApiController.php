<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('country')) {
            $country  = $request->country;
        } else {
            $country = "Indonesia";
        }

        $host = 'covid-19-coronavirus-statistics.p.rapidapi.com';
        $key = '64982dc613mshab399829b0b9a06p1af6fbjsn5ecae3a10395';




        $list_data = $this->getApi($host, $key, $country)['data']['covid19Stats'][0];
        $list_country = $this->getApi($host, $key, $country = '')['data']['covid19Stats'];

        $country_array = [];
        foreach ($list_country as $result) {
            $country_array[] = $result['country'];
        }
        $country = collect($country_array)->unique();

        return view('report', compact('list_data', 'country'));
    }

    private function getApi($host, $key, $country)
    {
        return Http::withHeaders([
            'x-rapidapi-key' => $key,
            'x-rapidapi-host' => $host,
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats', [
            'country' => $country
        ]);
    }
}