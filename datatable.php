<?php 
	include 'header.php';
	
	?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Simple Datatable start -->
				
				
				<!-- Simple Datatable End -->
				<!-- multiple select row Datatable start -->

				<!-- <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with Checckbox select</h4>
					</div>
					<div class="pb-20">
						<table class="checkbox-datatable table nowrap">
							<thead>
								<tr>
									<th><div class="dt-checkbox">
											<input type="checkbox" name="select_all" value="1" id="example-select-all">
											<span class="dt-checkbox-label"></span>
										</div>
									</th>
									<th>Patient Name</th>
									<th>Petient Age</th>
									<th>SYMPTOMS</th>
									<th>Start date</th>
									<th>PARTICULAR DISEASE</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Tokyo</td>
									<td>2008/11/28</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td></td>
									<td>Angelica Ramos</td>
									<td>Chief Executive Officer (CEO)</td>
									<td>London</td>
									<td>2009/10/09</td>
									<td>$1,200,000</td>
								</tr>
								<tr>
									<td></td>
									<td>Ashton Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
								</tr>
								<tr>
									<td></td>
									<td>Bradley Greer</td>
									<td>Software Engineer</td>
									<td>London</td>
									<td>2012/10/13</td>
									<td>$132,000</td>
								</tr>
								<tr>
									<td></td>
									<td>Brenden Wagner</td>
									<td>Software Engineer</td>
									<td>San Francisco</td>
									<td>2011/06/07</td>
									<td>$206,850</td>
								</tr>
								<tr>
									<td></td>
									<td>Caesar Vance</td>
									<td>Pre-Sales Support</td>
									<td>New York</td>
									<td>2011/12/12	</td>
									<td>$106,450</td>
								</tr>
								<tr>
									<td></td>
									<td>Cedric Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
								</tr>
								<tr>
									<td></td>
									<td>Dai Rios</td>
									<td>Personnel Lead</td>
									<td>Edinburgh</td>
									<td>2012/09/26</td>
									<td>$217,500</td>
								</tr>
								<tr>
									<td></td>
									<td>Doris Wilder</td>
									<td>Sales Assistant</td>
									<td>Sidney</td>
									<td>2010/09/20</td>
									<td>$85,600</td>
								</tr>
								<tr>
									<td></td>
									<td>Fiona Green</td>
									<td>Chief Operating Officer (COO)</td>
									<td>San Francisco</td>
									<td>2010/03/11</td>
									<td>$850,000</td>
								</tr>
								<tr>
									<td></td>
									<td>Gavin Cortez</td>
									<td>Team Leader</td>
									<td>San Francisco</td>
									<td>2008/10/26</td>
									<td>$235,500</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>2012/08/06</td>
									<td>$137,500</td>
								</tr>
								<tr>
									<td></td>
									<td>Hope Fuentes</td>
									<td>Secretary</td>
									<td>San Francisco</td>
									<td>2010/02/12</td>
									<td>$109,850</td>
								</tr>
								<tr>
									<td></td>
									<td>Jena Gaines</td>
									<td>Office Manager</td>
									<td>London</td>
									<td>2008/12/19</td>
									<td>$90,560</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
		
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Patient Data</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
				

									<th class="table-plus datatable-nosort">Name</th>

									<th>Age</th>
									<th>Dr. Name</th>
									<th>Amount</th>
									<th>OUR SERVICES</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
			<?php

$sql = "SELECT first_name, age,last_name,sym,email,dis FROM studentdat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$first_name=$row['first_name'];
         $last_name=$row['last_name'];
          $age=          $row['age'];
             $sym    =   $row['sym'];
                 $email=   $row['email'];
                   $dis= $row['dis'];

?>
								<tr>
									<td class="table-plus"><?php
									echo $first_name?></td>
									<td><?php
									echo $age?></td>
									<td><?php
									echo $last_name?></td>
									<td><?php
									echo $email?></td>
									<td><?php
									echo $sym?></td>
									<td><?php
									echo $dis?></td>
								</tr>
								




<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>

							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Design  By <a >SPRINGS</a>
			</div>
		</div>
	</div>
	<!-- js -->
				
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>