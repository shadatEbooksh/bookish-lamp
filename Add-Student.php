<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Student Section</h2>
            </div>
            <!-- Body Copy -->
               
<!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <?php  
                    if (isset($_SESSION['errr'])) {
                        echo $_SESSION['errr'];
                        $_SESSION['errr'] = "";
                    }
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <form id="form_validation" action="config/action.php" method="post">
                    <div class="card">
                        <div class="header">
                            <h2>ADD NEW STUDENT</h2>
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
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-pink">
                                            <div class="panel-heading" role="tab" id="headingOne_17">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">whatshot</i> Required Information
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                                <div class="panel-body">
                                                    <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" required>
                                            <label class="form-label">Student Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone" id="" required>
                                            <label class="form-label">Student Phone Number*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" required>
                                            <label class="form-label"> Student Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="iroll" required>
                                            <label class="form-label"> Student Institute Roll*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="texy" class="form-control" name="ayear" required>
                                            <label class="form-label"> Student Admission Year*</label>
                                        </div>
                                    </div>
                                </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan exam1">
                                            <div class="panel-heading" role="tab" id="headingTwo_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">school</i> Institute Information
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                                <div class="panel-body">
                                                    <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="broll" class="form-control">
                                            <label class="form-label">Board Roll Number </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="rroll" class="form-control">
                                            <label class="form-label">Registration Number</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required="1" type="number" name="ccode" class="form-control">
                                            <label class="form-label">Curiculam Code</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select id="tname" name="tname" class="form-control">
                                                <option value="">-- Technology Name --</option>
                                                <?php  
                                                    $query = mysqli_query($conn, "SELECT * FROM deparment");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required="1" id="tcode" type="number" name="tcode" class="form-control">
                                            <label class="form-label">Technology Code</label>
                                        </div>
                                    </div>
                                    <script>
                                        $(function() {
                                            $('#tname').change(function() {
                                                var tname = $(this).val();
                                                $.ajax ({
                                                    url: 'tcode.php',
                                                    type: 'POST',
                                                    data: { id: tname },

                                                    success: function(result){
                                                        $('#tcode').val(result);
                                                    }
                                                })
                                            })
                                        })
                                    </script>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="pyear" class="form-control">
                                            <label class="form-label">Passing Year</label>
                                        </div>
                                    </div>
                                </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingThree_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false"
                                                       aria-controls="collapseThree_17">
                                                        <i class="material-icons">person</i> Personal Information
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                                <div class="panel-body">
                                                    <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="fname" class="form-control">
                                            <label class="form-label">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="mname" class="form-control">
                                            <label class="form-label">Mother Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="gname" class="form-control">
                                            <label class="form-label">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="gphone" class="form-control">
                                            <label class="form-label">Guardian Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize"></textarea>
                                            <label class="form-label">Student Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="remarks" cols="30" rows="3" class="form-control no-resize"></textarea>
                                            <label class="form-label">Remarks</label>
                                        </div>
                                    </div>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label><br>
                                </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <button type="submit" name="addStudent" class="btn btn-success ">SUBMIT FORM</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
<?php  
    include 'includes/footer.php';
?>