<?php
//
// Moshell's basic demonstration of the use of CURL and "screen scraping" 
// to extract information from a website. 12 March 2010
// NOTE: This technique depends on the original website's never changing 
// its HTML structure, and so is quite "fragile"
//
$Testnumber=1; 

function logprint($text,$n)
{
	global $Testnumber;
	if ($Testnumber==$n)
		print "Log>$text <br />";
}

$testing=1;
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-US"); 

curl_setopt($ch, CURLOPT_HEADER, 0);
// set to 0 to eliminate header info from response

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// Returns response data instead of TRUE(1)

$fields='';
//curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim( $fields, "& " )); 
curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim( $fields, "& " )); 
// use HTTP POST to send form data. (None in this example)


//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// uncomment this line if you get no gateway response. ###

$response=curl_exec($ch); //execute post and get results
curl_close ($ch);


//print "Moggrab received the following HTML: <br />*************************** <br />";
//print $response."<br />";
//print "********************************* <br />";

// NOW let us "screen scrape" for image

$gplace=strpos($response,"/az/");
$jplace = strpos($response,".jpg")+4;
$pla = $jplace-$gplace;
// Scraping, Try 2: Get more precise with our snipping. Also let's take just ten characters.

$rest=substr($response,$gplace,$pla);  // OK we have skipped the dollar sign. //Now can we get a pure number, without the extra junk?
//logprint( "Second try: rest=$rest",1);
//print "<br />********************************* <br />";
$bing = "http://www.bing.com".$rest;

//echo '<img src="' . $bing . '" alt="error">'; 
//echo $bing;

   ?>