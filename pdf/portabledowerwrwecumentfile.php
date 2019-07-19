<?php  
  include '../config/db.php';
  $iroll = base64_decode($_GET['industrialrollingobjectlongestlives']);
  $broll = base64_decode($_GET['businessrollingobjectlongestlives']);
  $query = mysqli_query($conn, "SELECT * FROM student WHERE iroll = '$iroll' AND broll='$broll'");
  $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SMS | STUDENT CGPA</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="style.css">

  
</head>

<body>

  <div class="container" id="template_invoice">
  <div class="row">
    <div class="col-xs-4">
      <div class="invoice-title">
        <h2>Invoice</h2>
      </div>
    </div>
    <div class="col-xs-4">
      <p class="lead">Order # 12345</p>
    </div>
    <div class="col-xs-4">
      <button class="btn btn-info pull-right">Download</button>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-6">
      <address>
    		<strong>Billed To:</strong><br>
    		John Smith<br>
    		1234 Main<br>
    		Apt. 4B<br>
    		Springfield, ST 54321
    	</address>
    </div>
    <div class="col-xs-6 text-right">
      <address>
        <strong>Shipped To:</strong><br>
    		Jane Smith<br>
    		1234 Main<br>
    		Apt. 4B<br>
    		Springfield, ST 54321
    	</address>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6">
      <address>
    		<strong>Payment Method:</strong><br>
    		Visa ending **** 4242<br>
    		jsmith@email.com
    	</address>
    </div>
    <div class="col-xs-6 text-right">
      <address>
    		<strong>Order Date:</strong><br>
    		March 7, 2014<br><br>
    	</address>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Order summary</strong></h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <td><strong>Item</strong></td>
                  <td class="text-center"><strong>Price</strong></td>
                  <td class="text-center"><strong>Quantity</strong></td>
                  <td class="text-right"><strong>Totals</strong></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>BS-200</td>
                  <td class="text-center">$10.99</td>
                  <td class="text-center">1</td>
                  <td class="text-right">$10.99</td>
                </tr>
                <tr>
                  <td>BS-400</td>
                  <td class="text-center">$20.00</td>
                  <td class="text-center">3</td>
                  <td class="text-right">$60.00</td>
                </tr>
                <tr>
                  <td>BS-1000</td>
                  <td class="text-center">$600.00</td>
                  <td class="text-center">1</td>
                  <td class="text-right">$600.00</td>
                </tr>
                <tr>
                  <td class="thick-line"></td>
                  <td class="thick-line"></td>
                  <td class="thick-line text-center"><strong>Subtotal</strong></td>
                  <td class="thick-line text-right">$670.99</td>
                </tr>
                <tr>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line text-center"><strong>Shipping</strong></td>
                  <td class="no-line text-right">$15</td>
                </tr>
                <tr>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line text-center"><strong>Total</strong></td>
                  <td class="no-line text-right">$685.99</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js'></script>

  

    <script  src="./script.js"></script>




</body>

</html>
