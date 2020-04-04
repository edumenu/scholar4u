$().ready(function() {
    $sidebar = $('.sidebar');
    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');

    window_width = $(window).width();

    // Init Datetimepicker
        $('.datepicker').datetimepicker({
            format: 'MM/DD/YYYY',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });

        $('.timepicker').datetimepicker({
            //          format: 'H:mm',    // use this format if you want the 24hours timepicker
            format: 'h:mm A', //use this format if you want the 12hours timpiecker with AM/PM toggle
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });

    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('show');
        }

    }

    /*********** switch button ************/
    $('#militarySwitch').on('switchChange.bootstrapSwitch',function () {
      var check = $('.bootstrap-switch-on');
      if(check.length == 1){
        $("input[name=military]").val("yes");
      }
  });

});

/********** Pie chart for dashboard ************/
// var dataPerformance = {
//   labels: ['9pm', '2am', '8am', '2pm', '8pm'],
//   series: [
//     [1, 6, 8, 7, 4, 7, 8, 12, 16, 17, 14, 13]
//   ]
// };

// var optionsPerformance = {
//   showPoint: false,
//   lineSmooth: true,
//   axisX: {
//     showGrid: false,
//     showLabel: true
//   },
//   axisY: {
//     offset: 40,
//   },
//   low: 0,
//   high: 20
// };

// Chartist.Line('#chartPerformance', dataPerformance, optionsPerformance);


/***********  Vetcor map  **************/
var mapData = {
       "AU": 760,
       "BR": 550,
       "CA": 120,
       "DE": 1300,
       "FR": 540,
       "GB": 690,
       "GE": 200,
       "IN": 200,
       "RO": 600,
       "RU": 300,
       "US": 2920,
   };

   $('#worldMap').vectorMap({
       map: 'world_mill_en',
       backgroundColor: "transparent",
       regionStyle: {
           initial: {
               fill: '#e4e4e4',
               "fill-opacity": 0.9,
               stroke: 'none',
               "stroke-width": 0,
               "stroke-opacity": 0
           }
       },

       series: {
           regions: [{
               values: mapData,
               scale: ["#AAAAAA","#444444"],
               normalizeFunction: 'polynomial'
           }]
       },
   });

   /********** Graph area **************/
   // var dataSales = {
   //   labels: ['2009', '2010', '2011', '2012', '2013', '2014', '2015'],
   //   series: [
   //     [287, 385, 490, 492, 554, 586, 698, 695, 752, 788, 846, 944],
   //     [67, 152, 143, 240, 287, 335, 435, 437, 539, 542, 544, 647],
   //     [23, 113, 67, 108, 190, 239, 307, 308, 439, 410, 410, 509]
   //   ]
   // };
   //
   // var optionsSales = {
   //   lineSmooth: false,
   //   axisY: {
   //     offset: 40
   //   },
   //   low: 0,
   //   high: 1000
   // };
   //
   // Chartist.Line('#chartSales', dataSales, optionsSales);

   /**********   Calendar  ***************/
   $(function() {

  // page is now ready, initialize the calendar...

  $('#fullCalendar').fullCalendar({
    header: {
     left: 'title',
     center: 'month,agendaWeek,agendaDay',
     right: 'prevYear,prev,next,nextYear'
     },
   });

  });


   /**************  Data tables  ************/
       $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        if ($tr.hasClass('child')) {
            $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
        alert('You clicked on Like button');
    });

  /***************  Update message  ********************/
  function showNotification(from, align, message){
      $.notify({
          icon: "pe-7s-check",
          message: "<h2>" + message + "</h2>"

        },{
            type: 'success',
            timer: 1000,
            delay: 3000,
            allow_dismiss: false,
            placement: {
                from: from,
                align: align
            }
        });
    }

   /************* Logout NOtification  *********************/
   function showSwal(){
      swal({
              title: 'Are you sure you want to logout?',
              type: 'error',
              showCancelButton: true,
              confirmButtonText: 'Yes',
              cancelButtonText: 'No',
              confirmButtonClass: "btn btn-danger btn-fill",
              cancelButtonClass: "btn btn-info btn-fill",
              buttonsStyling: false
          }).then(function() {

            window.location.href = 'http://scholar4u.me/logout';
            event.preventDefault();
            document.getElementById('logout-form').submit();

          }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'

          });
    }

  $("#logoutButton").on('click', function(){
         showSwal();
    });

