<?php
//login
session_start();
if(!@$_SESSION['wip_user']):
	require ('controllers/authController.php');
	$title 	= 'LOGIN';
	include 'views/auth/login.php';
	die();
endif;

//get page request
$page = @$_REQUEST['page'];

//save xls
if ($page == 'save-xls-active-mo-package'): 
	require 'views/active_mo/saveXlsPackage.php';
elseif ($page == 'save-xls-active-mo-device'): 
	require 'views/active_mo/saveXlsDevice.php';
elseif ($page == 'save-xls-active-mo-mo'): 
	require 'views/active_mo/saveXlsMo.php';

else:
switch ($page) {
	#active mo
	//packages
	case 'active-mo-package':
		$page='active_mo/package.php';
		$title='ACTIVE MO';
	break;

	//device
	case 'active-mo-device':
		$page='active_mo/device.php';
		$title='ACTIVE MO';
	break;

	//MO
	case 'active-mo-mo':
		$page='active_mo/mo.php';
		$title='ACTIVE MO';
	break;

	#WARE HOUSE
	//packages
	case 'warehouse-package':
		$page= 'warehouse/package.php';
		$title='WARE HOUSE';
	break;

	//device
	case 'warehouse-device':
		$page='warehouse/device.php';
		$title='WARE HOUSE';
	break;

	//MO
	case 'warehouse-mo':
		$page='warehouse/mo.php';
		$title='WARE HOUSE';
	break;

	#FRONT OF LINE
	//packages
	case 'front-of-line-package':
		$page= 'front_of_line/package.php';
		$title='FRONT OF LINE';
	break;

	//device
	case 'front-of-line-device':
		$page='front_of_line/device.php';
		$title='FRONT OF LINE';
	break;

	//MO
	case 'front-of-line-mo':
		$page='front_of_line/mo.php';
		$title='FRONT OF LINE';
	break;

	#END OF LINE
	//packages
	case 'end-of-line-package':
		$page= 'end_of_line/package.php';
		$title='END OF LINE';
	break;

	//device
	case 'end-of-line-device':
		$page='end_of_line/device.php';
		$title='END OF LINE';
	break;

	//MO
	case 'end-of-line-mo':
		$page='end_of_line/mo.php';
		$title='END OF LINE';
	break;

	#PRODUCTION
	//packages
	case 'production-package':
		$page= 'production/package.php';
		$title='PRODUCTION LINE';
	break;

	//device
	case 'production-device':
		$page='production/device.php';
		$title='PRODUCTION LINE';
	break;

	//MO
	case 'production-mo':
		$page='production/mo.php';
		$title='PRODUCTION LINE';
	break;

	#SHIPPING
	//packages
	case 'shipping-package':
		$page= 'shipping/package.php';
		$title='SHIPPING';
	break;

	//device
	case 'shipping-device':
		$page='shipping/device.php';
		$title='SHIPPING';
	break;

	//MO
	case 'shipping-mo':
		$page='shipping/mo.php';
		$title='SHIPPING';
	break;

	#ENGINEERING LOT
	//packages
	case 'engineering-lot-package':
		$page= 'engineering_lot/package.php';
		$title='ENGINEERING LOT';
	break;

	//device
	case 'engineering-lot-device':
		$page='engineering_lot/device.php';
		$title='ENGINEERING LOT';
	break;

	//MO
	case 'engineering-lot-mo':
		$page='engineering_lot/mo.php';
		$title='ENGINEERING LOT';
	break;

	#ON SCHEDULE
	//packages
	case 'on-schedule-package':
		$page= 'on_schedule/package.php';
		$title='ON SCHEDULE';
	break; 

	//device
	case 'on-schedule-device':
		$page='on_schedule/device.php';
		$title='ON SCHEDULE';
	break;

	//MO
	case 'on-schedule-mo':
		$page='on_schedule/mo.php';
		$title='ON SCHEDULE';
	break;

	#MISSED POD FOL
	//packages
	case 'missed-pod-fol-package':
		$page= 'missed_pod_fol/package.php';
		$title='MISSED POD FOL';
	break;

	//device
	case 'missed-pod-fol-device':
		$page='missed_pod_fol/device.php';
		$title='MISSED POD FOL';
	break;

	//MO
	case 'missed-pod-fol-mo':
		$page='missed_pod_fol/mo.php';
		$title='MISSED POD FOL';
	break;

	#MISSED POD EOL
	//packages
	case 'missed-pod-eol-package':
		$page= 'missed_pod_eol/package.php';
		$title='MISSED POD EOL';
	break;

	//device
	case 'missed-pod-eol-device':
		$page='missed_pod_eol/device.php';
		$title='MISSED POD EOL';
	break;

	//MO
	case 'missed-pod-eol-mo':
		$page='missed_pod_eol/mo.php';
		$title='MISSED POD EOL';
	break;

	#MISSED SOD
	//packages
	case 'missed-sod-package':
		$page='missed_sod/package.php';
		$title='MISSED SOD';
	break;

	//device
	case 'missed-sod-device':
		$page='missed_sod/device.php';
		$title='MISSED SOD';
	break;

	//MO
	case 'missed-sod-mo':
		$page='missed_sod/mo.php';
		$title='MISSED SOD';
	break;

	#ON HOLD
	//package
	case 'on-hold-package':
		$page='on_hold/package.php';
		$title='ON HOLD';
	break;

	//device
	case 'on-hold-device':
		$page='on_hold/device.php';
		$title='ON HOLD';
	break;

	//mo
	case 'on-hold-mo':
		$page='on_hold/mo.php';
		$title='ON HOLD';
	break;

	#YIELD 95
	//package
	case 'yield-95-package':
		$page='yield95/package.php';
		$title='YIELD in 95%';
	break;

	//device
	case 'yield-95-device':
		$page='yield95/device.php';
		$title='YIELD in 95%';
	break;

	//mo
	case 'yield-95-mo':
		$page='yield95/mo.php';
		$title='YIELD in 95%';
	break;

	#YIELD 98
	//package
	case 'yield-98-package':
		$page='yield98/package.php';
		$title='YIELD in 98%';
	break;

	//device
	case 'yield-98-device':
		$page='yield98/device.php';
		$title='YIELD in 98%';
	break;

	//mo
	case 'yield-98-mo':
		$page='yield98/mo.php';
		$title='YIELD in 98%';
	break;

	#YIELD 99
	//package
	case 'yield-99-package':
		$page='yield99/package.php';
		$title='YIELD in 99%';
	break;

	//device
	case 'yield-99-device':
		$page='yield99/device.php';
		$title='YIELD in 99%';
	break;

	//mo
	case 'yield-99-mo':
		$page='yield99/mo.php';
		$title='YIELD in 99%';
	break;

	#YIELD below 95
	//package
	case 'yield-below-95-package':
		$page='yield_below95/package.php';
		$title='YIELD in below 95%';
	break;

	//device
	case 'yield-below-95-device':
		$page='yield_below95/device.php';
		$title='YIELD in below 95%';
	break;

	//mo
	case 'yield-below-95-mo':
		$page='yield_below95/mo.php';
		$title='YIELD in below 95%';
	break;

	#graph mo
	//
	case 'graph-mo':
		/*if(@$_SESSION['wip_user'] == 'ceo')
			:$page='graph/graph1.php';
		else
			:$page='graph/graph.php';
		endif;*/
		$page='graph/graph.php';
		$title='GRAPH MO';
	break;

	#graph yield
	//
	case 'graph-yield':
		$page='graph/yieldGraph.php';
		$title='GRAPH YIELD';
	break;

	#Dashboard tables to link
	//running mo
	case 'running-mo-details':
		$page='running/runningMo.php';
		$title='Running MO';
	break;

	#running yield details
	/* per SOT */
	//sot per package
	case 'running-yield-sot-pkg':
		$page='running/sot/sotPackage.php';
		$title='Running Yield';
	break;

	//sot per device
	case 'running-yield-sot-dvc':
		$page='running/sot/sotDevice.php';
		$title='Running Yield';
	break;

	//sot per mo
	case 'running-yield-sot-mo':
		$page='running/sot/sotMo.php';
		$title='Running Yield';
	break;

	//sot per mo
	case 'running-yield-sot-prime':
		$page='running/sot/sotPrime.php';
		$title='Running Yield';
	break;

	/* per PLASTIC*/
	//plastic per package
	case 'running-yield-plastic-pkg':
		$page='running/plastic/plasticPackage.php';
		$title='Running Yield';
	break;

	//plastic per device
	case 'running-yield-plastic-dvc':
		$page='running/plastic/plasticDevice.php';
		$title='Running Yield';
	break;

	//plastic per mo
	case 'running-yield-plastic-mo':
		$page='running/plastic/plasticMo.php';
		$title='Running Yield';
	break;

	//plastic per mo
	case 'running-yield-plastic-prime':
		$page='running/plastic/plasticPrime.php';
		$title='Running Yield';
	break;

	/* per HERMETICS*/
	//hermetics per package
	case 'running-yield-hermetics-pkg':
		$page='running/hermetics/hermeticsPackage.php';
		$title='Running Yield';
	break;

	//hermetics per device
	case 'running-yield-hermetics-dvc':
		$page='running/hermetics/hermeticsDevice.php';
		$title='Running Yield';
	break;

	//hermetics per mo
	case 'running-yield-hermetics-mo':
		$page='running/hermetics/hermeticsMo.php';
		$title='Running Yield';
	break;

	//hermetics per mo
	case 'running-yield-hermetics-prime':
		$page='running/hermetics/hermeticsPrime.php';
		$title='Running Yield';
	break;

	#REJECTS
	//top rejects
	case 'top-rejects':
		$page='running/topRejects.php';
		$title='Top Rejects';
	break;

	//top rejects
	case 'top-rejects-detials':
		$page='running/topRejectsDetials.php';
		$title='Top Rejects';
	break;

	#fiilup form in yield

	case 'fillup-form-yield':
		$page='yield/fillupForm.php'; 
		$title='Fill up Form';
	break;

	#logout
	case 'logout':
		$page='auth/logout.php';
	break;

	#default
	default:
		/*if(@$_SESSION['wip_user'] == 'ceo')
			:$page= 'dashboard/dashboard1.php';
		else
			:$page= 'dashboard/dashboard.php';
		endif;*/
		$page= 'dashboard/dashboard1.php';
		$title='Dashboard';
	break;
}
include 'layouts/layout.php';

endif;
?>