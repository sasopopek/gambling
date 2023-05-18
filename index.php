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
            <h1 style="color:white;">GAMBLING ROOM</h1>
        </div>

        <div id="glavni">
            <form action="igra.php" name="forma" method="post">
                <div id="igrac">               
                    <div class="igralec">IGRALEC 1<br /><br /> Ime: <input type="text" name="ime1"  autofocus/></div>
                    <div class="igralec">IGRALEC 2<br /><br /> Ime: <input type="text" name="ime2"  autofocus/></div>
                    <div class="igralec">IGRALEC 3<br /><br /> Ime: <input type="text" name="ime3"  autofocus/></div>
                </div>
                    <div id="izbira">Število kock
                            <select name="stkock">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            </select>
                                <br />
                        <input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="IGRAJ"/>
                 </div>
                

            </form>
        </div>
        
        
        
    </body>
    <script>
        //preveri če so vnosna polja prazna
        function isEmpty(){
        if(document.forms['forma'].ime1.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == "")
        {
            alert("Vnesi vsa imena!");
            return false;
        }
            return true;
        }
    </script>
</html> 