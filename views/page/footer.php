	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>	
	<script src="assets/js/chart.min.js"></script>

	<!-- customize script-->
	<script src="assets/ajax/script.js"></script>	

	<script>
		$(document).ready(function() { 
			$('#running-mo1').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 4, "desc" ]]
			}); 
			$('#running-mo2').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 4, "desc" ]]
			}); 
			$('#running-mo3').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 4, "desc" ]]
			}); 
			
			$('#yield-sot').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 3, "desc" ]]
			}); 
			$('#yield-plastic').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 3, "desc" ]]
			}); 
			$('#yield-hermetics').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 3, "desc" ]]
			}); 

			$('#top-reject').DataTable({
				"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]], 
				"pageLength": 5,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-fol-da').DataTable({
				"bFilter" : false,   
				"pageLength": 5,	            
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-fol-wb').DataTable({
				"bFilter" : false,   
				"pageLength": 5,	            
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-fol-m').DataTable({
				"bFilter" : false,   
				"pageLength": 5,	            
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-eol-iso').DataTable({
				"bFilter" : false,   
				"pageLength": 5,	            
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-eol-4th').DataTable({
				"bFilter" : false,  
				"pageLength": 5,	             
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-eol-final').DataTable({
				"bFilter" : false,  
				"pageLength": 5,	             
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 

			$('#area-eol-pack').DataTable({
				"bFilter" : false,  
				"pageLength": 5,	             
				"bLengthChange": false,
				"order": [[ 2, "desc" ]]
			}); 
		} );
	</script>
</body>

</html>
