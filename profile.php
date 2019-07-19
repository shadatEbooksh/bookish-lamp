<?php  
    include 'includes/header.php';
    $query = mysqli_query($conn, "SELECT * FROM admin");
    $admin = mysqli_fetch_array($query);
    $email = $admin['email'];
    $name = $admin['name'];
    $phone = $admin['phone'];
    $phone2 = $admin['phone2'];
    $address = $admin['address'];
    $address2 = $admin['address2'];
    $city = $admin['city'];
    $photo = $admin['photo'];

    $desig = "Administrator";

    $dates = $admin['dates'];
                                       
?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <?php 
                        if (isset($_SESSION['errr'])) {
                            echo $_SESSION['errr'];
                            $_SESSION['errr'] = "";
                        }
                    ?>
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="images/admin/<?php echo $photo; ?>" alt="Profile Image" width="150px;" />
                            </div>
                            <div class="content-area">
                                <h3><?php echo $name; ?></h3>
                                <p>Web Software Developer</p>
                                <p><?php echo $desig; ?></p>
                            </div>
                        </div>                    
                   	</div>
                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        Phone
                                    </div>
                                    <div class="content">
                                        <?php echo $phone; ?> <br>
                                        <?php echo $phone2; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Address
                                    </div>
                                    <div class="content">
                                        <?php echo $address; ?> <br>
                                        <?php echo $address2; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">email</i>
                                        Email
                                    </div>
                                    <div class="content">
                                        <?php echo $email; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        Last Update
                                    </div>
                                    <div class="content">
                                        <?php echo $dates; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                   	    <?php
											$query = mysqli_query($conn, "SELECT * FROM notice WHERE username = '$uname'");
											while ($row = mysqli_fetch_array($query)) {
                                                $name = $row['name'];
                                                $username = $row['username'];
                                                $query2 = mysqli_query($conn, "SELECT * FROM admin WHERE uname = '$uname'");
                                                $row1 = mysqli_fetch_array($query2);
                                                $photo1 = $row1['photo'];
                                                if (empty($photo1)) {
                                                    $photo = '<img src="images/admin/'.$photo1.'" alt="Profile Image" ';
                                                } else {
                                                    $photo = '<img src="images/admin/'.$photo1.'" alt="Profile Image" ';
                                                }
                                                echo '
                                            <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-left" style="float:left;">
                                                        <a href="#">
                                                            '.$photo.'
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">'.$name.'</a>
                                                        </h4>
                                                        Shared publicly - '.$row["dates"].'
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-heading">
                                                        <p>'.$row["title"].'</p>
                                                    </div>
                                                    <div class="post-content">
                                                        <span style="    text-align: justify;padding-left: 20px;padding-right: 20px">'.$row["post"].'</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <ul>
                                                    
                                                    <li>
                                                        <a style="cursor:pointer;">
                                                            <i class="material-icons">comment</i>
                                                            <span><span id="msg">0</span> Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">share</i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Type a comment" />
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                                ';


                                            }
										?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form action="config/action.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="NameSurname" name="name" placeholder="Name Surname" value="<?php echo $name; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $email; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Alternative Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="phone" name="phone2" placeholder="Alternative Phone Number" value="<?php echo $phone2; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $address; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="address" name="address2" placeholder="" value="<?php echo $address2; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="city" name="city" placeholder="City Name" value="<?php echo $city; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputExperience" class="col-sm-2 control-label">Photo</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="file" name="photo" required="1" class="form-control">
                                                    </div>
                                                    <div>
                                                    <img src="images/admin/<?php echo $photo; ?>" alt="Admin Picture" width="300px;">
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" name="agree" id="terms_condition_check" class="chk-col-red filled-in" />
                                                    <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button name="updateInfo" type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form action="config/action.php" method="post" class="form-horizontal">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button name="updatePassword" type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  
    include 'includes/footer.php';
?>