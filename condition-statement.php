<?php
function checkEligibilityToVote()
{
    $age = 20;
    $myName = "Michelle Wanderi";
    if($age >=18)
    {
        echo "$myName  You are eligible to vote";
    }
    else{
        echo "$myName   You are not eligible to vote";
    
    }
}
// checkEligibilityToVote();

//grading
function gradingSystem()
{
    $marks=70;
if($marks >=80)
{
    $grade = "A (Plain)";
}
else if($marks >=75)
{
    $grade = "A-";
}
else if($marks >=65)
{
    $grade = "B+";
}
else if($marks >=60)
{
    $grade = "B (Plain)";
}
else if($marks >=50)
{
    $grade = "C+";
}
else
{
    $grade = "FAIL";
}
echo "Your score is: $grade";
}
gradingSystem()
?>