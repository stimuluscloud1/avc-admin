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
                      
                            <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Question</label>
                                <textarea name="address" cols="30" rows="3" placeholder="Write Question *" class="form-control no-resize"></textarea>
                            </div>
                            </div>

                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Choice One</label>
                            <input type="text" class="form-control" placeholder="Enter choice one" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Choice Two</label>
                            <input type="text" class="form-control" placeholder="Enter choice two" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Choice Three</label>
                            <input type="text" class="form-control" placeholder="Enter choice three" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Choice Four</label>
                            <input type="text" class="form-control" placeholder="Enter choice four" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Answer One</label>
                            <input type="text" class="form-control" placeholder="Enter answer one" />
                        </div>
                            </div>                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Answer Two</label>
                            <input type="text" class="form-control" placeholder="Enter answer two" />
                        </div>
                            </div>
                            <div class="col-lg-3  m-t-20 m-b-20">
                            <div class="form-group">
                            <label for="title">Select Topic</label>
                            <select name="multiselect1" class="form-control">
                                            <option selected>Select Topic</option>
                                            <option value="cheese">Topic 1</option>
                                            <option value="tomatoes">Topic 2</option>
                                            <option value="mozarella">Topic 3</option>
                                            <option value="mozarella">Topic 4</option>
                                        </select>
                        </div>
                            </div>
                         
                    
                        </div>
            
                       
                        <button type="button" class="btn btn-block btn-primary   m-t-20">Add</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 
        <div class="container-fluid">            
            <div class="row clearfix" style="display: none;">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Questions</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="default-table" class="table table-striped">
                                    <thead>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table id="handle-table" class="table table-striped">
                                    <thead>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                        <button class="btn btn-primary" style="float: right;">Import Questions</button>

                            <h2>Multiple Choice Question</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="only-bodytable" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Question</th>
                                        <th>Topic</th>
                                        <th>Choice One</th>
                                        <th>Choice Two</th>
                                        <th>Choice Three</th>
                                        <th>Choice Four</th>
                                        <th>Answer One</th>
                                        <th>Answer Two</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td><i class="table-dragger-handle sindu_handle"></i> Which of the following is not a characteristic of wholesale markets?</td>
                                        <td>Topic</td>
                                        <td>Firms deal with other firms.</td>
                                        <td>Lending and borrowing is coordinated through banks.</td>
                                        <td>Borrowing and lending is not intermediated.</td>
                                        <td>Very large quantities of money are at stake.</td>
                                        <td>Answer One</td>
                                        <td>Answer Two</td>
                                        <td>                                            
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Inactive"><i class="fa fa-times-circle"></i></button>
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>
                                    <tr>
                                    <td><i class="table-dragger-handle sindu_handle"></i> Which of the following is not a characteristic of wholesale markets?</td>
                                        <td>Topic</td>
                                        <td>Firms deal with other firms.</td>
                                        <td>Lending and borrowing is coordinated through banks.</td>
                                        <td>Borrowing and lending is not intermediated.</td>
                                        <td>Very large quantities of money are at stake.</td>
                                        <td>Answer One</td>
                                        <td>Answer Two</td>
                                        <td>                                            
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Inactive"><i class="fa fa-times-circle"></i></button>
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>
                                    <tr>
                                    <td><i class="table-dragger-handle sindu_handle"></i> Which of the following is not a characteristic of wholesale markets?</td>
                                        <td>Topic</td>
                                        <td>Firms deal with other firms.</td>
                                        <td>Lending and borrowing is coordinated through banks.</td>
                                        <td>Borrowing and lending is not intermediated.</td>
                                        <td>Very large quantities of money are at stake.</td>
                                        <td>Answer One</td>
                                        <td>Answer Two</td>
                                        <td>                                            
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Inactive"><i class="fa fa-times-circle"></i></button>
                                        <button type="button" data-type="confirm" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            
            <div class="row clearfix" style="display: none;">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table id="row-table" class="table table-striped">
                                    <thead>
                                    
                                    </thead>
                                 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                     
                        <div class="body">
                            <div class="table-responsive">
                                <table id="free-table" class="table table-striped">
                                    <thead>
                                   
                                    </thead>
                                  
                                </table>
                            </div>
                        </div>
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
<script>
    // Default
    tableDragger(document.querySelector("#default-table"));

    // Handler
    tableDragger(document.querySelector("#handle-table"), { dragHandler: ".handle" });

    // Sort Rows
    tableDragger(document.querySelector("#row-table"), { mode: "row" });

    // Free
    tableDragger(document.querySelector("#free-table"), { mode: "row", onlyBody: true, dragHandler: ".handle" });

    // Only Body
    tableDragger(document.querySelector("#only-bodytable"), { mode: "row", onlyBody: true });
</script>
</body>

</html>