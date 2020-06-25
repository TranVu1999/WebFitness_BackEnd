<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau

function construct() {
    load_model('addCourse'); 
}

function indexAction() {
    load_view('addCourse');   
}

function addCourseAction() {
    $course_info = $_POST['course'];
    $course = json_decode($course_info);
    
    $course_title_format = str_replace(' ', '-', strtolower($course->course_title));
    
//    Add Course
    add_course($course->course_avatar, $course->course_title, $course->course_desc, $course->course_detail, $course_title_format);
    
//    Add TableContent
    $course_id = get_course($course->course_title);
    $chapter_order = 0;
    foreach($course->list_chapter as $chapter){
        $chapter_id = add_table_of_content($chapter->chapter_title, $chapter_order, $course_id);
        $chapter_order ++;
        
        foreach($chapter->list_lesson as $lesson){
            add_lesson($lesson->lesson_title, $lesson->desc, $lesson->order, $chapter_id, $lesson->path_video);
        }
    }
    
    echo $course->course_title;
} 


