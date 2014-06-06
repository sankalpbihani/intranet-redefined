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
                        <li class="active"><a href="url-monitoring.php">URL monitoring</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <span class="clearfix"></span>
        <br><br><br><br>

        <div id="custom-content">
            <div class='col-sm-7'>
                <div class="panel panel-primary">
                    <div class="panel-heading">     
                        <h3 class="panel-title">URLs<button type="button" class="custom-refresh btn-xs btn btn-success pull-right">Refresh</button></h3>
                    </div>
                    <div class="list-group" id="url-list">

                    </div>
                </div>
            </div>

            <div class='col-sm-5'>
                <div class="panel panel-primary">
                    <div class="panel-heading">     
                        <h3 class="panel-title">Add new URL</h3>
                    </div>
                    <div class="list-group">
                        <br/>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-1">
                                </div>
                                <!--<label for="user2" class="col-sm-2 control-label">URL: </label>-->
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="url-title" placeholder="Title">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="url-data" placeholder="URL">
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="custom-add-url btn btn-info pull-right">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <span class="clearfix"></span>
        </div>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="js/timepicker.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
            //upate event handlers and find changed contents
            function test() {
                alert("Ready");
                $('.custom-delete').on('click', function(e) {
                    e.preventDefault();
                    var dataid = $(this).attr('data-id');
                    $.post(
                            "url-monitoring/delete.php",
                            {
                                url: dataid
                            },
                    function(resp) {
                        if (resp == "URL deleted")
                            $("span[data-id='" + dataid + "']").remove();
                        else
                            bootbox.alert(resp);
                    }
                    );
                });

                $.post(
                        "url-monitoring/check.php",
                        function(resp) {
                            if ((resp.substring(0, 1) == "{" || resp.substring(0, 1) == "[") && resp != "")
                            {
                                var changed = $.parseJSON(resp);
                                $.each(changed, function(key, value) {
                                    $("span[data-id='" + key + "']").css('background-color', 'lightblue');
                                });
                            } else {
                                bootbox.alert(resp);
                            }
                        }
                );
            }

            function update() {
                $('#url-list').html("");
                $.post(
                        "url-monitoring/adduser.php"
                        );
                $.post(
                        "url-monitoring/list.php",
                        function(resp) {
                            if ((resp.substring(0, 1) == "{" || resp.substring(0, 1) == "[") && resp != "")
                            {
                                var arr = $.parseJSON(resp);

                                $.each(arr, function(key, value) {
                                    $('#url-list').append("<span style='border: 2px solid blue' data-id='" + key + "' class='list-group-item'><span><b>" + value.title + " = </b>" + key + "</span><button data-id='" + key + "'type='button' class='custom-delete btn btn-xs btn-danger pull-right'>Delete</button></span>");
                                });
                            } else {
                                bootbox.alert(resp);
                            }
                        }
                );

                $.post("url-monitoring/temp.php", function() {
                    test();
                });
            }

            $(document).ready(function() {
                update();

                $('.custom-add-url').on('click', function(e) {
                    e.preventDefault();

                    $.post(
                            "url-monitoring/addurl.php",
                            {
                                url: $('#url-data').val(),
                                title: $('#url-title').val()
                            },
                    function(resp) {
                        if (resp == "URL added")
                            update();
                        else
                            bootbox.alert(resp);
                    }
                    );
                });

                $('.custom-refresh').click(function(e) {
                    e.preventDefault();
                    update();
                });
            });
        </script>
    </div> 
</body>
</html>
