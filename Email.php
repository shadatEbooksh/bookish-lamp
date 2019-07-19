<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Department Section</h2>
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
                                Feedback Email From Well Wishers
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
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="15%">Name</th>
                                            <th width="15%">Email</th>
                                            <th width="15%">Subject</th>
                                            <th width="10%">Date</th>
                                            <th width="40%">Read Mail</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="15%">Name</th>
                                            <th width="15%">Email</th>
                                            <th width="15%">Subject</th>
                                            <th width="10%">Date</th>
                                            <th width="40%">Read Mail</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM cmsg");
                                            $a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td width="5%">'.$a++.'</td>
                                                        <td width="15%">'.$row["name"].'</td>
                                                        <td width="15%"><a href="mailto:'.$row["name"].'">'.$row["email"].'</a></td>
                                                        <td width="15%">'.$row["subject"].'</td>
                                                        <td width="10%">'.$row["dates"].'</td>
                                                        <td width="40%">'.$row["msg"].'</td>
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
                    <div class="form-group">
                        <label>Session</label>
                        <div class="form-line">
                            <input type="text" name="session" placeholder="Enter Session Year " required="1" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="addSession" class="btn btn-link waves-effect">ADD SESSION</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php  
    include 'includes/footer.php';
?>