class Lesson{   
    constructor(lesson_id, lesson_title, order, desc, path_video) {
        this.lesson_id = lesson_id;
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

class ProductCate{   
    constructor(pro_cate_id, pro_cate_title, pro_cate_avatar, pro_cate_desc) {
        this.pro_cate_id = pro_cate_id;
        this.pro_cate_title = pro_cate_title;
        this.pro_cate_avatar = pro_cate_avatar;
        this.pro_cate_desc = pro_cate_desc;
    }
}

class Banner{   
    constructor(banner_id, banner_url, banner_address) {
        this.banner_id = banner_id;
        this.banner_url = banner_url;
        this.banner_address = banner_address;
    }
}

class ProductAttr{
    constructor(product_color, product_size, product_amount, lst_product_img) {
        this.product_color = product_color;
        this.product_size = product_size;
        this.product_amount = product_amount;
        this.lst_product_img = lst_product_img;
    }
}

class Product{
    constructor(product_title, product_alias, product_cate, product_desc, product_status, 
    product_detail, product_avatar, product_attr, product_price, product_promo) {
        this.product_title = product_title;
        this.product_alias = product_alias;
        this.product_cate = product_cate;
        this.product_desc = product_desc;
        this.product_status = product_status;
        this.product_detail = product_detail;
        this.product_avatar = product_avatar;
        this.product_attr = product_attr;
        this.product_price = product_price;
        this.product_promo =  product_promo;
    }
}

class PtSkill{   
    constructor(pt_skill_id, pt_skill_title, pt_skill_val) {
        this.pt_skill_id = pt_skill_id;
        this.pt_skill_title = pt_skill_title;
        this.pt_skill_val = pt_skill_val;
    }
}

class Pt{   
    constructor(pt_id, pt_name, pt_alias, pt_avatar, pt_sex, pt_birthday, pt_about, pt_experience, pt_skill, pt_timeline, pt_contact) {
        this.pt_id = pt_id;
        this.pt_name = pt_name;
        this.pt_alias = pt_alias;
        this.pt_avatar = pt_avatar;
        this.pt_sex = pt_sex;
        this.pt_birthday = pt_birthday;
        this.pt_about = pt_about;
        this.pt_experience = pt_experience;
        this.pt_skill =  pt_skill;
        this.pt_timeline = pt_timeline;
        this.pt_contact = pt_contact;
    }
}

class PtTimeline{
    constructor(pt_timeline_id, pt_timeline_title, pt_timeline_desc, pt_timeline_time) {
        this.pt_timeline_id = pt_timeline_id;
        this.pt_timeline_title = pt_timeline_title;
        this.pt_timeline_desc = pt_timeline_desc;
        this.pt_timeline_time = pt_timeline_time;
    }
}

class PtContact{
    constructor(contact_title, contact_value) {
        this.contact_title = contact_title;
        this.contact_value = contact_value;
    }
}




