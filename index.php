<?php
// //all your code
// $myName = "Michelle Wanderi";
// echo "$myName"

//arrays
$students = array("Purity","Annette", "Roy","Michelle");
echo $students[3];

//Associative array
$myMarks = array("Assessments"=> 25,
                    "CAT" => 15,
                    "Projects" => 35,
                    "Attendance" => 8
                );  
echo "My Project Marks:"  .$myMarks["Projects"];

// Multidimensional Arrays
$webDevTechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' => array('PHP','Python','Java','JS'),
    'frameworks' => array('Laravel','Django','SpringBoot','flutter'),
    'database' => array('MySQL','PostgreSQL','MongoDB','Firebase'),
);
echo $webDevTechnologies['frontend'][3];
echo $webDevTechnologies['frameworks'][2];
echo $webDevTechnologies['database'][0];
?>