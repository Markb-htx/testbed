<?php


namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SoapController
{

    public function soap(Request $request,Response $response)
    {

        //get the request url as soap comes in different versions selected by the url

        $route = $request->getAttribute('route');

        $spliturl = (array) $this->SplitUrl((string) $route->getPattern());

        print_r($spliturl);

        //take params
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

    function SplitUrl($url)
    {
        //split by slash
        $expand = explode("/",$url);
        //count array() if array more that 7 reject the request and echo error
        //this will stop bad / hackey URLs from getting any further
        if (count($expand) > 7)
        {
            die;
        }
        else
        {
            //return split
            return $expand;
        }




    }

}