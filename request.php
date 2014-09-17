<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        
        <script src="js/jquery-1.11.1.min.js"></script>
        
        <style>
            #body {
                width: 570px;
            }
            
            #result {
                float: left;
                width: 380px;
                min-height: 380px;
                background-image: url('img/smartphone.jpg');
                background-size: 380px  ;
            }
            #result>div{
                float: left;
                width: 160px;
                min-height: 240px;
                margin: 63px 0 0 90px;
                overflow: hidden;
            }
            
            #request {
                width: 190px; 
                float: right;
            }
            #request a {
                display: block; 
                text-decoration: none;
                color: #666;
                padding: 2px;
                margin: 1px;
            }
            #request a:hover {
                background-color: #CCC; 
                color: #000;
            }
            
        </style>
    </head>
    <body>
        <div id="body">
            <div id="result">
                <div>
                    <img width="160px" />
                    <div id="name"></div>
                    <div id="why"></div>
                </div>
            </div>
            
            <div id="request">
                <a href="#Leave" id="leave">Leave the office</a>
                <a href="#Go" id="go">Go to home</a>
                <a href="#Still" id="still">Still go to home</a>
                <a href="#Search" id="search">Search a restaurant</a>
                <a href="#Change" id="change">Change the way</a>
                <a href="#Restaurant" id="restaurant">Going to restaurant</a>
            </div>
        </div>

        <script>
            $('#leave').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    data:{lat : "-22.0632152", 
                          lon : "-47.8761187", 
                          device : "motorola_XT1033_0424528886", 
                          cust : "678675" }
                          }).done(
                    function(result){
                        $("#result img").attr("src", "img/maps.jpeg")
                                        .attr("height", "240px");
                    });
                });
            $('#go').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    data:{lat : "-22.0632152", 
                          lon : "-47.8761187", 
                          device : "motorola_XT1033_0424528886", 
                          cust : "678675" }
                          }).done(
                    function(result){
                        $("#result img").attr("src", "img/maps.jpeg")
                                        .attr("height", "240px");
                    });
                });
            $('#still').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    data:{lat : "-22.0632152", 
                          lon : "-47.8761187", 
                          device : "motorola_XT1033_0424528886", 
                          cust : "678675" }
                          }).done(
                    function(result){
                        $("#result img").attr("src", "img/maps.jpeg")
                                        .attr("height", "240px");
                    });
                });
            $('#search').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    dataType: "json",
                    data:{query: "restaurant"}}).done(
                    function(result){
                    $.each(result, function(key, val){
                        if (key == "img") {
                            $("#result img").attr("src", val);
                        } else if (key == "name") {
                            $("#result #name").html("NAME: " + val);
                        } else if (key == "why") {
                            $("#result #why").html("WHY? " + val);
                        }
                    })
                    
                    });
                });
            $('#change').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    data:{lat : "-22.0632152", 
                          lon : "-47.8761187", 
                          device : "motorola_XT1033_0424528886", 
                          cust : "678675" }
                          }).done(
                    function(result){
                        $("#result img").attr("src", "img/maps.jpeg")
                                        .attr("height", "240px");
                    });
                });
            $('#restaurant').click(function(){
                $("#result img").removeAttr("src")
                                .attr("height", "");
                $("#result #name").html("");
                $("#result #why").html("");

                $.ajax({
                    url:"http://10.45.69.171/hackathon/iot_integration_suit.php",
                    type:"GET",
                    data:{lat : "-22.0632152", 
                          lon : "-47.8761187", 
                          device : "motorola_XT1033_0424528886", 
                          cust : "678675" }
                          }).done(
                    function(result){
                        $("#result img").attr("src", "img/maps.jpeg")
                                        .attr("height", "240px");
                    });
                });
        </script>
    </body>    
</html>