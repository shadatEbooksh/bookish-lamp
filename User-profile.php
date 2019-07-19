<?php  
    include 'includes/header.php';

    $query = mysqli_query($conn, "SELECT * FROM userinfo WHERE uname = '$uuname'");
    $admin = mysqli_fetch_array($query);
    $uid = $admin['id'];
    $email = $admin['email'];
    $name = $admin['name'];
    $phone = $admin['phone'];
    $phone2 = $admin['phone2'];
    $address = $admin['address'];
    $address2 = $admin['address2'];
    $city = $admin['city'];
    $photo = $admin['photo'];
    $designation = $admin['desig'];

    $position = "User";

    $dates = $admin['dates'];
                                       
?>
    <input type="hidden" id="uid" value="<?php echo $uid; ?>">

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
                                <?php 
                                    if (empty($photo)) {
                                        echo '<img src="images/user.png" alt="Profile Image" width="150px;" />';
                                    } else {
                                        echo '<img src="images/admin/'.$photo.'" alt="Profile Image" width="150px;" />';
                                    }
                                 ?>
                                
                            </div>
                            <div class="content-area">
                                <h3><?php 
                                    if (empty($name)) {
                                        echo 'Name not set yet';
                                    } else {
                                        echo $name;
                                    }
                                 ?></h3>
                                <p>
                                    <?php  
                                        if (empty($designation)) {
                                        echo 'Designation not set yet';
                                    } else {
                                        echo $desig;
                                    }
                                    ?>
                                </p>
                                <p><?php echo $position; ?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Followers</span>
                                    <span>1.234</span>
                                </li>
                                <li>
                                    <span>Following</span>
                                    <span>1.201</span>
                                </li>
                                <li>
                                    <span>Friends</span>
                                    <span>14.252</span>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
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
                                        <?php 
                                        if (empty($phone)) {
                                            echo "Phone not set yet";
                                        } else{
                                            echo $phone;
                                        } 

                                         ?> <br>
                                        <?php if (empty($phone2)) {
                                            echo "Alternative Phone not set yet";
                                        } else{
                                            echo $phone;
                                        }  ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Address
                                    </div>
                                    <div class="content">
                                        <?php if (empty($address)) {
                                            echo "Address not set yet";
                                        } else{
                                            echo $address;
                                        }  ?> <br>
                                        <?php echo $address2; ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">email</i>
                                        Email
                                    </div>
                                    <div class="content">
                                        <?php if (empty($email)) {
                                            echo "Email not set yet";
                                        } else{
                                            echo $email;
                                        }  ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        Last Update
                                    </div>
                                    <div class="content">
                                        <?php if (empty($dates)) {
                                            echo "Never Updated";
                                        } else{
                                            echo $dates;
                                        }  ?>
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
                                            $query = mysqli_query($conn, "SELECT * FROM notice WHERE username = '$uuname' ORDER BY id DESC");
											if(mysqli_num_rows($query) > 0) {
												                                            while ($row = mysqli_fetch_array($query)) {
                                                $name = $row['name'];
                                                $username = $row['username'];
                                                $query2 = mysqli_query($conn, "SELECT * FROM userinfo WHERE uname = '$username'");
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
                                                        <span style="padding: 0px; 10px;">'.$row["post"].'</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <ul>
                                                    <li>
                                                        <a class="likepost" viewid="'.$row["id"].'"style="cursor:pointer;">
                                                            <i class="material-icons">thumb_up</i>
                                                            <span> Likes</span>
                                                        </a>
                                                    </li>
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
											} else {
												echo '
													<div class="alert alert-danger"><i class="material-icons">refresh</i>&nbsp;&nbsp;<b>Wow. Look Likew You don\' Post any Notice Yet</b> <a href="notice">Post A Notice</a></div>
												';
											}
                                        ?>
                                    </div>
 <script>
     $(function() {
        $('.likepost').click(function() {
            var id = $(this).attr('viewid');
            var uid = $('#uid').val();
            
            $.ajax({
                url: 'like.php',
                type: 'POST',
                data: { id: id,
                    uid:uid
                 },
                success: function(result){
                    console.log(result);
                    $('.likepost').css({
                        "color":"blue"
                    })
                }
            });
        })
        setInterval(function() {
            $('.likepost').fadeIn("slow");
        }, 1000);
     })
 </script>                                   
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
                                                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" maxlength="11" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Alternative Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" maxlength="11" name="phone2" placeholder="Alternative Phone Number" value="<?php echo $phone2; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $address; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="address2" placeholder="" value="<?php echo $address2; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="city" placeholder="City Name" value="<?php echo $city; ?>" required>
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
                                                    <button name="updateUserInfo" type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="uuname" value="<?php echo $uuname; ?>">
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form action="config/action.php" method="post" class="form-horizontal">
                                            <input type="hidden" name="uuname" value="<?php echo $uuname; ?>">
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
                                                    <button name="updateUserPassword" type="submit" class="btn btn-danger">SUBMIT</button>
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