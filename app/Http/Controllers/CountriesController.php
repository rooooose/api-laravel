<?php





namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
	public function index(){
		return view('welcome');

	}
    public function countries($name){


    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://restcountries.eu/rest/v2/name/".$name,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_COOKIE => "__cfduid=dd06d8a247dc94c6574d4143530c7d7301582288923",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {

		  //echo $response;
		}

		$country = json_decode($response);
		$country_name = $country[0]->name;
		$country_pop = $country[0]->population;
		
		return view('welcome', compact('country_name', 'country_pop'));

    }


}
