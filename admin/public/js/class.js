class Lesson{   
    constructor(lesson_title, order, desc, path_video) {
       this.lesson_title = lesson_title;
       this.order = order;
       this.desc = desc;
       this.path_video = path_video;
    }
}

class Chapter{
    constructor(chapter_id, chapter_order, chapter_title, list_lesson) {
        this.chapter_id = chapter_id;
        this.chapter_order = chapter_order;
        this.chapter_title = chapter_title;
        this.list_lesson = list_lesson;
    }
}
class Course{
    constructor(course_id, course_title, list_chapter, course_desc, course_detail, course_avatar) {
       this.course_id = course_id,
       this.course_title = course_title;
       this.list_chapter = list_chapter;
       this.course_avatar = course_avatar;
       this.course_desc = course_desc;
       this.course_detail = course_detail;
    }
}


