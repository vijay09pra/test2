<?php session_start();
function redirect($url) {
    die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}

/**
 * Post curl method
 *
 * @param $url
 * @param $data
 * @return bool|mixed|string|void
 */

function curlUsingPost($url, $data)
{
    if(empty($url) OR empty($data))
    {
        return 'Error: invalid Url or Data';
    }

    //url-ify the data for the POST
    $fields_string = '';
    foreach($data as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }
    rtrim($fields_string,'&');


    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,count($data));
    curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

    //curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
    //curl_setopt($ch,CURLOPT_CAINFO, getcwd().'/cacert.pem'); /* fixed! */

    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10); # timeout after 10 seconds, you can increase it
    //curl_setopt($ch,CURLOPT_HEADER,false);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  # Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); # Some server may refuse your request if you dont pass user agent

    //execute post
    $result = curl_exec($ch);

    if($result=== false)
    {

        $myFile = "curl_errors.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");

        $stringData = $url;
        fwrite($fh, $stringData);
        $stringData = "\n**************************************************************\n";

        $stringData = $fields_string;
        fwrite($fh, $stringData);
        $stringData = "\n**************************************************************\n";

        $stringData = 'Curl error: ' . curl_error($ch);
        fwrite($fh, $stringData);
        $stringData = "\n**************************** END Here **********************************\n";
        fwrite($fh, $stringData);
        fclose($fh);

    }

    //close connection
    curl_close($ch);
    return $result;
}

// *************************** Post Curl Method Function end ************************
