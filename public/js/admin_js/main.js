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
       "GB": 690,
       "US": 2920,
       "AU": 760,
   };

   $('#worldMap').vectorMap({
       map: 'world_mill_en',
       backgroundColor: "transparent",
       markersSelectable: true,
       regionStyle: {
           initial: {
               fill: '#e4e4e4',
               "fill-opacity": 0.9,
               stroke: 'none',
               "stroke-width": 0,
               "stroke-opacity": 0
           },
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
       today = new Date();
       y = today.getFullYear();
       m = today.getMonth();
       d = today.getDate();

  // page is now ready, initialize the calendar...
  $('#fullCalendar').fullCalendar({
      header: {
          left: 'title',
          center: 'month,agendaWeek,agendaDay',
          right: 'prev,next,today'
      },
      defaultDate: today,
      selectable: true,
      selectHelper: true,
      // titleFormat: {
      //     month: 'MMMM YYYY', // September 2015
      //     week: "MMMM D YYYY", // September 2015
      //     day: 'D MMM, YYYY'  // Tuesday, Sep 8, 2015
      // },
      views: {
          // week:{ titleFormat: "DD MMMM YYYY" },
          month: {
              titleFormat: 'MMMM YYYY'
          }, // September 2015
          week: {
              titleFormat: "MMMM D YYYY"
          }, // September 2015
          day: {
              titleFormat: 'D MMM, YYYY'
          } // Tuesday, Sep 8, 2015
      },
      select: function(start, end) {
          // Show the Sweet Alert modal with an input
          swal({
              title: 'Create an Event',
              html: '<br><input class="form-control" placeholder="Event Title" id="input-field">',
              showCancelButton: true,
              confirmButtonText: 'Yes',
              confirmButtonClass: "btn btn-info btn-fill",
              cancelButtonClass: "btn btn-danger btn-fill",
          }).then(function() {
              var eventData;
              event_title = $('#input-field').val();

              if (event_title) {
                  eventData = {
                      title: event_title,
                      start: start,
                      end: end
                  };
                  $('#fullCalendar').fullCalendar('renderEvent', eventData, true); // stick? = true
              }

              $('#fullCalendar').fullCalendar('unselect');

          }, function(dismiss) {
              // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
          });
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events


      // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
      events: [
          {
          title: 'All Day Event',
          start: new Date(y, m, 1)
          },
          {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d - 4, 6, 0),
              allDay: false,
              className: 'event-blue'
          },
          {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d + 3, 6, 0),
              allDay: false,
              className: 'event-blue'
          },
          {
              title: 'Meeting',
              start: new Date(y, m, d - 1, 10, 30),
              allDay: false,
              className: 'event-green'
          },
          {
              title: 'Lunch',
              start: new Date(y, m, d + 7, 12, 0),
              end: new Date(y, m, d + 7, 14, 0),
              allDay: false,
              className: 'event-red'
          },
          {
              title: 'LBD Launch',
              start: new Date(y, m, d - 2, 12, 0),
              allDay: true,
              className: 'event-azure'
          },
          {
              title: 'Birthday Party',
              start: new Date(y, m, d + 1, 19, 0),
              end: new Date(y, m, d + 1, 22, 30),
              allDay: false,
          },
          {
              title: 'Click for Creative Tim',
              start: new Date(y, m, 21),
              end: new Date(y, m, 22),
              url: 'http://www.creative-tim.com/',
              className: 'event-orange'
          },
          {
              title: 'Click for Google',
              start: new Date(y, m, 23),
              end: new Date(y, m, 23),
              url: 'http://www.creative-tim.com/',
              className: 'event-orange'
          }
      ]
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

   /************** Show modal *****************/
   $("#postDelete").on('click', function(){
       console.log("Delete clicked!");
   });

