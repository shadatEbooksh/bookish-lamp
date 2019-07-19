<?php  
    include 'includes/header.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Student Section</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Custom Search
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

                            <div class="form-group form-float">
        <div class="form-line">
            <select id="session" name="tname" class="form-control">
                <option value="">-- Session --</option>
                <option value="1516">2015 - 2016 </option>
                <option value="1617">2016 - 2017 </option>
                <option value="1718">2017 - 2018 </option>
                <option value="1819">2018 - 2019 </option>
                <option value="1920">2019 - 2020 </option>
            </select>
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
            <select id="semester" name="tname" class="form-control">
                <option value="">-- Semester --</option>
                <option value="1">1st Semester --</option>
                <option value="2">2nd Semester --</option>
                <option value="3">3rd Semester --</option>
                <option value="4">4th Semester --</option>
                <option value="5">5th Semester --</option>
                <option value="6">6th Semester --</option>
                <option value="7">7th Semester --</option>
                <option value="8">8th Semester --</option>
                
            </select>
        </div>
    </div>

    <button id="search-data" class="btn Search btn-primary"> Search</button>
    <script type="text/javascript">
        $(function() {
            $('#search-data').click(function(){
                var session = $('#session').val();
                var tname = $('#tname').val();
                var semester = $('#semester').val();
               
                $.ajax({
                url: 'custom_search_student.php',
                type: 'POST',
                data: {
                session: session,
                tname: tname,
                semester: semester
                },

                success: function(result){
                $('#session').val(" ");
                $('#tname').val(" ");
                $('#semester').val(" ");
                $('#res1').html(result);

                }
                });
            })
        })
    </script>
    <div id="res1" style="margin-top: 30px;"></div>

</div>        
                               
                        </div>
                        </div>
                        </div>
                    </div>
            <!-- #END# Body Copy -->
     
    </section>

<!-- Default Size -->


<!-- Default Size -->

<?php  
    include 'includes/footer.php';
?>