<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
$course = new Course();
function construct() {
    load_model('addCourse');   
}

function indexAction() {
    load_view('addCourse');   
}

function addChapterAction() {
    $chapter_title = $_POST['chapter_title'];
    $course_title = $_POST['course_title'];
    
    $chapter = new Chapter();
    $chapter->chapter_title = $chapter_title;
    
    global $course;
    $course->course_title = $course_title;
    $course->addChapter($chapter);
    echo $course->list_chapter[0]->chapter_title;
}

function addLessonAction() {
    $order_lesson = $_POST['order'];
    $lesson_title = $_POST['lesson_title'];
    $of_chapter = $_POST['order_chapter'];
    
    echo $of_chapter;
}

