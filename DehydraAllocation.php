<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><span style="color:red;">Department Section</span></h2>
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
                                Add Department
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">ADD DEPARTMENT</button>
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
                                            <th>SL</th>
                                            <th>Curriculam Code</th>
                                            <th>Technoly Name</th>
                                            <th>Technoloy Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Curriculam Code</th>
                                            <th>Technoly Name</th>
                                            <th>Technoloy Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM deparment");
                                            $a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$a++.'</td>
                                                        <td>'.$row["ccode"].'</td>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["tcode"].'</td>
                                                        <td>
<div class="row">
    <div class="col-sm-6">
        <button data-toggle="modal" viewid="'.$row["id"].'" data-target="#defaultModal2" class="btn btn-primary waves-effect edit"><i class="material-icons">edit</i></button>
    </div>
    <div class="col-sm-6">
        <form action="config/action.php" method="post">
        <input type="hidden" name="id" value="'.$row["id"].'">
        <button type="submit" name="deltec" class="btn btn-danger waves-effect"><i class="material-icons">delete_forever
</i></button>
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
                <h4 class="modal-title" id="defaultModalLabel">ADD NEW DEPARTMENT</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                    <div id="res"></div>
                    <script>
                        $(document).ready(function() {
                        $('.edit').click(function() {
                          var id = $(this).attr('viewid');
                          $.ajax({
                                url: 'edittech.php',
                                type: 'POST',
                                data: { id: id },

                                success: function(result){
                                    $('#res').html(result);
                                }
                            });
                        });
                            
                      });
                    </script>
                    <div class="form-group">
                        <label>Curriculam Code</label>
                        <div class="form-line">
                            <input type="text" name="ccode" placeholder="Enter Curriculam Code" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Technology Name</label>
                        <div class="form-line">
                            <input type="text" name="name" placeholder="Enter Deparment Name" required="1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Technology Code</label>
                        <div class="form-line">
                            <input type="text" name="tcode" placeholder="Enter Technology Code" required="1" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="addTechnology" class="btn btn-link waves-effect">ADD DEPARTMENT</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">EDIT DEPARTMENT</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                    <div id="res1"></div>
                    <script>
                        $(document).ready(function() {
                        $('.edit').click(function() {
                          var id = $(this).attr('viewid');
                          $.ajax({
                                url: 'edittech.php',
                                type: 'POST',
                                data: { id: id },

                                success: function(result){
                                    $('#res1').html(result);
                                }
                            });
                        });
                            
                      });
                    </script>
                    
            </div>
            <div class="modal-footer">
                <button type="submit" name="edittech" class="btn btn-link waves-effect">EDIT</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php  
    include 'includes/footer.php';
?>