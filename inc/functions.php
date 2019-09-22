<?php
// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

require "quotes.php";


// Create the getRandomQuote function and name it getRandomQuote

$getRandomQuote = function() use($quote){
    //holds a random number between 0 and a arrays length
    $num = rand(0,(count($quote)-1));
    //returns 1 quote from quotes array
    return $quote[$num];
};


// Create the printQuote function and name it printQuote

$printQuote = function() use ($getRandomQuote,$randomColor,$color){

    $randomQuote = $getRandomQuote();
    //html mark up with a quote from quotes array
    $markUp = "
    <div id=\"quote-box\">
      <p class=\"quote\">
      {$randomQuote["quote"]}
      </p>
      <p class=\"source\">
      {$randomQuote["source"]}";
    /*
    if statements which checks if associative names 
    is found in quotes array using array method array_key_exists
    which requires 2 parameters (key name || array index, array variable).

    If conditions are true, a span with the value from the array
    will be concatenated to the variable markUp
    */
    if(array_key_exists("citation",$randomQuote)) 
        $markUp .="<span class=\"citation\">{$randomQuote["citation"]}</span>";
    if(array_key_exists("year",$randomQuote)) 
        $markUp .="<span class=\"year\">{$randomQuote["year"]}</span>";
    if(array_key_exists("category",$randomQuote)) 
        $markUp .="<span class=\"citation\">{$randomQuote["category"]}</span>";
    
    //close source paragraph and quote-box div
    $markUp .= "</p></div>";

    //refreshes page to change quote every 5 seconds
    header('Refresh: 5');
    return $markUp;
};

//returns a css background color property with a rgb value
$randomColor = function(){
    //gets a random number between 0 and 255
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    return "background-color:rgb({$r},{$g},{$b})";
};