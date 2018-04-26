<?php
require "pages/Templates/Header.php"; //Get the Header

//Random name Generator
$RNAMES = array("cap", "mis", "vis", "peter", "kut", "mortal", "phone", "acht", "hond", "neger", "vies", "kikker", "vork", "koper", "truck", "tak", "noot", "hoek", "schud", "jongen", "goed", "moeilijk", "vallen", "knoop", "schaar", "golf", "machine", "stormachtig", "mond", "hoop", "tweig", "zwijg", "kat", "moord", "busje", "blozen", "impuls", "tand", "waterig", "schreeuw");//Array of random words.
$Names = array_rand($RNAMES, 8); //Get random array entry's
$name1 = $RNAMES[$Names[0]] . $RNAMES[$Names[1]]; //make words out of 2 random array entry's
$name2 = $RNAMES[$Names[2]] . $RNAMES[$Names[3]];
$name3 = $RNAMES[$Names[4]] . $RNAMES[$Names[5]];
$name4 = $RNAMES[$Names[6]] . $RNAMES[$Names[7]];



    ?>


<?php

function showVideo() //Show all Video's (films and series)
{
    var_dump($main);
}
require "pages/Templates/footer.php"; //Get the Footer
?>
