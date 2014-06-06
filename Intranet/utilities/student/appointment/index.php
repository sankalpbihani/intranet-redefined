<?php
    include '../header.php';
?>

<html>
    <head>
        <link href="../styles/layout.css" rel="stylesheet">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <link href="css/dot-luv/jquery-ui-1.10.4.custom.css" rel="stylesheet">
        
    </head>
    
    <body>  
        <div class='col-sm-6'>
            <div class="panel panel-primary">
                <div class="panel-heading">     
                    <h3 class="panel-title">Sent Requests</h3> 
                </div>
                <div class="list-group" id="sent">
                    
                </div>
            </div>
        </div>
        
        <div class='col-sm-6'>
            <div class="panel panel-primary">
                <div class="panel-heading">     
                    <h3 class="panel-title">Recieved Requests</h3>
                </div>
                <div class="list-group" id="recieved">
                
                </div>
            </div>
        </div>
        
        <span class="clearfix"></span>
        
        <div class="container">
            <div class='col-sm-2'></div>
            <div class='col-sm-8'>
            <div class="panel panel-primary">
                <div class="panel-heading">     
                    <h3 class="panel-title">New Request</h3>
                </div>
                <div class="list-group" id="request">
                    <br/>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="user2" class="col-sm-2 control-label">Username: </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="user2" placeholder="Username">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title: </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="title" placeholder="Title">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message: </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="message" placeholder="Message">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="start" class="col-sm-2 control-label">From: </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="start" readonly="true" placeholder="Start Time">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="end" class="col-sm-2 control-label">To: </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="end" readonly="true" placeholder="End Time">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="custom-request btn btn-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <span class="clearfix"></span>
        </div>
        
        
        <!--<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>-->
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="js/timepicker.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
            function test() {
                alert("Ready");
                $('.custom-delete').on('click',function(e){
                    e.preventDefault();
                    var dataid = $(this).attr('data-id');
                    $.post(
                        "delete.php", 
                        {
                            id: dataid
                        },
                        function (resp) {
                            bootbox.alert(resp);
                            if(resp=="Request Deleted") 
                                $("span[data-id='"+dataid+"']").remove();
                        }
                    );
                });
                
                $('.custom-approve').on('click',function(e){
                    e.preventDefault();
                    var dataid = $(this).attr('data-id');
                    var comment = $("input[data-id='"+dataid+"']").val();
                    $.post(
                        "approve.php", 
                        {
                            id: dataid,
                            comments: comment
                        },
                        function (resp) {
                            bootbox.alert(resp);
                            if(resp=="Request Approved")
                                $("span[data-id='"+dataid+"']").css("background-color", "lightgreen");
                        }
                    );
                });
                
                $('.custom-decline').on('click',function(e){
                    e.preventDefault();
                    var dataid = $(this).attr('data-id');
                    var comment = $("input[data-id='"+dataid+"']").val();
                    $.post(
                        "decline.php", 
                        {
                            id: dataid,
                            comments: comment
                        },
                        function (resp) {
                            bootbox.alert(resp);
                            if(resp=="Request Declined")
                                $("span[data-id='"+dataid+"']").css("background-color", "pink");
                        }
                    );
                });
            }
        
            function update(callback) {
                $('#sent').html("");
                $('#recieved').html("");
                $.post(
                    "list.php",
                    function(resp) {
                        var arr = $.parseJSON(resp);
                        
                        $.each(arr.sent, function(key, value){
                            $('#sent').append("<span style='border: 2px solid blue' data-id='"+value.id+"' class='list-group-item'><span><b>Message = </b>" + value.title+" : "+value.message+"</span><br/><span><b>To = </b>"+value.user2+"<button data-id='"+value.id+"' type='button' class='custom-delete btn btn-xs btn-primary pull-right'>Delete</button><br/><b>Time = </b>"+value.start+" - "+value.end+"</span><br/><span><b>Comments: </b> "+value.comments+"</span><span style='opacity: "+value.seen/2+"' class='pull-right'>Seen</span></span>");
                            if(value.approved == 1) {
                                $("span[data-id='"+value.id+"']").css("background-color", "lightgreen");
                            } else if(value.approved == 2) {
                                $("span[data-id='"+value.id+"']").css("background-color", "pink");
                            }
                        });
                        
                        $.each(arr.recieved, function(key, value){
                            $('#recieved').append("<span style='border: 2px solid blue' data-id='"+value.id+"' class='list-group-item'><span><b>Message = </b>"+value.title+" : "+value.message+"</span><button data-id='"+value.id+"' type='button' class='custom-approve btn btn-xs btn-success pull-right'>Approve</button><br/><span><b>From = </b>"+value.user1+"<br/><b>Time = </b>"+value.start+" - "+value.end+"</span><button data-id='"+value.id+"' type='button' class='custom-decline btn btn-xs btn-danger pull-right'>Decline</button><br/><input type='text' data-id='" + value.id + "' class='form-control custom-comments' value='"+value.comments+"' id='comments' placeholder='Comments'><span class='clearfix'></span></span>");
                            if(value.approved == 1) {
                                $("span[data-id='"+value.id+"']").css("background-color", "lightgreen");
                            } else if(value.approved == 2) {
                                $("span[data-id='"+value.id+"']").css("background-color", "pink");
                            }
                        });
                    }
                );
                
                $.post("temp.php", function(){
                    test();
                });
            }
            
            $(document).ready(function(){
                update();
                
                $('.custom-request').on('click', function(e){
                    e.preventDefault();
                });
                
                $("#start").datetimepicker();
                $("#end").datetimepicker();
                
                $('.custom-request').on('click', function(e){
                    e.preventDefault();
                    
                    var dataid = $(this).attr('data-id');
                    $.post(
                        "request.php", 
                        {
                            user2: $('#user2').val(),
                            title: $('#title').val(),
                            message: $('#message').val(),
                            start: $('#start').val(),
                            end: $('#end').val()
                        },
                        function (resp) {
                            
                            if(resp=="Request Sent")
                                update();
                        }
                    );
                });
            });
        </script>
    </body>
</html>

<?php
    include '../footer.php';
?>