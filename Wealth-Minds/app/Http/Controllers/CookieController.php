<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie()
    {
        // Set a cookie that expires in 60 minutes
        $cookie = Cookie::make('tracking', 'value', 60);

        // Return a response with the cookie
        return response('Set Cookie')->withCookie($cookie);
    }

    public function acceptCookies()
{
    $cookie = Cookie::make('consent', 'Accepted', 30 * 24 * 60); // Expire in one month (30 days)

    // Attach the consent cookie to the response
    $response = response()->json(['message' => 'Cookies Accepted']);
    $response->withCookie($cookie);

    // Return the JSON response with the accepted message
    return $response;
}

    public function rejectCookies()
    {
        $cookie = Cookie::forget('consent');

       return response()->json(['message' => 'Cookies Rejected'])->withCookie($cookie);
    
    }
    
}
