<?php include('header.php');?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Inbox</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix mail-inbox">
                <div class="col-lg-3 col-md-4">
                    <div class="card">
                        <div class="mobile-left">
                            <a class="btn btn-primary toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                                <span class="btn-label">
                                    <i class="la la-bars"></i>
                                </span>
                                Menu
                            </a>
                        </div>
                        <div class="mail-left collapse" id="email-nav">
                            <div class="mail-compose m-b-20">
                                <a href="mail-composor.php" class="btn btn-danger btn-block">Compose</a>
                            </div>
                            <div class="mail-side">
                                <ul class="nav">
                                    <li class="active"><a href="javascript:void(0);"><i class="icon-envelope"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent</a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft<span class="badge badge-info float-right">3</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-star"></i>Starred<span class="badge badge-warning float-right">6</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash<span class="badge badge-danger float-right">9</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="card">
                        <div class="mail-right">
                            <div class="header d-flex align-center">
                                <h2>Inbox</h2>
                                <form class="ml-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="mail-action clearfix">
                                <div class="pull-left">
                                    <div class="fancy-checkbox d-inline-block">
                                        <label>
                                            <input class="select-all" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="btn-group">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right ml-auto">
                                    <div class="pagination-email d-flex">
                                        <p>1-50/295</p>
                                        <div class="btn-group m-l-20">
                                            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-angle-left"></i></button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-list">
                                <ul class="list-unstyled">
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                            <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Herman Beck</a></h6>
                                            <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            <span class="time">23 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Mary Adams</a></h6>
                                            <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                            <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix unread">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">June Lane</a></h6>
                                            <p class="dep"><span class="m-r-10">[Support]</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <span class="time">20 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Gary Camara</a></h6>
                                            <p class="dep"><span class="m-r-10">[CSS]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                            <span class="time">14 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Frank Camly</a></h6>
                                            <p class="dep"><span class="m-r-10">[thememakker]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Gary Camara</a></h6>
                                            <p class="dep"><span class="m-r-10">[Awwwards]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                            <span class="time">29 May</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mail-detail-full" id="mail-detail-open" style="display: none;">
                                <div class="mail-action clearfix">
                                    <div class="pull-left">
                                        <div class="fancy-checkbox d-inline-block">
                                            <label>
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm hidden-sm">Refresh</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm">Trash</a>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as read</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as unread</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right ml-auto">
                                        <a href="javascript:void(0);" class="mail-back btn btn-outline-secondary btn-sm"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
                                <div class="detail-header">
                                    <div class="media">
                                        <div class="float-left">
                                            <div class="m-r-20"><img src="../assets/images/sm/avatar1.jpg" class="rounded" alt=""></div>
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-0"><strong class="text-muted m-r-5">From:</strong><a class="text-default" href="javascript:void(0);">info@thememakker.com</a> <span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                            <p class="mb-0"><strong class="text-muted m-r-5">To:</strong>Me <small class="text-muted float-right"><i class="fa fa-attachment m-r-5"></i>(2 files, 89.2 KB)</small></p>
                                            <p class="mb-0"><strong class="text-muted m-r-5">CC:</strong><a class="text-default" href="javascript:void(0);">mail@thememakker.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-cnt">
                                    <p>Hello,</p><br>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <ul>
                                        <li>printing and typesetting industry.</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy</li>
                                        <li>dummy text of the printing and typesetting</li>
                                    </ul>
                                    <br>
                                    <h6>Thank you!</h6>
                                    <hr>
                                    <strong>Click here to</strong>
                                    <a href="mail-composor.php">Reply</a>
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