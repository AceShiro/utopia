<footer>
	
	<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>



    @if(Request::is('golds'))
    <script>
    //Flot Multiple Axes Line Chart
	$(function() {
	    var goldvalue = [
	    @foreach($golds as $gold)
	    	[{{strtotime($gold->created_at)}} * 1000, {{ $gold->value }}],
	    @endforeach
	    ];

	    function euroFormatter(v, axis) {
	        return v.toFixed(axis.tickDecimals) + "€";
	    }

	    function doPlot(position) {
	        $.plot($("#flot-line-chart-gold"), [{
	            data: goldvalue,
	            label: "Gold value (Pa)"
	        }], {
	            xaxes: [{
	                mode: 'time',
	                timeformat: "%y/%m/%d"
	            }],
	            yaxes: [{
	                min: 0
	            }, {
	                // align if we are to the right
	                alignTicksWithAxis: position == "right" ? 1 : null,
	                position: position,
	            }],
	            legend: {
	                position: 'sw'
	            },
	            grid: {
	                hoverable: true //IMPORTANT! this is needed for tooltip to work
	            },
	            tooltip: true,
	            tooltipOpts: {
	                content: "%s for %x was %y",
	                xDateFormat: "%y-%m-%d %H:%M",

	                onHover: function(flotItem, $tooltipEl) {
	                    // console.log(flotItem, $tooltipEl);
	                }
	            }

	        });
	    }

	    doPlot("right");

	    $("button").click(function() {
	        doPlot($(this).text());
	    });
	});
    </script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#gold-table').DataTable({
            responsive: true,
            "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]]
        });
    });
    </script>
    @endif

</footer>