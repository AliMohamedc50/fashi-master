<?php
    session_start();
	if(!isset($_SESSION['id'])) {
		header('location:login.php');
	}else {

	include "design/header.php";
	include "design/nav.php";
	include "design/sidebar.php";
?>



		<?php
		if(!isset($_GET['docat'])) {
			include "show/categorie/show_categorie.php";
		}elseif ($_GET['docat'] == 'add'){
			include "show/./categorie/add_categorie.php";
		}elseif ($_GET['docat'] == 'edit'){
			include "show/categorie/edit_categorie.php";
		}elseif ($_GET['docat'] == 'delet'){
			include "logec_php/categorie/delete_categorie.php";
			include "show/categorie/show_categorie.php";
		}elseif ($_GET['docat'] == 'show'){
			include "show/categorie/show_row_categorie.php";

		}
		?>
		<!-- show_row_data_admin.php -->
		
		
		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>


<?php 
}
 ?>