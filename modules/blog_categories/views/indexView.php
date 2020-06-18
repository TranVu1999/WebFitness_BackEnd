<?php
get_header('page');
?>

<?php 
//    echo "<pre>";
//    print_r($lst_post_type);
//    echo "<pre>";
?>

<section class="gallery-main">
    <div class="gallery-inner">
        <div class="widget">
            <div class="gallery-grids">
                <div class="grid-img">
                    <?php
                    $i = 0;
                    for ($i; $i < 4; $i++) {
                        ?>
                        <div class="box9">
                            <a href="list-post/<?=$lst_post_type[$i]['Alias']?>-<?=$lst_post_type[$i]['Id']?>.html">
                                <h2><?= $lst_post_type[$i]['Title'] ?></h2>
                                <img src="<?= $lst_post_type[$i]['Avatar'] ?>" class="img-responsive" alt="/">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><span class="fa fa-search"></span></li>
                                        <li><span class="fa fa-link"></span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>


                </div>
                <div class="grid-img">
                    <?php
                    for ($i; $i < 8; $i++) {
                        ?>
                        <div class="box9">
                            <a href="list-post/<?=$lst_post_type[$i]['Alias']?>-<?=$lst_post_type[$i]['Id']?>.html">
                                <h2><?= $lst_post_type[$i]['Title'] ?></h2>
                                <img src="<?= $lst_post_type[$i]['Avatar'] ?>" class="img-responsive" alt="/">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><span class="fa fa-search"></span></li>
                                        <li><span class="fa fa-link"></span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>
                </div>
                <div class="grid-img">
                    <?php
                    for ($i; $i < 12; $i++) {
                        ?>
                        <div class="box9">
                            <a href="list-post/<?=$lst_post_type[$i]['Alias']?>-<?=$lst_post_type[$i]['Id']?>.html">
                                <h2><?= $lst_post_type[$i]['Title'] ?></h2>
                                <img src="<?= $lst_post_type[$i]['Avatar'] ?>" class="img-responsive" alt="/">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><span class="fa fa-search"></span></li>
                                        <li><span class="fa fa-link"></span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>