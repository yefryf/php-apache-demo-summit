<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Summit Coretech @Yefry Figueroa</title>
    <style>
        .page
            {position: relative; overflow: hidden; min-height: 100vh; opacity: 0;}
        .page-header
            {text-align: center;}
        .animated
            {animation-duration: 1s; animation-fill-mode: both; opacity: 1;}
        .class-h1
            {font-size: 56px; color: white}
        .font
            {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            /**width: 80%;*/
            margin-left:auto;margin-right:auto;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color: #cccccc;
        }

        tr:nth-child(even) {
            background-color: #cccccc;
        }
    </style>
</head>
<body style="background-color:#1077cfde;">
    <div style="width:800px; margin:0 auto; padding-top: 50px;">
        <div class="page animated">
            <header class="page-header">
                <div class="col-12 font">
                    <h1 class="class-h1">Demo Summit Coretech</h1>
		    <h2 style="color:white; font-weight: 100">Orario attuale:</h2>
		    <h1 class="class-h1">
                <?php
                date_default_timezone_set("Europe/Rome");
                echo "" . date("H:i:s");
			    ?>
		    </h1>
                    <h3 style="color:white; font-weight: 100">La pagina si aggiorna automaticamente ogni: 10 secondi</h3>
                    <p style="padding-top: 50px;"></p>


                    <h2 style="color: #00fff3; font-weight: 200">Informazioni del container:</h2>

                    <table>
                    <tr>
                        <td>Container ID:</td>
                        <td>
                            <?php
                            $containerID= trim(shell_exec("hostname"));
                            echo $containerID;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Container IP:</td>
                        <td>
                            <?php
                            echo $_SERVER['SERVER_ADDR'];
                            ?>
                        </td>
                    </tr>

                    </table>

		     <?php
			 phpinfo();
	         ?>
                </div>
            </header>
        </div>
    </div>
</body>
</html>
