<?php
use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Models\Quotes;

class quoteController extends Controller
{
    static function getQuote() { 
        $client = new Client([
            'base_uri' => 'https://api.kanye.rest/quote',
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'quote');
        
        $response = json_decode($response->getBody()->getContents());
        settype($response, "array");
        $isExist = Quotes::select("quotes")
                        ->where("quotes", $response['quote'])
                        ->exists();
        if ($isExist) {
            $name = Quotes::where('quotes', $response['quote'] )->value('counter');
            $name = Quotes::where('quotes', $response['quote'] )->update(['counter' => $name + 1]);

        } else {
            $db = new Quotes;
            $db->quotes = $response['quote'];
            $db->save();
        }
        $x = array(
            'quote' => $response['quote'],
            'counter' => Quotes::where('quotes', $response['quote'] )->value('counter')
        );
        return $x;
    }
    static function getAllQuotes() {
	    $allQuotes = Quotes::all();
	    return json_decode($allQuotes);
    }
}
