<?php
get_header('page');
?>

<?php
//    echo $post_id;
?>

<section class="blog-main">
    <div class="blog-content-info">
        <div class="widget">
            <div class="blog-grids">
                <div class="blog-left">
                    <div class="blog">
                        <div class="image-box">
                            <a href="blog-single.html">
                                <img class="img-responsive" src="<?=$post_detail['Avatar']?>" alt="hny-image">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h4> 
                                <a href="blog-single.html"><?= $post_detail['Title'] ?></a>
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
                            <?= $post_detail['Content'] ?>
                        </div>

                        <?php
                        if (!isset($lst_ask)) {
                            ?>
                            <div class="accordion">
                                <h2 class="accordion_title">Frequently Asked Questions</h2>

                                <div class="lst-accordion">
                                    <?php
                                    foreach ($lst_ask as $item) {
                                        ?>
                                        <div class="accordion-item">
                                            <a href="#" class="accordion-title plain">
                                                <button class="toggle">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <span><?= $item['Ask'] ?></span>
                                            </a>
                                            <div class="accordion-inner">
                                                <p>
                                                    <span style="font-weight: 400"><?= $item['Answer'] ?></span>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <ul class="share">
                            <li>
                                <b>Share This Post : </b>
                            </li>
                            <li>
                                <a href="#facebook" class="facebook" title="Facebook">
                                    <span class="fa fa-facebook sharefacebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#twitter" class="twitter" title="Twitter">
                                    <span class="fa fa-twitter sharetwitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#googeleplus" class="oogleplus" title="Google Plus">
                                    <span class="fa fa-google-plus sharegoogleplus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog">
                        <div class="coments">
                            <h3 class="aside-title">Comments</h3>
                            <div class="coment-grids">
                                <div class="post_comment">
                                    <img class="img-responsive" src="public/images/c1.jpg" alt="placeholder image">
                                    <div class="comment-right">
                                        <h4>John Smith</h4>
                                        <p class="date">Nov 22, 2019</p>
                                        <p class="comment-content">Quis nostrud exercitation ullamco laboris Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim. Sed ultricies nec purus quis tempor. Phasellus bibendum eu nec purus quis tempor.</p>
                                        <a href="#comment" class="reply btn">Reply</a>
                                    </div>
                                </div>

                                <div class="post_comment">
                                    <img src="public/images/c2.jpg" alt="placeholder image" class="img-responsive">
                                    <div class="comment-right">
                                        <h4>Jackson</h4>
                                        <p class="date">Dec 18, 2019</p>
                                        <p class="comment-content">Quis nostrud exercitation ullamco laboris Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim. Sed ultricies nec purus quis tempor. Phasellus bibendum eu nec purus quis tempor.</p>
                                        <a href="#comment" class="reply btn">Reply</a>
                                    </div>
                                </div>

                                <div class="post_comment">
                                    <img class="img-responsive" src="public/images/c3.jpg" alt="placeholder image">
                                    <div class="comment-right">
                                        <h4>Lucas</h4>
                                        <p class="date">Jan 05, 2020</p>
                                        <p class="comment-content">Quis nostrud exercitation ullamco laboris Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim. Sed ultricies nec purus quis tempor. Phasellus bibendum eu nec purus quis tempor.</p>
                                        <a href="#comment" class="reply btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="comment" id="comment">
                            <h3 class="aside-title">Comments</h3>
                            <p class="msg">Your email address will not be published. Required fields are marked *
                            </p>
                            <div class="comment-form">
                                <form action="">
                                    <textarea class="form-control" name="Message" placeholder="Comment"></textarea>
                                    <input class="form-control" type="text" name="Name" placeholder="Name*" required="">
                                    <input class="form-control" type="email" name="Email" placeholder="Email*" required="">
                                    <button type="submit" class="btn submit theme-button">Post Comment</button>
                                </form>
                            </div>
                        </div>
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
        $('.btn-resp-tag ul li label').click(function () {
            $(this).toggleClass("active");
        });
    </script>
    <script>
        $('.accordion .accordion-item a').click(function (event) {
            event.preventDefault();
            var parentEle = $(this).parent();
            $(this).parent().toggleClass("active");

            if (parentEle.hasClass("active")) {
                parentEle.children('.active .accordion-inner').css('display', 'block');
            } else {
                parentEle.children('.accordion-inner').css('display', 'none');
            }

        });
    </script>
</section>

<?php
get_footer();
?>