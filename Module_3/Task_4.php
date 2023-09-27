<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);

        echo "Student $student Average Grade: $averageGrade\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 80, 'Science' => 88)
);

calculateAverageGrades($studentGrades);
