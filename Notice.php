<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Notice Section</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <?php  
                    if (isset($_SESSION['errr'])) {
                        echo $_SESSION['errr'];
                        $_SESSION['errr'] = "";
                    }
                ?>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Notice
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
                            <form action="config/action.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="hidden" name="uname" value="<?php 
                                if (!empty($uname)) {
                                    echo $uname;
                                } else {
                                    echo $uuname;
                                }
                             ?>">
                            <div class="form-group">
                                <label>Notice Title</label>
                                <div class="form-line">
                                    <input type="text" name="title" placeholder="Enter Notice Name" required="1" class="form-control">
                                </div>
                            </div>
                            <textarea name="post" id="ckeditor">
                                Enter Your Notice
                            </textarea><br>
                            <button type="submit" name="addNotice" class="btn btn-primary waves-effect">ADD NOTICE</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Latest Notice
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
                            <?php  
                                $query = mysqli_query($conn, "SELECT * FROM notice ORDER BY id DESC LIMIT 5");
                                while ($row = mysqli_fetch_array($query)) {
                                    $name = $row['name'];
                                    $post = $row['title'];
                                    $dates = $row['dates'];
                                    echo '
                                    <div class="body bg-default">
                                        <a style="font-size: 15px;" href="User-profile.php">'.$post.'</a><br>
                                        <span>'.$name.'</span> - <span>'.$dates.'</span>
                                    </div>
                                    ';
                                }
                            ?>
                            
                            
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
    </section>

<?php  
    include 'includes/footer.php';
?>