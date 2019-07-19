<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Teacher Section</h2>
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
                                Notice Section
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="notice"><button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">ADD NOTICE</button></a>
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
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                          	<th>Name</th>
                                            <th>Title</th>
                                            <th>Posting Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            $query = mysqli_query($conn, "SELECT * FROM notice ORDER BY id");
											$a = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                echo '
                                                    <tr>
                                                        <td>'.$a++.'</td>
                                                        <td>'.$row["name"].'</td>
                                                        <td>'.$row["title"].'</td>
                                                        <td>'.$row["dates"].'</td>
                                                        <td>
<div class="row">
	<div class="col-sm-6">	
		<button viewid="'.$row["id"].'" data-toggle="modal" data-target="#defaultModal" class="btn btn-primary viewnotice btn-sm waves-effect m-r-20"><i class="material-icons">remove_red_eye</i></button>
	</div>
	<div class="col-md-6">
		<form action="config/action.php" method="post">
			<input type="hidden" name="id" value="'.$row["id"].'">
			<button type="submit" name="deleteNotice" class="btn btn-danger"><i class="material-icons">cancel</i></button>
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
                <h4 class="modal-title" id="defaultModalLabel">VIEW NOTICE</h4>
            </div>
            <div class="modal-body">
                <div id="res1"></div>
                <script>
                    $(document).ready(function() {
                    $('.viewnotice').click(function() {
                      var id = $(this).attr('viewid');
                      $.ajax({
                            url: 'viewnotice.php',
                            type: 'POST',
                            data: {
                                id:id
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
            </form>
        </div>
    </div>
</div>

<?php  
    include 'includes/footer.php';
?>