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


