<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href="styles.css" />
        <title>Gambling</title>
    </head>
    <body>
        <div id="naslov">
            <h1 style="color:white;">REZULTATI</h1>
        </div>
        <div id="konec">
		<?php
       
		
		if($_SESSION["vsota3"]<=$_SESSION["vsota1"] && $_SESSION["vsota1"]>=$_SESSION["vsota2"]){
			if($_SESSION["vsota1"]==$_SESSION["vsota2"] && $_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "Zmagovalci so:",$_SESSION["i1"]," ",$_SESSION["i2"]," ",$_SESSION["i3"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota2"]){
				echo "Zmagovalca sta: ",$_SESSION["i1"]," ",$_SESSION["i2"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "Zmagovalca sta: ",$_SESSION["i1"]," ",$_SESSION["i3"];
			}
			else{
				echo "Zmagovalec je: ",$_SESSION["i1"];	
			}
		}
	
		elseif($_SESSION["vsota2"]>=$_SESSION["vsota3"]){
			if($_SESSION["vsota2"]>$_SESSION["vsota1"]){
				echo "Zmagovalec je: ", $_SESSION["i2"];	
			}
			else{
				echo "Zmagovalca sta: ",$_SESSION["i2"]," ",$_SESSION["i3"];
			}
		}
		
		else{
			echo "Zmagovalec je: ",$_SESSION["i3"];
		}
		
        //echo $_SESSION["vsota1"]," ",$_SESSION["vsota2"]," ",$_SESSION["vsota3"];
        ?>
		</div>
        
        
    </body>
        <!--skripta za redirect čez 15 sek-->
        <script>
        function redirTimer() {self.setTimeout ("self.location.href='index.php';",10000);} 
        redirTimer();

        var seconds_left = 10;
        setInterval(function() {
            document.getElementById('cas').innerHTML = --seconds_left;}, 1000);
        </script>

</html> 