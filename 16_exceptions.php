<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP.
   Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/
function inverse($x) {
    if(!$x) {
        throw new Exception ('Division by zero');
    }
    return 1/$x;
}

// Finally block is executed regardless of whether an exception is thrown or not
try {
    echo inverse(5);
    ECHO "<br>";
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(),' ';
} finally {
    echo 'first finally';
    ECHO "<br>";
}
try {
   
    echo inverse(5);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(),' ';
} finally {
    echo 'second finally';
}