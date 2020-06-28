<?php
function get_course_by_id($course_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.Course WHERE CourseId = $course_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0];
}

function get_table_of_content_by_course_id($course_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.TableOfContent WHERE CouseId =  $course_id
                ORDER BY [Order]";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function get_lesson_by_table_of_content_id($table_of_content_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.Lesson WHERE TableOfContentId = $table_of_content_id
                ORDER BY [Order]";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function get_lesson_by_id($lesson_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.Lesson WHERE LessonId = $lesson_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0];
}
?>