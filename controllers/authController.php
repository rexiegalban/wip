<?php

$auth = new AuthController();

$username = @mysql_real_escape_string($_POST['username']);
$password = @mysql_real_escape_string($_POST['password']);

$select = "SELECT * FROM material_cost_variance_user
				WHERE user_name = '$username'
				AND password = '$password'
				";

$q= $auth->query($select);
$data = $auth->fetchRow();

if($data){
	$_SESSION['wip_user'] = $data['user_name'];
	$_SESSION['wip_name'] = $data['first_name'];
	header('Location:/wip');

}else{
	if (isset($_POST['login'])) {
?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script>
	$(function(){
		$(".bg-danger").show();
		$("#echoer").html("Error: Invalid Login!");
		setTimeout(function(){ $(".bg-danger").fadeOut(500); },2000);
	});
	</script>
<?php
	}
}