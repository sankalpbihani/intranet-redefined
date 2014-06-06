<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <link href="css/dot-luv/jquery-ui-1.10.4.custom.css" rel="stylesheet">
        <meta http-equiv="Cache-Control" content="no-store" />
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse navbar-fixed" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="appointment.php">Appointments</a></li>
                        <li><a href="url-monitoring.php">URL monitoring</a></li>
                        <li class="active"><a href="netaccess.php">Net Access</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <span class="clearfix"></span>
        <br><br><br><br>

        <div id="custom-content">
            <div class="form-group">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="url-path" placeholder="URL">
                </div>
                <div class="col-sm-2">
                    <button type="button" class="custom-visit-url btn btn-info pull-right">Visit</button>
                </div>
            </div>

            <div class="custom-content-loader">
            </div>

        </div> 

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="js/timepicker.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.custom-visit-url').click(function(e) {
                    e.preventDefault();

                    $.post(
                            "netaccess/get.php",
                            {
                                url: $("#url-path").val()
                            },
                    function(resp) {
                        $('.custom-content-loader').html(resp);
                    }
                    )
                });
            });
        </script>

    </body>
</html>