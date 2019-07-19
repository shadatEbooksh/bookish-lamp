<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><span style="color: red;">Student Section</span></h2>
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
                                View Student
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="Add-Student.php"><button type="button" class="btn btn-default waves-effect m-r-20">ADD Student</button></a>
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
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>Registration Roll</th>
                                            <th>Admission Year</th>
                                            <th>Passing Year</th>
                                            <th>Curiculam Code</th>
                                            <th>Technoloy</th>
                                            <th>Technology Code</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Guardian Name</th>
                                            <th>Guardian Phone Number</th>
                                            <th>Address</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>Registration Roll</th>
                                            <th>Admission Year</th>
                                            <th>Passing Year</th>
                                            <th>Curiculam Code</th>
                                            <th>Technoloy</th>
                                            <th>Technology Code</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Guardian Name</th>
                                            <th>Guardian Phone Number</th>
                                            <th>Address</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM student");
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["phone"].'</td>
                                                        <td>'.$row["email"].'</td>
                                                        <td>'.$row["iroll"].'</td>
                                                        <td>'.$row["broll"].'</td>
                                                        <td>'.$row["rroll"].'</td>
                                                        <td>'.$row["ayear"].'</td>
                                                        <td>'.$row["pyear"].'</td>
                                                        <td>'.$row["ccode"].'</td>
                                                        <td>'.$row["tname"].'</td>
                                                        <td>'.$row["tcode"].'</td>
                                                        <td>'.$row["fname"].'</td>
                                                        <td>'.$row["mname"].'</td>
                                                        <td>'.$row["gname"].'</td>
                                                        <td>'.$row["gphone"].'</td>
                                                        <td>'.$row["address"].'</td>
                                                        <td>'.$row["remarks"].'</td>
                                                        <td>
<div class="row">
    <div class="col-sm-6"><button viewid="'.$row["id"].'" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary viewstudent btn-sm waves-effect m-r-20"><i class="material-icons">remove_red_eye</i></button></div>
    <div class="col-sm-6"><button viewroll="'.$row["iroll"].'" viewbroll="'.$row["broll"].'"  data-toggle="modal" data-target="#defaultModal1" class="btn CGPA btn-warning btn-sm waves-effect m-r-20"><i class="material-icons">school</i></button></div>
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
                <h4 class="modal-title" id="defaultModalLabel">View Student Information</h4>
            </div>
            <div class="modal-body">
                <div id="res"></div>
                <script>
                    $(document).ready(function() {
                    $('.viewstudent').click(function() {
                      var id = $(this).attr('viewid');
                      $.ajax({
                            url: 'viewstudent.php',
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
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Default Size -->
<div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Student CGPA</h4>
            </div>
            <div class="modal-body">
                <div id="res1"></div>
                <script>
                    $(document).ready(function() {
                    $('.CGPA').click(function() {
                      var iroll = $(this).attr('viewroll');
                      var broll = $(this).attr('viewbroll');
                      $.ajax({
                            url: 'addcgpa.php',
                            type: 'POST',
                            data: {
                                iroll: iroll,
                                broll: broll
                            },

                            success: function(result){
                                $('#res1').html(result);
                            }
                        });
                    });
                        
                  });
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<?php  
    include 'includes/footer.php';
?>