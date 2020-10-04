<?php include('header.php');?>
<style>

</style>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                              
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Exam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Exam List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><button type="button" class="btn btn-primary">Add Exam</button></a></li>
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th>Thumbnail</th>
                                            <th>Exam</th>
                                            <th>Course</th>                                    
                                            <th>Lession</th>                                            
                                            <th>Questions</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                        <td>
                                            <img class="rounded" src="../assets/images/xs/avatar1.jpg" alt="Avatar">
                                            </td>
                                            <td>
                                
                                                <p class="c_name">Financial Management Exam One</p>
                                            </td>
                                            <td>
                                                <span>Financial Management</span>
                                            </td>      
                                            <td>
                                                <span>Ratio Analysis</span>
                                            </td>      
                                            <td>
                                                <span>20</span>
                                            </td>
                                            <td>
                                                <span>Premium</span>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                            <a href="add-question.php"><button type="button" data-type="confirm" class="btn btn-primary" title="Add Questions"><i class="fa fa-plus"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-primary" title="Inactive"><i class="fa fa-times-circle"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <img class="rounded" src="../assets/images/xs/avatar1.jpg" alt="Avatar">
                                            </td>
                                            <td>
                                
                                                <p class="c_name">Debtors Management Exam One</p>
                                            </td>
                                            <td>
                                                <span>Financial Management</span>
                                            </td>      
                                            <td>
                                                <span>Debtors Management</span>
                                            </td>      
                                            <td>
                                                <span>20</span>
                                            </td>
                                            <td>
                                                <span>Basic</span>
                                            </td>
                                            <td><span class="badge badge-danger">Inactive</span></td>
                                            <td>
                                             <a href="add-question.php"><button type="button" data-type="confirm" class="btn btn-primary" title="Add Questions"><i class="fa fa-plus"></i></button></a>
                                            <button type="button" data-type="confirm" class="btn btn-primary" title="Active"><i class="fa fa-check-square-o"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-primary" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Default Size -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Exam</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Exam Name">
                        </div>
                    </div>
                 
                    <div class="col-12">
                        <div class="form-group">                                    
                        <select name="multiselect1" class="form-control">
                                            <option selected>Select Course</option>
                                            <option value="cheese">Course 1</option>
                                            <option value="tomatoes">Course 2</option>
                                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                        <select name="multiselect1" class="form-control">
                                            <option selected>Select Lession</option>
                                            <option value="cheese">Lession 1</option>
                                            <option value="tomatoes">Lession 2</option>
                                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                    
                        <select name="multiselect1" class="form-control">
                                            <option selected>Select Type</option>
                                            <option value="cheese">Basic</option>
                                            <option value="tomatoes">Premium</option>
                                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                            
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Max 2MB</small>
                        </div>
                        
                    </div>
            
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php include('js.php');?>
</body>
</html>
