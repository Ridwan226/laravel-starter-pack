//[Dashboard Javascript]

//Project:	VoiceX Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	var options = {
          series: [{
          name: 'Sales Report',
          data: [50, 40, 100, 70, 150, 50, 130, 100, 140, 160]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
		colors: ['#7f21f3'],
        stroke: {
          curve: 'smooth', 
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct']
        },
        };

        var chart = new ApexCharts(document.querySelector("#sales-report"), options);
        chart.render();

	
	var options = {
	  series: [
		  {
			name: "Download Speed",
			data: [15, 22, 35, 49, 50, 12, 28, 20, 33, 39, 85, 98]
		  },
		  {
			name: "Upload Speed",
			data: [5, 15, 25, 30, 25, 8, 18, 21, 32, 39, 62, 72]
		  },
	  ],
	  chart: {
	  height: 358,
	  type: 'bar',
	  zoom: {
		enabled: false
	  },			  
	  toolbar: {
		show: false,
	  },
	},
	dataLabels: {
	  enabled: false
	},
	colors: ['#673ab7', '#3da643'],
	grid: {			
		show: true,
	},
		
        stroke: {
          show: true,
          width: 3,
          colors: ['transparent']
        },
	  plotOptions: {
		  bar: {
			horizontal: false,
			columnWidth: '40%',
			endingShape: 'rounded',
		  },
	  },

	 legend: {
		show: true,
		 position: 'top',
      	horizontalAlign: 'left', 
	 },
	xaxis: {
	  categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
		labels: {
			show: true,
		},
		axisBorder: {
			show: true,
		},
		axisTicks: {
			show: true,
		},
		},

	yaxis: {
	  labels: {
			show: true,
		}
	},
	};

	var chart = new ApexCharts(document.querySelector("#active_usage"), options);
	chart.render();
	
  
	//dashboard_daterangepicker
	
	if(0!==$("#dashboard_daterangepicker").length) {
		var n=$("#dashboard_daterangepicker"),
		e=moment(),
		t=moment();
		n.daterangepicker( {
			startDate:e, endDate:t, opens:"left", ranges: {
				Today: [moment(), moment()], Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")], "Last 7 Days": [moment().subtract(6, "days"), moment()], "Last 30 Days": [moment().subtract(29, "days"), moment()], "This Month": [moment().startOf("month"), moment().endOf("month")], "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}
		, a),
		a(e, t, "")
	}
	function a(e, t, a) {
		var r="",
		o="";
		t-e<100||"Today"==a?(r="Today:", o=e.format("MMM D")): "Yesterday"==a?(r="Yesterday:", o=e.format("MMM D")): o=e.format("MMM D")+" - "+t.format("MMM D"), n.find(".subheader_daterange-date").html(o), n.find(".subheader_daterange-title").html(r)
	}
	
}); // End of use strict



  
             

