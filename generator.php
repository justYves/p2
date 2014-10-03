<?php 

// get the data from the form
$wordNumber = $_POST['words'];
$number = isset($_POST['number']);
$symbol= isset($_POST['symbol']);

// validate investment entry
 if (empty($wordNumber) ) {
        $wordNumber = 4;
        //$error_message = '';
    } /*else if ( !is_numeric($wordNumber) )  {
        $error_message = 'Please input a number of words betwen 4 and 8.'; 
    } else if ( $wordNumber < 4) {
        $error_message = 'Please input a number of words betwen 4 and 8.';  
    } else {
        $error_message = '';
    } */

// if an error message exists, go to the index page
/*    if ($error_message != '') {
        include('index.php');
        exit();
    }     
*/

#echo $wordNumber;
#echo $number; 
#echo $symbol; 

$word_download = file_get_contents('https://raw.githubusercontent.com/first20hours/google-10000-english/master/google-10000-english.txt');
$wordList = explode("\n",$word_download);

	
//Create Words
$password='';
for ( $i = 0; $i < $wordNumber ; $i++){
	$rand = rand(0,count($wordList)-1);
	$password= $password.$wordList[$rand]." ";
}

//Add Number
if (!($number==FALSE)){
	$password= $password.rand(0,9)." ";
}

//Add symbol
if (!($symbol==FALSE)){
	$symbol = "+_)(*&^%$#@!~=-";
	$symbolArray=str_split($symbol);
	$rand = rand(0,count($symbolArray)-1);
	$password= $password.$symbolArray[$rand];
}

?>