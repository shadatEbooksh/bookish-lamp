<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    <span style="color:red;">CGPA</span>
                </h2>
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
                                CGPA
                            </h2>
                            <ul class="header-dropdown m-r--5">
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
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>First</th>
                                            <th>Second</th>
                                            <th>Third</th>
                                            <th>Four</th>
                                            <th>Five</th>
                                            <th>Six</th>
                                            <th>Seven</th>
                                            <th>Eight</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Institute Roll</th>
                                            <th>Board Roll</th>
                                            <th>First</th>
                                            <th>Second</th>
                                            <th>Third</th>
                                            <th>Four</th>
                                            <th>Five</th>
                                            <th>Six</th>
                                            <th>Seven</th>
                                            <th>Eight</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM cgpa");
                                            while ($row = mysqli_fetch_array($query)) {
                                                $iroll = $row['iroll'];
                                                echo '
                                                    <tr>
                                                        <td>'.$row["iroll"].'</td>
                                                        <td>'.$row["broll"].'</td>
                                                        <td>'.$row["first"].'</td>
                                                        <td>'.$row["second"].'</td>
                                                        <td>'.$row["third"].'</td>
                                                        <td>'.$row["fourth"].'</td>
                                                        <td>'.$row["fifth"].'</td>
                                                        <td>'.$row["six"].'</td>
                                                        <td>'.$row["seven"].'</td>
                                                        <td>'.$row["eight"].'</td>
                                                        <td>'.$row["total"].'</td>
                                                        <td>
<div class="row">
    <div class="col-sm-4">
        <button data-toggle="modal" viewid="'.$row["id"].'" data-target="#defaultModal" class="btn btn-primary waves-effect edit"><i class="material-icons">edit</i></button>
    </div>
    <div class="col-sm-4">
    <form action="config/action.php" method="post">
        <input type="hidden" name="iroll" value="'.$row["iroll"].'">
        <input type="hidden" name="broll" value="'.$row["broll"].'">
        <button type="submit" name="delCgpa" class="btn btn-danger waves-effect"><i class="material-icons">delete_forever
</i></button>
</form>
    </div>
    <div class="col-sm-4">
        <a style="color:white;" href="pdf/portabledocumentfile.php?businessrollingobjectlongestlives='.base64_encode($row["broll"]).'&industrialrollingobjectlongestlives='.base64_encode($row["iroll"]).'"><button class="btn btn-success waves-effect"><i class="material-icons">print</a>
</i></button>
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
                <h4 class="modal-title" id="defaultModalLabel">ADD NEW TEACHER</h4>
            </div>
            <div class="modal-body">
                <form action="config/action.php" method="post">
                    <div id="res"></div>
                    <script>
                        $(document).ready(function() {
                        $('.edit').click(function() {
                          var id = $(this).attr('viewid');
                          $.ajax({
                                url: 'editCgpa.php',
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
                <button type="submit" name="editCgpa" class="btn btn-link waves-effect">EDIT</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php  
    include 'includes/footer.php';
?>