import $ from 'jquery';

console.log('js');

$(document).ready( function() { 


    google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
    });
    google.charts.setOnLoadCallback(drawRegionsMap);
    

    function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700],
          ['Algeria', 600],
          ['Morocco', 600],
          ['Tunisia', 600],
          ['Libya', 600],
          ['Israel', 600],
          ['Egypt', 600],
          ['Uruguay', 600],
          ['Paraguay', 600],
          ['Guyana', 600],
          ['Suriname', 600],
          ['Venezuela', 600],
          ['Mexico', 600],
          ['Japan', 600],
          ['China', 600],
          ['Turkmenistan', 600],
          ['Iran', 600],
        ]);

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        


          // The select handler. Call the chart's getSelection() method
          function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            if (selectedItem) {
              var value = data.getValue(selectedItem.row, 0);
              console.log('The user selected ' + value);
            }
          }

          // Listen for the 'select' event, and call my function selectHandler() when
          // the user selects something on the chart.
          google.visualization.events.addListener(chart, 'select', selectHandler);

          chart.draw(data);

    }



  //   google.visualization.events.addListener(chart, 'select', function() {
  //             // var selectedItem = chart.getSelection()[0];
  //             // if (selectedItem) {
  //             //   var country = data.getValue(selectedItem.row, 0);
  //               console.log("country");
  // });

});


            
            


        