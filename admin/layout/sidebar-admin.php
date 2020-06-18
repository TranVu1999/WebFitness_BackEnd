<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="index.html"> <img src="public/img/dashboard/greendash-logo.png" alt="logo"> </a>
        </div>

        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                    <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
                </a>
                <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                    <li> <a href="index.html"><i class="fa fa-chevron-right"></i>Greendash</a> </li>
                </ul>
            </li>
            <!-- /Dashboard -->

            <!-- Order Page Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#order-page" aria-expanded="false" aria-controls="order-page">
                    <span><i class="fas fa-clipboard-list"></i>Order</span>
                </a>
                <ul id="order-page" class="collapse" aria-labelledby="order-page" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="pages/order/order-status.html"><i class="fa fa-chevron-right"></i>Order Status</a> 
                    </li>

                </ul>
            </li>
            <!-- /order page -->

            <!-- Product Page Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product-page" aria-expanded="false" aria-controls="product-page">
                    <span><i class="fas fa-cannabis"></i>Products</span>
                </a>
                <ul id="product-page" class="collapse" aria-labelledby="product-page" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="product-list.html"><i class="fa fa-chevron-right"></i>Products-list</a> 
                    </li>
                    <li class="new"> 
                        <a href="product-new.html"><i class="fa fa-chevron-right"></i>Products-new</a> 
                        <span class="label">10</span>
                    </li>
                    <li class="new"> 
                        <a href="product-delete.html"><i class="fa fa-chevron-right"></i>Cancel Products</a> 
                        <span class="label">10</span>
                    </li>
                    <li> 
                        <a href="product-add.html"><i class="fa fa-chevron-right"></i>Add Product</a> 
                    </li>
                </ul>
            </li>
            <!-- /Product page -->

            <!-- Post Page Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#post-page" aria-expanded="false" aria-controls="post-page">
                    <span><i class="fas fa-cannabis"></i>Posts</span>
                </a>
                <ul id="post-page" class="collapse" aria-labelledby="post-page" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="post-list.html"><i class="fa fa-chevron-right"></i>Posts-list</a> 
                    </li>
                    <li class="new"> 
                        <a href="post-new.html"><i class="fa fa-chevron-right"></i>Posts-new</a> 
                        <span class="label">10</span>
                    </li>
                    <li class="new"> 
                        <a href="post-delete.html"><i class="fa fa-chevron-right"></i>Cancel Posts</a> 
                        <span class="label">10</span>
                    </li>
                    <li> 
                        <a href="post-add.html"><i class="fa fa-chevron-right"></i>Add Post</a> 
                    </li>
                </ul>
            </li>
            <!-- /Post page -->

            <!---Customer Page Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer">
                    <span><i class="fas fa-users"></i>Customers</span>
                </a>
                <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="customer-list.html"><i class="fa fa-chevron-right"></i>Customers-list</a> 
                    </li>
                    <li> 
                        <a href="customer-review.html"><i class="fa fa-chevron-right"></i>Reviwes</a> 
                    </li>
                    <li> 
                        <a href="customer-delete.html"><i class="fa fa-chevron-right"></i>Customer Cancel</a> 
                    </li>
                </ul>
            </li>
            <!-- /Customer page -->

            <!---Personal Trainer Page Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#personal-trainer" aria-expanded="false" aria-controls="personal-trainer">
                    <span><i class="fas fa-users"></i>Personal Trainer</span>
                </a>
                <ul id="personal-trainer" class="collapse" aria-labelledby="personal-trainer" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="pt-list.html"><i class="fa fa-chevron-right"></i>PT List</a> 
                    </li>
                    <li class="new"> 
                        <a href="product-new.html"><i class="fa fa-chevron-right"></i>PT New</a>
                        <span class="label">10</span> 
                    </li>
                    <li class="new"> 
                        <a href=""><i class="fa fa-chevron-right"></i>Cancel PT</a>
                        <span class="label">10</span> 
                    </li>
                    <li> 
                        <a href="pt-add.html"><i class="fa fa-chevron-right"></i>Add PT</a> 
                    </li>
                </ul>
            </li>
            <!-- /Persional Trainer page -->

            <!-- Invoice -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice">
                    <span><i class="fas fa-receipt"></i>Invoice</span>
                </a>
                <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="invoice-list.html"><i class="fa fa-chevron-right"></i>Invoice List</a> 
                    </li>
                    <li> 
                        <a href="invoice-new.html"><i class="fa fa-chevron-right"></i>Invoice New</a> 
                    </li>
                    <li> 
                        <a href="invoice-delete.html"><i class="fa fa-chevron-right"></i>Cancel Invoice</a> 
                    </li>
                </ul>
            </li>
            <!-- /Invoice -->

            <!-- Tag -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tag" aria-expanded="false" aria-controls="tag">
                    <span><i class="fa fa-tags"></i>Tag</span>
                </a>
                <ul id="tag" class="collapse" aria-labelledby="tag" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="tag-list.html"><i class="fa fa-chevron-right"></i>Tag List</a> 
                    </li>
                    <li> 
                        <a href="tag-new.html"><i class="fa fa-chevron-right"></i>Tag New</a> 
                    </li>
                    <li> 
                        <a href="tag-delete.html"><i class="fa fa-chevron-right"></i>Cancel Tag</a> 
                    </li>
                    <li> 
                        <a href="tag-add.html"><i class="fa fa-chevron-right"></i>Add Tag</a> 
                    </li>
                </ul>
            </li>
            <!-- /Tag -->

            <!-- Banner -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#banner" aria-expanded="false" aria-controls="banner">
                    <span><i class="fa fa-image"></i></i>Banner</span>
                </a>
                <ul id="banner" class="collapse" aria-labelledby="banner" data-parent="#side-nav-accordion">
                    <li> 
                        <a href="banner-list.html"><i class="fa fa-chevron-right"></i>Banner List</a> 
                    </li>
                    <li> 
                        <a href="banner-new.html"><i class="fa fa-chevron-right"></i>Banner New</a> 
                    </li>
                    <li> 
                        <a href="banner-delete.html"><i class="fa fa-chevron-right"></i>Cancel Banner</a> 
                    </li>
                    <li> 
                        <a href="banner-add.html"><i class="fa fa-chevron-right"></i>Add Banner</a> 
                    </li>
                </ul>
            </li>
            <!-- /Banner -->
            
            <!-- App -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
                    <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
                </a>
                <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                    <li> <a href="chat-box.html">Chat</a> </li>
                    <li> <a href="email.html">Email</a> </li>
                    <li> <a href="to-do-list.html">To-do List</a> </li>
                </ul>
            </li>
            <!-- /App -->
        </ul>
    </aside>

