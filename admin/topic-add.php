<?php include('header.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Add Course</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Course</li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-2  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title here" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Select Topic</label>
                            <select name="multiselect1" class="form-control">
                                            <option selected>Select Category</option>
                                            <option value="cheese">Finance</option>
                                            <option value="tomatoes">Accounts</option>
                                            <option value="mozarella">Costing</option>
                                            <option value="mozarella">Accounting Standards</option>
                                        </select>
                        </div>
                            </div>

                            <div class="col-lg-3">
                            <div class="form-group m-t-20 m-b-20">
                            <label for="thumbnail">Upload Thumbnail</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Max 2MB File</small>
                        </div>
                            </div>
                            <div class="col-lg-2">
                            <div class="form-group m-t-20 m-b-20">
                            <label for="video">Upload video</label><br>
                            <input type="file" name="file[]" class="file_multi_video" accept="video/*">
                            <small id="fileHelp" class="form-text text-muted">Max 2MB File</small>
                        </div>
                            </div>
                            <div class="col-lg-2">
                            <div class="form-group m-t-20 m-b-20">
                            <label for="video">Video Duration</label><br>
                            <input type="time" name="file[]" class="file_multi_video" accept="video/*">
                            
                        </div>
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Short Description</label>
                                <textarea name="address" cols="30" rows="3" placeholder="Description *" class="form-control no-resize"></textarea>
                            </div>
                            </div>
                       
                        </div>
                        <div class="form-group">
                        

                            <video width="300" controls>
                                <source src="mov_bbb.mp4" id="video_here">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>


                        <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>View all topics</h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <h6 class="p-10 bg-primary text-light">Lession Name</h6>
                    <div class="accordion custom" id="accordion">
                        <div>
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Topic One
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <video width="320" height="240" controls>
                                        <source src="../assets/images/videoplayback.mp4" type="video/mp4">
                                    </video><br>
                                    <p>Duration: 6:58 Min</p>
                                    <button class="btn btn-primary" type="button">View Notes</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Topic Two
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <video width="320" height="240" controls>
                                        <source src="../assets/images/videoplayback.mp4" type="video/mp4">
                                    </video><br>
                                    <p>Duration: 6:58 Min</p>
                                    <button class="btn btn-primary" type="button">View Notes</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingsix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Topic Three
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </p>
                                    <video width="320" height="240" controls>
                                        <source src="../assets/images/videoplayback.mp4" type="video/mp4">
                                    </video><br>
                                    <p>Duration: 6:58 Min</p>
                                    <button class="btn btn-primary" type="button">View Notes</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-50"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('js.php'); ?>

<script>
    $(document).on("change", ".file_multi_video", function(evt) {
        var $source = $('#video_here');
        $source[0].src = URL.createObjectURL(this.files[0]);
        $source.parent()[0].load();
    });
</script>
</body>

</html>