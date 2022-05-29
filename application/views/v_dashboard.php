<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row ">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Grafik Sensor CO
                            </div>

                            <div class="panel-body">
                                <canvas id="myChart"></canvas>
                                <script type="text/javascript">
                                var canvas = document.getElementById('myChart');
                                var data = {
                                    labels: [
                                        <?php 
        foreach($data_tanggal as $tanggal){ ?>
                                        <?php echo '"'.$tanggal->tanggal_input.'",';?>
                                        <?php }
            ?>
                                    ],

                                    datasets: [{
                                            label: "Co",
                                            fill: true,
                                            backgroundColor: "rgba(52, 233, 43, 0.2)",
                                            borderColor: "rgba(52, 233, 43, 1)",
                                            lineTension: 0.5,


                                            data: [
                                                <?php 
        foreach($data_co as $co){ ?>
                                                <?php echo '"'.$co->nilai_co.'",';?>
                                                <?php }
            ?>
                                            ]
                                        }

                                    ]

                                };

                                var option = {
                                    showLines: true,
                                    animation: {
                                        duration: 0
                                    }
                                };

                                var myLineChart = Chart.Line(canvas, {
                                    data: data,
                                    options: option
                                });
                                </script>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!--end row-->
        <div class="row ">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Grafik Sensor NO2
                            </div>

                            <div class="panel-body">
                                <canvas id="myChart2"></canvas>
                                <script type="text/javascript">
                                var canvas = document.getElementById('myChart2');
                                var data = {
                                    labels: [
                                        <?php 
        foreach($data_tanggal as $tanggal){ ?>
                                        <?php echo '"'.$tanggal->tanggal_input.'",';?>
                                        <?php }
            ?>
                                    ],

                                    datasets: [{
                                            label: "No",
                                            fill: true,
                                            backgroundColor: "rgba(52, 233, 43, 0.2)",
                                            borderColor: "rgba(52, 233, 43, 1)",
                                            lineTension: 0.5,


                                            data: [
                                                <?php 
        foreach($data_no as $no){ ?>
                                                <?php echo '"'.$no->nilai_no.'",';?>
                                                <?php }
            ?>
                                            ]
                                        }

                                    ]

                                };

                                var option = {
                                    showLines: true,
                                    animation: {
                                        duration: 0
                                    }
                                };

                                var myLineChart = Chart.Line(canvas, {
                                    data: data,
                                    options: option
                                });
                                </script>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!--end row-->


    </div>
</div>
<!--end page wrapper -->