<?php include('header.php');?>

    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog Details</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="blog-top d-flex clearfix">
                                <div class="short-name">
                                    <span>JD</span>
                                </div>
                                <h4 class="name">John Doe</h4>
                                <h5 class="time">2h</h5>
                            </div>
                            <h3><a href="blog-details.php">All photographs are accurate</a></h3>
                            <div class="img-post">
                                <img class="d-block img-fluid" src="../assets/images/blog/blog-page-1.jpg" alt="First slide">
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Categories Clouds</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                                <li><a href="javascript:void(0);">eCommerce</a></li>
                                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                <li><a href="javascript:void(0);">Creative UX</a></li>
                                <li><a href="javascript:void(0);">Wordpress</a></li>
                                <li><a href="javascript:void(0);">Angular JS</a></li>
                                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                <li><a href="javascript:void(0);">Website Design</a></li>
                                <li><a href="javascript:void(0);">HTML5</a></li>
                                <li><a href="javascript:void(0);">Infographics</a></li>
                                <li><a href="javascript:void(0);">Wordpress Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post border-bottom mb-4">
                                        <div class="blog-top d-flex clearfix">
                                            <div class="short-name">
                                                <span>JD</span>
                                            </div>
                                            <h4 class="name">John Doe</h4>
                                            <h5 class="time">2h</h5>
                                        </div>
                                        <p class="font-weight-bold mb-0">Apple Introduces Search Ads Basic</p>
                                        <span class="mb-2 d-block">jun 22, 2018</span>
                                        <div class="img-post">
                                            <img src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                    <div class="single_post">
                                        <div class="blog-top d-flex clearfix">
                                            <div class="short-name">
                                                <span>JD</span>
                                            </div>
                                            <h4 class="name">John Doe</h4>
                                            <h5 class="time">2h</h5>
                                        </div>
                                        <p class="font-weight-bold mb-0">Apple Introduces Search Ads Basic</p>
                                        <span class="mb-2 d-block">jun 22, 2018</span>
                                        <div class="img-post">
                                            <img src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>
<?php include('js.php');?>
</body>
</html>
