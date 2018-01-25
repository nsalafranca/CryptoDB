
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CryptoDB - The Smart Crypto Database</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUser2(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser2.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUser3(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser3.php?q="+str,true);
        xmlhttp.send();
    }
}
function showUser4(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser4.php?q="+str,true);
        xmlhttp.send();
    }
 }
 function showUser5(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser5.php?q="+str,true);
        xmlhttp.send();
    }
 }
</script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">CryptoDB</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">

              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Cryptocurrency Market</div>
        <div class="card-body">
          <div class="table-responsive">
          <form method="GET">
	<select name="users" onchange="showUser(this.value)">
  <option value="">Select a price filter:</option>
  <option value="1">10</option>
  <option value="2">1000</option>
  <option value="3">10000</option>
  
  </select>
  <select name="users" onchange="showUser2(this.value)">
  <option value="">Select Daily Volume:</option>
  <option value="1">100 Thousand</option>
  <option value="2">1 Million</option>
  <option value="3">10 Million</option>
  
  </select>

  <select name="users" onchange="showUser3(this.value)">
  <option value="0">Select Market Cap:</option>
  <option value="1">1 Billion</option>
  <option value="2">10 Billion</option>
  <option value="3">100 Billion</option>
  
  </select>

  <select name="users" onchange="showUser_(this.value)">
  <option value="">Select Coin:</option>
  <option value="1">Bitcoin</option>
  <option value="2">Ethereum</option>
  <option value="3">Bitcoin Cash</option>
  <option value="3">Ripple</option>
  <option value="3">Litecoin</option>
  <option value="3">Dash</option>
  <option value="3">NEM</option>
  <option value="3">Bitconnect</option>
  <option value="3">NEO</option>
  <option value="3">Litecoin</option>

  </select>


<select name="users" onchange="showUser4(this.value)">
  <option value="">Select Option:</option>
  <option value="1">Higher Price</option>
  <option value="2">Lower Price</option>
  <option value="3">Higher Market Cap</option>
  <option value="3">Lower Market Cap</option>
  <option value="3">Higher Daily Volume</option>
  <option value="3">Lower Daily Volume</option>
  </select>

<select name="users" onchange="showUser5(this.value)">
  <option value="">Select Wallet:</option>
  <option value="1">Armory</option>
  <option value="2">Mycelium</option>
  <option value="3">Blockchain</option>
  <option value="3">Exodus</option>
  <option value="3">Trezor</option>
  </select>

</form>
<br>
<div id="txtHint"><b>Filter information will be listed here:</b></div>

</body>
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

			</form>
              <thead>
                <tr>
                  <th>Currency ID</th>
                  <th>Name</th>
                  <th>Market Cap</th>
                  <th>Symbol</th>
                  <th>Price (USD)</th>
                  <th>Circulating Supply</th>
                  <th>Daily Volume</th>
                </tr>
              </thead>

              <tbody>
              
              	<?php
              		$db = new mysqli('localhost', 'root', '', 'crypto');

					if($db->connect_error):
						die ("Could not connect to db: " . $db->connect_error);
						endif;

					$query = "SELECT * FROM currency";
					mysqli_query($db, $query) or die('Error querying database.');

					$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					
					do {
					echo '<tr>','<th>',$row['currency_id'] . ' ' . '<th>', $row['currency_name'], '</th>'. ' ' . '<th>', $row['market_cap'],'</th>' . ' ' . '<th>', $row['symbol'] ,'</th>'. ' ' . '<th>', $row['average_price'],'</th>' . ' '. '<th>', $row['circulating_supply'],'</th>'.' '. '<th>', $row['daily_volume'],'</th>','</tr>' . '</br>';
					} while ($row = mysqli_fetch_array($result))
					
              		?>
              </tbody>
              </form>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at 2:00 PM</div>
      </div>
     
        
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

