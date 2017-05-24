<?php


namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\middleware\Tokeniser as Tokeniser;

/**
 * Class BookingController
 * @package App\Controllers
 */
class BookingController
{

    /**
     * @param Request $request
     * @param Response $response
     * @param Tokeniser $token
     */
    public function booking(Request $request, Response $response, Tokeniser $token)
    {
        //take params

        $x = $token->TokenGenerator();
        var_dump($x);
        //what type of rest is it (json / xml )

        //validate

        //start timer
            //extract card details
            //create token
        //stop timer

        //inject into xml (json /xml )

        //send to book

        //receive response

        //return response



        echo "hello";
    }

}