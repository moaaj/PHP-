<?php
$grade='b';

switch($grade)
{
    case 'a':
    case 'A':
    echo "Excellent";
    break;
    case 'b':
    case 'B':
    echo "Very Good";
    break;
    case 'c':
    case 'C':
    echo "Need Improvement";
    break;
    default:
    echo "No Grades Found";
    break;

                    

}


?>