/*
 *
 * -Production WIP
 * -Charts
 * -Author: Rexie Galban
 *
 */
$(function(){

	//basck to dashboard
	$(".backDashboard").click(function(){
		window.location.href='http://testapps.teamglac.com/wip/';
	});

	/*
	 * MO GRAPH
	 */

	//active mo graph
	$("#active-mo-btn").on("click",function(){

		$('#activeMo-title1').html("ACTIVE MO");
		$('#activeMo-title2').html(" <hr />MO VALUE");

		$("#activeMoGraph").show();
		$("#warehouseMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#folMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("active-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(activeMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("active-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(activeMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//warehouse graph
	$("#warehouse-btn").on("click",function(){

		$('#warehouseMo-title1').html("WARE HOUSE MO");
		$('#warehouseMo-title2').html(" <hr />MO VALUE");

		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").show();
		$("#productionMoGraph").hide();
		$("#folMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("warehouse-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(warehouseMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("warehouse-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(warehouseMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//production line graph
	$("#production-btn").on("click",function(){

		$('#productionMo-title1').html("PRODUCTION LINE MO");
		$('#productionMo-title2').html(" <hr />MO VALUE");

		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#productionMoGraph").show();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("production-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(productionLineMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("production-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(productionLineMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//front of line graph
	$("#fol-btn").on("click",function(){

		$('#folMo-title1').html("FRONT OF LINE MO");
		$('#folMo-title2').html(" <hr />MO VALUE");

		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#folMoGraph").show();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("fol-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(frontOfLineMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("fol-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(frontOfLineMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//end of line graph
	$("#eol-btn").on("click",function(){

		$('#eolMo-title1').html("END OF LINE MO");
		$('#eolMo-title2').html(" <hr />MO VALUE");

		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#folMoGraph").hide();
		$("#eolMoGraph").show();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("eol-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(endOfLineMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("eol-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(endOfLineMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//shipping graph
	$("#shipping-btn").on("click",function(){
		$('#shippingMo-title1').html("SHIPPING MO");
		$('#shippingMo-title2').html(" <hr />MO VALUE");
		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#folMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").show();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("shipping-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(shippingMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("shipping-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(shippingMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//onSchedule graph
	$("#onSchedule-btn").on("click",function(){
		$('#onScheduleMo-title1').html("ON SCHEDULE MO");
		$('#onScheduleMo-title2').html(" <hr />MO VALUE");
		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#folMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").show();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("onSchedule-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(onScheduleMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("onSchedule-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(onScheduleMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//missed sod graph
	$("#missedSod-btn").on("click",function(){
		$('#missedSodMo-title1').html("MISSED SOD MO");
		$('#missedSodMo-title2').html(" <hr />MO VALUE");
		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#folMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").show();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("missedSod-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(missedSodMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("missedSod-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(missedSodMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	//on hold graph
	$("#onHold-btn").on("click",function(){
		$('#onHoldMo-title1').html("ON HOLD MO");
		$('#onHoldMo-title2').html(" <hr />MO VALUE");
		$("#activeMoGraph").hide();
		$("#warehouseMoGraph").hide();
		$("#folMoGraph").hide();
		$("#productionMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").show();

		//mo count chart
		var chart1 = document.getElementById("onHold-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(onHoldMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("onHold-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(onHoldMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
	});

	/*
	 * YIELD GRAPH
	 */
	//yield 99 graph
	$("#yield99-btn").on("click",function(){
		$("#yield99-chart").show();
		$("#yield98-chart").hide();
		$("#yield95-chart").hide();
		$("#yield-below95-chart").hide();
		var chart1 = document.getElementById("yield99-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(yield99Chart, {
		   responsive : true,
		   animation: true,
		   barValueSpacing : 5,
		   barDatasetSpacing : 1,
		   tooltipFillColor: "rgba(0,0,0,0.8)",                
		   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
		});
	});
	//yield 98 graph
	$("#yield98-btn").on("click",function(){
		$("#yield99-chart").hide();
		$("#yield98-chart").show();
		$("#yield95-chart").hide();
		$("#yield-below95-chart").hide();
		var chart1 = document.getElementById("yield98-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(yield98Chart, {
		   responsive : true,
		   animation: true,
		   barValueSpacing : 5,
		   barDatasetSpacing : 1,
		   tooltipFillColor: "rgba(0,0,0,0.8)",                
		   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
		});
	});
	//yield 95 graph
	$("#yield95-btn").on("click",function(){
		$("#yield99-chart").hide();
		$("#yield98-chart").hide();
		$("#yield95-chart").show();
		$("#yield-below95-chart").hide();
		var chart1 = document.getElementById("yield95-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(yield95Chart, {
		   responsive : true,
		   animation: true,
		   barValueSpacing : 5,
		   barDatasetSpacing : 1,
		   tooltipFillColor: "rgba(0,0,0,0.8)",                
		   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
		});
	});
	//yield Below95 graph
	$("#yield-below95-btn").on("click",function(){
		$("#yield99-chart").hide();
		$("#yield98-chart").hide();
		$("#yield95-chart").hide();
		$("#yield-below95-chart").show();
		var chart1 = document.getElementById("yield-below95-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(yieldBelow95Chart, {
		   responsive : true,
		   animation: true,
		   barValueSpacing : 5,
		   barDatasetSpacing : 1,
		   tooltipFillColor: "rgba(0,0,0,0.8)",                
		   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
		});
	});

	/*
	 *RUNNING MO TABLES
	 */
	 //running sot
	 $("#table-sot").on("click",function(){
	 	$("#running-sot").hide();
	 	$("#running-plastic").hide();
	 	$("#running-hermetics").hide();
	 	$("#loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...');
	 	setTimeout(function(){
	 		$("#loader").html('');
	 		$("#running-sot").fadeIn();
	 	},1000);
	 });
	 //running plastic
	 $("#table-plastic").on("click",function(){
	 	$("#running-sot").hide();
	 	$("#running-plastic").hide();
	 	$("#running-hermetics").hide();
	 	$("#loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...');
	 	setTimeout(function(){
	 		$("#loader").html('');
		 	$("#running-plastic").fadeIn();
	 	},1000);
	 });
	 //running hermetics
	 $("#table-hermetics").on("click",function(){
	 	$("#running-sot").hide();
	 	$("#running-plastic").hide();
	 	$("#running-hermetics").hide();
	 	$("#loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...');
	 	setTimeout(function(){
	 		$("#loader").html('');
		 	$("#running-hermetics").fadeIn();
	 	},1000);
	 });

	/* $(".sample").on("click",function(){
	 	$.ajax({
	 		dataType : "json",
	 		type 	: "POST",
	 		url 	: "",
	 		data 	:{x:1},
	 		success : function(data){
	 			$("#content-x").html(data);
	 			alert(data);
	 		}
	 	});

	 });*/


	/*
	 *RUNNING YIELD TABLES
	 */
	 //running sot
	 $("#table-yield-sot").on("click",function(){
	 	$("#yield-running-sot").hide();
	 	$("#yield-running-plastic").hide();
	 	$("#yield-running-hermetics").hide();
	 	$("#loader1").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#loader1").html('');
	 		$("#yield-running-sot").fadeIn();
	 	},1000);
	 });
	 //running plastic
	 $("#table-yield-plastic").on("click",function(){
	 	$("#yield-running-sot").hide();
	 	$("#yield-running-plastic").hide();
	 	$("#yield-running-hermetics").hide();
	 	$("#loader1").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#loader1").html('');
		 	$("#yield-running-plastic").fadeIn();
	 	},1000);
	 });
	 //running hermetics
	 $("#table-yield-hermetics").on("click",function(){
	 	$("#yield-running-sot").hide();
	 	$("#yield-running-plastic").hide();
	 	$("#yield-running-hermetics").hide();
	 	$("#loader1").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#loader1").html('');
		 	$("#yield-running-hermetics").fadeIn();
	 	},1000);
	 });

	 /*
	  * -Out Per Area
	  */
	  //###FOL
	  //die attached
	  $("#table-area-fol-da").on("click",function(){
	  	$("#out-per-area-da").hide();
	  	$("#out-per-area-wb").hide();
	  	$("#out-per-area-m").hide();
	 	$("#area-fol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-fol-loader").html('');
		 	$("#out-per-area-da").fadeIn();
	 	},1000);
	  });
	  //wire bond
	  $("#table-area-fol-wb").on("click",function(){
	  	$("#out-per-area-da").hide();
	  	$("#out-per-area-wb").hide();
	  	$("#out-per-area-m").hide();
	 	$("#area-fol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-fol-loader").html('');
		 	$("#out-per-area-wb").fadeIn();
	 	},1000);
	  });
	  //mold
	  $("#table-area-fol-m").on("click",function(){
	  	$("#out-per-area-da").hide();
	  	$("#out-per-area-wb").hide();
	  	$("#out-per-area-m").hide();
	 	$("#area-fol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-fol-loader").html('');
		 	$("#out-per-area-m").fadeIn();
	 	},1000);
	  });
	  //###EOL
	  //iso
	  $("#table-area-eol-iso").on("click",function(){
	  	$("#out-per-area-iso").hide();
	  	$("#out-per-area-4th").hide();
	  	$("#out-per-area-final").hide();
	  	$("#out-per-area-pack").hide();
	 	$("#area-eol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-eol-loader").html('');
		 	$("#out-per-area-iso").fadeIn();
	 	},1000);
	  });
	  //4th
	  $("#table-area-eol-4th").on("click",function(){
	  	$("#out-per-area-iso").hide();
	  	$("#out-per-area-4th").hide();
	  	$("#out-per-area-final").hide();
	  	$("#out-per-area-pack").hide();
	 	$("#area-eol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-eol-loader").html('');
		 	$("#out-per-area-4th").fadeIn();
	 	},1000);
	  });
	  //final
	  $("#table-area-eol-final").on("click",function(){
	  	$("#out-per-area-iso").hide();
	  	$("#out-per-area-4th").hide();
	  	$("#out-per-area-final").hide();
	  	$("#out-per-area-pack").hide();
	 	$("#area-eol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-eol-loader").html('');
		 	$("#out-per-area-final").fadeIn();
	 	},1000);
	  });
	  //pack
	  $("#table-area-eol-pack").on("click",function(){
	  	$("#out-per-area-iso").hide();
	  	$("#out-per-area-4th").hide();
	  	$("#out-per-area-final").hide();
	  	$("#out-per-area-pack").hide();
	 	$("#area-eol-loader").html('<img src="assets/img/ellipsis.gif" alt="loading..."> Please wait...')
	 	setTimeout(function(){
	 		$("#area-eol-loader").html('');
		 	$("#out-per-area-pack").fadeIn();
	 	},1000);
	  });
});

 //put comma
function addCommas(nStr,cntVal){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    if (cntVal == 'val') {
    	return ' $' +x1 + x2;
    };
    return x1 + x2;
}