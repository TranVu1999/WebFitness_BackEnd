<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('detail');
}

function indexAction() {
    $data['data_course'] = get_course_by_id(1);
    $data['data_table_of_content'] = get_table_of_content_by_course_id(1);
    $data['data_lesson'] = get_lesson_by_table_of_content_id(1);

    
    $data['course'] = new Course();
    $data['course']->course_id = $data['data_course']['CourseId'];
    $data['course']->course_title = $data['data_course']['CourseTitle'];
    $data['course']->course_avatar = $data['data_course']['CourseAvatar'];
    $data['course']->course_desc = $data['data_course']['CourseDesc'];
    $data['course']->course_detail = $data['data_course']['CourseDetail'];
    $data['course']->course_alias = $data['data_course']['CourseAlias'];
    $data['course']->course_price = $data['data_course']['CoursePrice'];
    
    foreach($data['data_table_of_content'] as $data_chapter){
        $chapter = new Chapter();
        $chapter->chapter_order = (int)$data_chapter['Order'];
        $chapter->chapter_title = $data_chapter['TableOfContentTitle'];
        
        $data_lst_lesson = get_lesson_by_table_of_content_id($data_chapter['TableOfContentId']);
        foreach($data_lst_lesson as $data_lesson){
            $lesson = new Lesson();
            $lesson->lesson_id = $data_lesson['LessonId'];
            $lesson->lesson_detail = $data_lesson['LessonDetail'];
            $lesson->lesson_title = $data_lesson['LessonTitle'];
            $lesson->lesson_video = $data_lesson['LessonVideo'];
            
            $chapter->addLesson($lesson);
        }
        
        $data['course']->addChapter($chapter);
    }
    
    load_view('detail', $data);
    
}

function getInfoLessonAction() {
    $lesson_id = $_POST['lesson_id'];
    $data_lesson = get_lesson_by_id($lesson_id);
    
    echo json_encode($data_lesson);
}
