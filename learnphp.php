<html>

	<head>
		<title>Information Gathered</title>
	</head>
	
	<body>
		
        <?php
        
        echo "<h1>FUCKin RIGht</h1>"; 

        $userName = $_POST['username']; //<-- name defined in the html doc
        $streetAddress = $_POST['streetaddress']; 
        $cityAddress = $_POST['cityaddress']; 

        //constants: 
        define ('PI', 3.1415);
        // echo PI;

        $randNum = 5; 
        // echo 'Increment'. ++$randNum . '</br>'; 
        // echo 'Increment'. $randNum++ . '</br>'; 
        // echo $randNum; 

//Using a new variable to reference another variable
        $refToNum = &$randNum; 
        //$refToNum = $randNum; <-- if it didn't have te & $refToNumber would take its value here and would not change
        echo '$refToNum at line 27: ' , $refToNum; 

        $randNum = 100; 
        echo '$refToNum at line 30: ' , $refToNum, '</br>'; 

//IF /ELSE 
        if (5 == 10) {
            echo '5 == 10';
        } else {
            echo '5 != 10';
        }

        echo '</br>';

//COMPARISONS
        $numOfOranges = 5;
        $numOfBananas = 20; 

        if (($numOfOranges > 25) && ($numOfBananas > 30)) {
            echo '25% discount!'; 
        } elseif (($numOfOranges > 25) || ($numOfBananas > 30)){
            echo '15% off'; 
        } elseif (!($numOfOranges < 5) || !($numOfBananas < 5)){
            echo '5% off'; 
        } else {
            echo 'no discount for u';
        }
        echo '</br>';echo '</br>';

//TERNERY
        $biggestNum = (15<10) ? 1 : 2; 

        echo $biggestNum; 

        echo '</br>';echo '</br>';

//SWITCH
        switch ($userName) {
            case 'Derek':
                echo 'Hello Derek!';
                break;
            case 'Sally':
                echo 'Hello Sally!';
                break;
            default:
                echo 'who r u?'; 
                break;
        }

//WHILE
        $index = 0; 
        while ($index < 20){
            echo ++ $index . ', '; 
        }
//FOR LOOP works exatly like JS

echo '</br>';echo '</br>';

//ARRAYS
        $bestFriends = array('Joy', 'Willow', 'Ivy'); 

        $bestFriends[sizeof($bestFriends)] = 'Jesse'; //add to array in last place

        // for ($i = 0; $i < sizeOf($bestFriends); $i++) {
        //     echo 'hi', $bestFriends[$i], '</br>'; 
        // }

        foreach ($bestFriends as $friend) {
            echo $friend . ', '; 
        }

//CREATING KEY/VALUE PAIRS
        // $lotOrLittle = '';
        // if (sizeof($bestFriends) > 3) {
        //     $lotOrLittle = 'LOTS!'; 
        // } else {
        //     $lotOrLittle = 'SOME!'; 
        // }

        echo '</br>';echo '</br>';
        $customer = array('Name' => $userName, 
                        'Street' => $streetAddress, 
                        'City' => $cityAddress, 
                        'Best Friends' => $lotOrLittle);

        foreach ($customer as $key => $value) {
            echo $key . ' : ' . $value . '</br>';  
        }


//ARRAY TO STRING
        $randomString = 'Random String'; 

        $arrayToString = explode(' ', $randomString); 

        foreach ($arrayToString as $key) {
            echo $key; 
        }
        echo '</br>';echo '</br>';

//STRING TO ARRAY
        $stringToArray = implode('//', $arrayToString); 
        echo $stringToArray; 
        echo '</br>';echo '</br>';

//SUB SECTION OF STRING
        $partOfString = substr("Here is a string", 1, 14); 
        echo ($partOfString); 

        echo '</br>';echo '</br>';

//COMPARE STRINGS - Returns Integer ~ 0 => strings match
                                    // Positive -> first is longer than second, number = number of differences
                                    // Negative -> first is SHORTER than second, number = number of differences
        $man = 'Man';
        $manhole = 'Manhole'; 
        echo strcmp($man, $manhole);
        echo '</br>';echo '</br>';


        echo strstr($randomString, 'nd'); //<--Print everything after (and including) second value
        echo strpos($randomString, 'R'); //<--Ingeger location of string in another string
        echo '</br>';echo '</br>';

        //Replace - 1)Target, 2)Replace with, 3)String to be edited
        $newString = str_replace('String', 'Stuff', $randomString); 
        echo $newString;
        
        echo '</br>';echo '</br>';

//FUNCTIONS

        function addNumbers($x, $y){
            return $x + $y; 
        }

        echo addNumbers(1, 2); 


		?>
		
	</body>
	
</html>