<?php
class Lesson{
    public $lesson_id = 0;
    public $lesson_title = '';
    public $lesson_order = 0;
    public $lesson_detail = '';
    public $lesson_video = '';  
}

class Chapter{
    public $chapter_id = 0;
    public $chapter_title = '';
    public $chapter_order = 0;
    
    public $list_lesson = array();
    public function addLesson($lesson){
        array_push($this->list_lesson, $lesson);
    }  
}

class Course{
    public $course_id = '';
    public $course_avatar = '';
    public $course_title = '';
    public $course_alias = '';
    public $course_desc = '';
    public $course_detail = '';
    public $course_price = 0;
    public $course_created_by = '';
    public $course_created_date = '';
    public $course_modified_by = '';
    public $course_modified_date = '';


    public $list_chapter = array();
    
    public function addChapter($chapter){
        array_push($this->list_chapter, $chapter);
    }
}