<?php
$bulan=array();
$berat=array();
$diameter=array();
$tinggi=array();
$target=array();
if ($diagram->num_rows() > 0)
    {
       foreach ($diagram->result() as $row)
       {
           array_push($bulan,$row->bulan);
           array_push($berat,$row->rata_berat);
           array_push($diameter,$row->rata_diameter);
           array_push($tinggi,$row->rata_tinggi);
       }
    }
if ($std->num_rows() > 0)
    {
       foreach ($std->result() as $row)
       {
           $target=array(
               'berat'=>$row->std_berat,
               'tinggi'=>$row->std_tinggi,
               'diameter'=>$row->std_diameter,
               'lama_penanaman'=>$row->lama_penanaman,
               'jenis_tebu'=>$row->jenis_tebu
           );
       }
    }
?>
     <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart<?php echo $id?>").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
          labels: [<?php
                $i=1;
                foreach($bulan as $val){
                    echo "'".$val."'";
                    if($i<count($bulan)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>],
          datasets: [
            {
              label: "berat",
              fillColor: "rgba(240, 80, 80,0.3)",
              strokeColor: "rgba(240, 80, 80, 1)",
              pointColor: "rgba(240, 80, 80, 1)",
              pointStrokeColor: "rgba(240, 80, 80, 1)",
              pointHighlightFill: "rgba(240, 80, 80, 1)",
              pointHighlightStroke: "rgba(240, 80, 80, 1)",
              data: [<?php
                $i=1;
                foreach($berat as $val){
                    echo $val;
                    if($i<count($berat)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            },
              {
              label: "tinggi",
              fillColor: "rgba(80, 240, 80, 0.3)",
              strokeColor: "rgba(80, 240, 80, 1)",
              pointColor: "rgba(80, 240, 80, 1)",
              pointStrokeColor: "rgba(80, 240, 80, 1)",
              pointHighlightFill: "rgba(80, 240, 80, 1)",
              pointHighlightStroke: "rgba(80, 240, 80, 1)",
              data: [<?php
            $i=1;
                foreach($tinggi as $val){
                    echo $val;
                    if($i<count($tinggi)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            },
            {
              label: "diameter",
              fillColor: "rgba(80,80,240,0.3)",
              strokeColor: "rgba(80,80,240,1)",
              pointColor: "rgba(80,80,240,1)",
              pointStrokeColor: "rgba(80,80,240,1)",
              pointHighlightFill: "rgba(80,80,240,1)",
              pointHighlightStroke: "rgba(80,80,240,1)",
              data: [<?php
            $i=1;
                foreach($diameter as $val){
                    echo $val;
                    if($i<count($diameter)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            },
              {
              label: "target_berat",
              fillColor: "rgba(240, 240, 80, 0)",
              strokeColor: "rgba(240, 240, 80, 1)",
              pointColor: "rgba(240, 240, 80, 1)",
              pointStrokeColor: "rgba(240, 240, 80, 1)",
              pointHighlightFill: "rgba(240, 240, 80, 1)",
              pointHighlightStroke: "rgba(240, 240, 80, 1)",
              data: [<?php
            $i=1;
                foreach($bulan as $val){
                    echo $target['berat'];
                    if($i<count($bulan)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            }
              ,
              {
              label: "target_tinggi",
              fillColor: "rgba(240, 80, 240, 0)",
              strokeColor: "rgba(240, 80, 240, 1)",
              pointColor: "rgba(240, 80, 240, 1)",
              pointStrokeColor: "rgba(240, 80, 240, 1)",
              pointHighlightFill: "rgba(240, 80, 240, 1)",
              pointHighlightStroke: "rgba(240, 80, 240, 1)",
              data: [<?php
            $i=1;
                foreach($bulan as $val){
                    echo $target['tinggi'];
                    if($i<count($bulan)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            },
              {
              label: "target_diameter",
              fillColor: "rgba(80, 240, 240, 0)",
              strokeColor: "rgba(80, 240, 240, 1)",
              pointColor: "rgba(80, 240, 240, 1)",
              pointStrokeColor: "rgba(80, 240, 240, 1)",
              pointHighlightFill: "rgba(80, 240, 240, 1)",
              pointHighlightStroke: "rgba(80, 240, 240, 1)",
              data: [<?php
            $i=1;
                foreach($bulan as $val){
                    echo $target['diameter'];
                    if($i<count($bulan)){
                        echo ',';
                        $i++;
                    }
                }
            
            ?>]
            }
          ]
        };

        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: true,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);
          
          
      });
    </script>