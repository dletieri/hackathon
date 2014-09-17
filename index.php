<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
       
	<script type="text/javascript">
	  setTimeout(function(){
	    location = ''
	  },10000)
	</script>
       
 <script src="js/jquery-1.11.1.min.js"></script>
        
        <script>
            $.ajax({
                url:"http://10.45.69.171/hackathon/housestatus.php",
                type:"GET",
                data:{act : "read"}}).done(
                function(result){
                    if (result == "0") {
                        if ($("#img_on_off img").hasClass("on")) {
                            $("#img_on_off img").removeClass("on").addClass("off");
                        }
                    } else {
                        if ($("#img_on_off img").hasClass("off")) {
                            $("#img_on_off img").removeClass("off").addClass("on");
                        }
                    }

                    $("#img_on_off img").attr("src", "img/on_off.jpg");
            });
        </script>
        
        <style>
            #body {
                width: 570px;
            }
            
            #img_on_off {
                width: 190px; 
                height: 190px; 
                overflow: hidden;
                float: right;
            }
            
            img.on {
                margin: 0;
            }
            
            img.off {
                margin: -198px 0 0 -198px;
            }
        </style>
    </head>
    <body>
        <div id="body">
            <img src="img/house.jpeg" width="380px" />
            <div id="img_on_off"><img class="on" /></div>
        </div>
    </body>    
</html>
