<?php
class Lesson{
    public $lesson_title = '';
    public $order = 0;
    public $desc = '';
    public $path_video = '';
}

class Chapter{
    public $chapter_title = '';
    public $list_lesson = array();
    
}

class Course{
    public $course_title = '';
    public $list_chapter = array();
    
    public function addChapter($chapter){
        array_push($this->list_chapter, $chapter);
    }
}