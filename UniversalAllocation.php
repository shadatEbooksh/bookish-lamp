<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><span style="color:red;">User Section</span></h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <?php  
                    if (isset($_SESSION['errr'])) {
                        echo $_SESSION['errr'];
                        $_SESSION['errr'] = "";
                    }
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add User  - Root
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">ADD USER</button>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Education</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Education</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM user");
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["position"].'</td>
                                                        <td>'.$row["qualification"].'</td>
                                                        <td>'.$row["age"].'</td>
                                                        <td>'.$row["startdate"].'</td>
                                                        <td>'.$row["salary"].'</td>
                                                        <td>'.$row["username"].'</td>
                                                        <td>'.$row["password"].'</td>
                                                        <td>
<div class="row">
    <div class="col-sm-6">
<button viewid="'.$row["id"].'" data-toggle="modal" data-target="#defaultModal1"  type="button"  class="viewuser btn btn-sm btn-primary waves-effect m-r-20"><i class="material-icons">edit</i></button>
    </div>
    <div class="col-sm-6">
    <form action="config/action.php" method="post">
    <input type="hidden" name="id" value="'.$row["id"].'">
    <input type="hidden" name="uname" value="'.$row["username"].'">
<button type="submit" name="deleteUser" class="btn btn-sm btn-danger waves-effect m-r-20"><i class="material-icons">delete</i></button>
</form>
    </div>
</div>

                                                        </td>
                                                    </tr>
                                                ';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
    </section>
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">ADD NEW USER</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <div class="form-line">
                            <input type="text" name="username" placeholder="Enter User  Username" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="form-line">
                            <input type="text" name="password" placeholder="Enter User Password" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="form-line">
                            <input type="text" name="name" placeholder="Enter User Name" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <div class="form-line">
                            <input type="text" name="position" placeholder="Enter User Position" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qualification</label>
                        <div class="form-line">
                            <input type="text" name="qualification" placeholder="Enter User qualification" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <div class="form-line">
                            <input type="number" name="age" placeholder="Enter User Age" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Start Date</label>
                        <div class="form-line">
                            <input type="date" name="dates" required="1" class="form-control" placeholder="Please choose a date...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <div class="form-line">
                            <input type="number" name="salary" placeholder="Enter User Salary" required="1" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="addUser" class="btn btn-link waves-effect">ADD TEACHER</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Default Size -->
<div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">UPDATE USER</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                <div id="res"></div>
                <script>
                    $(document).ready(function() {
                    $('.viewuser').click(function() {
                      var id = $(this).attr('viewid');
                      $.ajax({
                            url: 'updateUser.php',
                            type: 'POST',
                            data: { id: id },

                            success: function(result){
                                $('#res').html(result);
                            }
                        });
                    });
                        
                  });
                </script>
            </div>
            <div class="modal-footer">
                <button type="submit" name="updateUser" class="btn btn-link waves-effect">UPDATE USER</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php  
    include 'includes/footer.php';
?>