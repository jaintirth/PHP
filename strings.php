<?php
    echo $str ='my string my rules';
    $len = strlen($str);

    echo '<br>the length of the string is  '.$len.' and it can be expanded';
    echo '<br>the words in the string are  '.str_word_count($str).' and they can be expanded';
    echo '<br>the REVERSED  string is  '.strrev($str).' and it can be expanded';
    echo '<br>the search of the string is  '.strpos($str,'st').' and it can be expanded';
    echo '<br>Replacing my with your  :  '.str_replace('my','your',$str).' : and it can be expanded';
?>