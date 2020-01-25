/********** Pie chart for dashboard ************/
var dataPerformance = {
  labels: ['9pm', '2am', '8am', '2pm', '8pm'],
  series: [
    [1, 6, 8, 7, 4, 7, 8, 12, 16, 17, 14, 13]
  ]
};

var optionsPerformance = {
  showPoint: false,
  lineSmooth: true,
  axisX: {
    showGrid: false,
    showLabel: true
  },
  axisY: {
    offset: 40,
  },
  low: 0,
  high: 20
};

Chartist.Line('#chartPerformance', dataPerformance, optionsPerformance);


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
   var dataSales = {
     labels: ['2009', '2010', '2011', '2012', '2013', '2014'],
     series: [
       [287, 385, 490, 492, 554, 586, 698, 695, 752, 788, 846, 944],
       [67, 152, 143, 240, 287, 335, 435, 437, 539, 542, 544, 647],
       [23, 113, 67, 108, 190, 239, 307, 308, 439, 410, 410, 509]
     ]
   };

   var optionsSales = {
     lineSmooth: false,
     axisY: {
       offset: 40
     },
     low: 0,
     high: 1000
   };

   Chartist.Line('#chartSales', dataSales, optionsSales);

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
