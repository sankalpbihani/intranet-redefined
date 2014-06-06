<html>

    <body>
        <div id="loader" hidden="true"></div>
        
        <div id="main" style="width: 400px;"></div>
        
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('div#loader').load("social/index.php", function(){
                    $('div#main').html(function(){
                        var data = $('.elgg-module-aside').html()
                        $('div#loader').remove();
                        return data;
                    });
                });
            });
        </script>
    </body>

</html>