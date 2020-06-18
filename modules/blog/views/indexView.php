<?php
get_header('page');
?>

<?php
$count_post = count($lst_post);
$count_tag = $count_post / 3;
if ($count_post % 3 > 0) {
    $count_tag++;
}

echo "<pre>";
print_r($lst_por)
?>

<section class="blog-main">
    <div class="blog-content-info">
        <div class="widget">
            <div class="blog-grids">
                <div class="blog-left">
                    <ul class="lst-blog">
                        <?php
                        for ($itag = 1; $itag <= $count_tag; $itag++) {
                            ?>
                            <li>
                                <?php
                                $i = ($itag - 1) * 3;
                                for ($i; $i < $itag * 3 && $i < $count_post; $i++) {
                                    ?>
                                    <div class="blog">
                                        <div class="image-box">
                                            <a href="<?= "list-post/" ?><?= $post_type_alias ?>/<?= $lst_post[$i]['Alias'] ?>-<?= $lst_post[$i]['Id'] ?>.html">
                                                <img class="img-responsive" src="<?= $lst_post[$i]['Avatar'] ?>" alt="hny-image">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h4> 
                                                <a href="blog-single.html"><?= $lst_post[$i]['Title'] ?></a>
                                            </h4>
                                            <ul class="blog-sing">
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-user" aria-hidden="true"></span>by
                                                        Admin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-heart-o" aria-hidden="true"></span>6
                                                        Likes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-commenting-o" aria-hidden="true"></span>9
                                                        Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <p><?= substr($lst_post[$i]['Content'], 0, strpos($lst_post[$i]['Content'], '</p>', 0)) ?></p>
                                            <a href="<?= "list-post/" ?><?= $post_type_alias ?>/<?= $lst_post[$i]['Alias'] ?>-<?= $lst_post[$i]['Id'] ?>.html" class="read-2 btn">Read More</a>
                                        </div>
                                    </div>

                                    <?php
                                }
                                ?>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>

                    <div class="pagination-blog">
                        <ul class="pagination modalhny">
                            <li>
                                <a href="#" class="prev">Previous</a>
                            </li>
                            <li>
                                <a href="#" class="active">1</a>
                            </li>
                            <?php
                            for ($i = 2; $i <= $count_tag; $i++) {
                                ?>
                                <li>
                                    <a href="#"><?= $i ?></a>
                                </li>
                                <?php
                            }
                            ?>
                            <li>
                                <a href="#" class="next">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blog-right">
                    <input type="checkbox" id="check-blog-sub" >
                    <div class="sidebar-recent blog-subscribe">
                        <h4 class="side-title">Sign up to our newsletter</h4>
                        <form action="">
                            <input class="form-control" type="email" placeholder="Email here" required="">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p>subscribe now for updates (no spam)</p>
                    </div>

                    <input type="checkbox" id="blog-cate" >
                    <div class="sidebar-recent blog-cate">
                        <h4 class="side-title">Categories</h4>
                        <ul class="cate-list">
                            <li><a href="#url">Aliquam erat volutpat</a></li>
                            <li><a href="#url">Integer rutrum ante eu lacus</a></li>
                            <li><a href="#url">Cum sociis natoque penatibus</a></li>
                            <li><a href="#url">Mauris fermentum dictum magna</a></li>
                            <li><a href="#url">Sed laoreet aliquam leo</a></li>
                            <li><a href="#url">Cum sociis natoque penatibus</a></li>
                        </ul>
                    </div>

                    <input type="checkbox" id="late-post" >
                    <div class="sidebar-recent late-post">
                        <h4 class="side-title">Latest Posts</h4>
                        <div class="side-bar-recent-grids">
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="">
                                        <img src="public/images/grid1.jpg" alt=" " class="img-responsive">
                                    </a>
                                </div>
                                <div class="recent-right">
                                    <h4 style="margin: 0;"><a href="blog-blog-single.html">Post title one</a></h4>
                                    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor.</p>
                                </div>	
                            </div>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="">
                                        <img src="public/images/grid3.jpg" alt=" " class="img-responsive">
                                    </a>
                                </div>
                                <div class="recent-right">
                                    <h4 style="margin: 0;"><a href="blog-blog-single.html">Post title two</a></h4>
                                    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor.</p>
                                </div>	
                            </div>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="">
                                        <img src="public/images/grid2.jpg" alt=" " class="img-responsive">
                                    </a>
                                </div>
                                <div class="recent-right">
                                    <h4 style="margin: 0;"><a href="blog-blog-single.html">Post title three</a></h4>
                                    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor.</p>
                                </div>	
                            </div>
                        </div>
                    </div>

                    <input type="checkbox" id="lst-tag" >
                    <div class="sidebar-recent footer-grids lst-tag">
                        <h4 class="side-title">Tags</h4>
                        <ul class="tags">
                            <li><a href="#url" class="fs-1">Gym</a></li>
                            <li><a href="#url" class="fs-2">Fitness</a></li>
                            <li><a href="#url" class="fs-6">HTML5</a></li>
                            <li><a href="#url" class="fs-3">Yoga</a></li>
                            <li><a href="#url" class="fs-4">css</a></li>
                            <li><a href="#url" class="fs-5">Webdesign</a></li>
                            <li><a href="#url" class="fs-6">Furniture</a></li>
                            <li><a href="#url" class="fs-7">html</a></li>
                            <li><a href="#url" class="fs-1">awesome</a></li>
                            <li><a href="#url" class="fs-2">Zumba</a></li>
                            <li><a href="#url" class="fs-7">Cross Fit</a></li>
                            <li><a href="#url" class="fs-5">Sports</a></li>
                            <li><a href="#url" class="fs-3">Fit</a></li>
                            <li><a href="#url" class="fs-4">Responsive</a></li>
                            <li><a href="#url" class="fs-1">Apt Pro</a></li>
                            <li><a href="#url" class="fs-3">html</a></li>
                            <li><a href="#url" class="fs-6">awesome</a></li>
                            <li><a href="#url" class="fs-1">Zumba</a></li>
                            <li><a href="#url" class="fs-2">Cross Fit</a></li>
                        </ul>
                    </div>

                    <input type="checkbox" id="lst-inst" >
                    <div class="sidebar-recent lst-inst">
                        <h4 class="side-title">Instagram Feed</h4>
                        <div class="grids-pict">
                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid1.jpg" alt="" class="img-responsive"></a>
                            </div>

                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid2.jpg" alt="" class="img-responsive"></a>
                            </div>

                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid3.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid4.jpg" alt="" class="img-responsive"></a>
                            </div>

                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid5.jpg" alt="" class="img-responsive"></a>
                            </div>

                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid6.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid3.jpg" alt="" class="img-responsive"></a>
                            </div>

                            <div class="">
                                <a href="blog-blog-single.html"><img src="public/images/grid2.jpg" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-resp-tag">
                    <ul>
                        <li>
                            <label for="check-blog-sub">Blog Subcribe</label>
                        </li>
                        <li>
                            <label for="blog-cate">Blog Categories</label>
                        </li>
                        <li>
                            <label for="late-post">Latest Post</label>
                        </li>
                        <li>
                            <label for="lst-tag">List Tags</label>
                        </li>

                        <li>
                            <label for="lst-inst">List Instagram</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script>
        $('ul.lst-blog>li').eq(0).addClass('active_post');
        
        $('.btn-resp-tag ul li label').click(function () {
            $(this).toggleClass("active");
        });
        
        $('.pagination-blog ul li a').click(function (e) {
            e.preventDefault();
            var length = $('.pagination-blog ul li').length;
            var index = $('.pagination-blog ul li a.active').parent().index();
//            alert(length);
            if ($(this).hasClass('next') || $(this).hasClass('prev')) {
                if ($(this).hasClass('next')) {
                    if (index < length - 2) {
                        $('.pagination-blog ul li').eq(index + 1).children('a').addClass('active');
                    } else {
                        $('.pagination-blog ul li').eq(1).children('a').addClass('active');
                    }
                    $('.pagination-blog ul li').eq(index).children('a').removeClass('active');
                } else {
                    if (index > 1) {
                        $('.pagination-blog ul li').eq(index - 1).children('a').addClass('active');
                    } else {
                        $('.pagination-blog ul li').eq(length - 2).children('a').addClass('active');
                    }
                    $('.pagination-blog ul li').eq(index).children('a').removeClass('active');
                }
            } else {
                $('.pagination-blog ul li a').removeClass('active');
                $(this).addClass('active');
            }
            
            var $index_active = $('.pagination-blog ul li a.active').parent().index() - 1;
            $('.lst-blog>li').removeClass('active_post');
            $('.lst-blog>li').eq($index_active).addClass('active_post');
        });


    </script>
</section>

<?php
get_footer();
?>