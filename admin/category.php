<?php include('header.php'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Category</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add</strong> Category</h2>
                    </div>
                    <div class="body">
                        <div class="col-md-12">
                            <div class="card">
                                <form id="basic-form" method="post" novalidate>
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="food">Parent Category</label>
                                        <br />
                                        <select id="multiselect1" name="multiselect1[]" class="form-control" multiple="multiple">
                                            <option selected>Select Category</option>
                                            <option value="cheese">Finance</option>
                                            <option value="tomatoes">Accounting Standards</option>
                                            <option value="mozarella">Direct Taxation</option>
                                            <option value="mushrooms">Indirect Taxation</option>
                                            <option value="pepperoni">Audit</option>
                                            <option value="onions">Strategic Management</option>
                                        </select>
                                        <p id="error-multiselect"></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Category List
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td><button type="button" class="btn btn-danger" title="Delete">
                                                <span class="sr-only">Delete</span>
                                                <i class="fa fa-trash-o"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td><button type="button" class="btn btn-danger" title="Delete">
                                                <span class="sr-only">Delete</span>
                                                <i class="fa fa-trash-o"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td><button type="button" class="btn btn-danger" title="Delete">
                                                <span class="sr-only">Delete</span>
                                                <i class="fa fa-trash-o"></i>
                                            </button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('js.php'); ?>
</body>

</html>