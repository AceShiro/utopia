<footer>
	
	<!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../vendor/flot/excanvas.min.js"></script>
    <script src="../../vendor/flot/jquery.flot.js"></script>
    <script src="../../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../../vendor/flot/jquery.flot.time.js"></script>
    <script src="../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>


<!-- SCRIPT A OPTIMISER, ICI C'EST DE LA MERDE -->
    @if(Request::is('golds') || Request::is('/'))
    <script>
    //Flot Multiple Axes Line Chart
	$(function() {
	    var goldvalue = [
	    @foreach($golds as $gold)
	    	[{{strtotime($gold->time)}} * 1000, {{ $gold->value }}],
	    @endforeach
	    ];

	    var epochT = (new Date).getTime();

	    $("#whole").click(function () {
			$.plot("#flot-line-chart-gold", [{
	            data: goldvalue,
	            label: "La valeur de l'Or"
	        }], {
				xaxes: [{
	                mode: 'time',
	                timeformat: "%d/%m/%y"
	            }],
				grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s le %x était de %y Pa",
	                xDateFormat: "%d-%m-%y à %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            },
	            series: {
			        lines: { show: true },
			        points: { show: true }
			    }
			});
		});

	    $("#lastday").click(function () {
			$.plot("#flot-line-chart-gold", [{
	            data: goldvalue,
	            label: "La valeur de l'Or"
	        }], {
				xaxis: {
					mode: "time",
					tickSize: [1, "hour"],
					min: epochT - 86400000,
					max: epochT,
				},
				yaxis: {
					@foreach($golds->sortBy('created_at') as $gold)
						min: {{ $gold->value }} - 5,
						max: {{ $gold->value }} + 5,
					@endforeach
				},
				grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s le %x était de %y Pa",
	                xDateFormat: "%d-%m-%y à %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            },
	            series: {
			        lines: { show: true },
			        points: { show: true }
			    }
			});
		});

		$("#lastweek").click(function () {
			$.plot("#flot-line-chart-gold", [{
	            data: goldvalue,
	            label: "La valeur de l'Or"
	        }], {
				xaxis: {
					mode: "time",
					tickSize: [1, "day"],
					min: epochT - 86400000*7,
					max: epochT,
				},
				grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s le %x était de %y Pa",
	                xDateFormat: "%d-%m-%y à %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            },
	            series: {
			        lines: { show: true },
			        points: { show: true }
			    }
			});
		});

		$("#lastmonth").click(function () {
			$.plot("#flot-line-chart-gold", [{
	            data: goldvalue,
	            label: "La valeur de l'Or"
	        }], {
				xaxis: {
					mode: "time",
					tickSize: [1, "day"],
					min: epochT - 86400000*30,
					max: epochT,
				},
				grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s le %x était de %y Pa",
	                xDateFormat: "%d-%m-%y à %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            },
	            series: {
			        lines: { show: true },
			        points: { show: true }
			    }
			});
		});

	    function doPlot(position) {
	        $.plot($("#flot-line-chart-gold"), [{
	            data: goldvalue,
	            label: "La valeur de l'Or"
	        }], {
	            xaxes: [{
	                mode: 'time',
	                timeformat: "%d/%m/%y"
	            }],
	            legend: {
	                position: 'sw'
	            },
	            grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s le %x était de %y Pa",
	                xDateFormat: "%d-%m-%y à %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            },
	            series: {
			        lines: { show: true },
			        points: { show: true }
			    }

	        });
	    }


	    doPlot("right");
	});
    </script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#gold-table').DataTable({
            responsive: true,
            "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
            "order": [[ 0, "desc" ]]
        });
    });
    </script>
    @endif

</footer>