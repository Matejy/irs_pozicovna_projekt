<!DOCTYPE html> 
<html>
<head>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Titillium+Web" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="blogstyleo.css">
</head>
<body>
    <div>
    <div id="vertpanel">
        <a id="linksv1"> Domov </a>
        <a id="linksv2"> Promo </a> 
        <a id="linksv3"> O mne </a>
        <a id="linksv4"> Kontakt </a> 
        <a id="linksv5"> Login  </a> 
    </div>
    <div id="loginshow">
        <form action="" method="post">
            <p><label>Username</label><input type="text" name="username" value=""  /></p>
            <p><label>Password</label><input type="password" name="password" value=""  /></p>
            <p><label></label><input type="submit" name="submit" value="Login"  /></p>
        </form>
    </div>
    <!--    <div id="floaty">
            <p id="futt">&#9776; Menu</p>
            <div id="underfut">
                <p id="bckfut" style="margin-bottom: 20px;"></p>
                <a id="unda" href="login.php">Login</a>
                <a id="unda" href="#sehead1">Floaty</a>
                <a id="unda" href="#octavia">Octavia</a>
                <a id="unda" href="#felicia">Felicia</a>
                <a id="unda1" href="#contact">Contact</a>
            </div>
        </div> -->
        <div id="bdy">
            <div id="cont">
                <h1 id="header"> Header </h1>
                <h3 id="colu"> Podtitle</h3>
                <p id="para">  Lorem Ipsum je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem Ipsum je štandardným výplňovým textom už od 16. storočia, keď neznámy tlačiar zobral sadzobnicu plnú tlačových znakov a pomiešal ich, aby tak vytvoril vzorkovú knihu. Prežil nielen päť storočí, ale aj skok do elektronickej sadzby, a pritom zostal v podstate nezmenený. Spopularizovaný bol v 60-tych rokoch 20.storočia,
                    Lorem Ipsum je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem Ipsum je štandardným výplňovým textom už od 16. storočia, keď neznámy tlačiar zobral sadzobnicu plnú tlačových znakov a pomiešal ich, aby tak vytvoril vzorkovú knihu. Prežil nielen päť storočí, ale aj skok do elektronickej sadzby, a pritom zostal v podstate nezmenený. Spopularizovaný bol v 60-tych rokoch 20.storočia, </p>
                <a href="#" id="imugelink"><div id="imuge"></div></a>
            </div>
            <div id="cont">
                <h1 id="header"> Header </h1>
                <h3 id="colu"> Podtitle</h3>
                <p id="para">  Lorem Ipsum je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem Ipsum je štandardným výplňovým textom už od 16. storočia, keď neznámy tlačiar zobral sadzobnicu plnú tlačových znakov a pomiešal ich, aby tak vytvoril vzorkovú knihu. Prežil nielen päť storočí, ale aj skok do elektronickej sadzby, a pritom zostal v podstate nezmenený. Spopularizovaný bol v 60-tych rokoch 20.storočia,
                    Lorem Ipsum je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem Ipsum je štandardným výplňovým textom už od 16. storočia, keď neznámy tlačiar zobral sadzobnicu plnú tlačových znakov a pomiešal ich, aby tak vytvoril vzorkovú knihu. Prežil nielen päť storočí, ale aj skok do elektronickej sadzby, a pritom zostal v podstate nezmenený. Spopularizovaný bol v 60-tych rokoch 20.storočia, </p>
                <a href="#" id="imugelink"><div id="imuge"></div> </a>            
            </div>
        </div>
    </div>
    <script>
            var $root = $('html, body');
            $('a[href^="#"]').click(function () {
                $root.animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top
                }, 400);
                return false;
            });
            $("#underfut").hide();
            $(document).ready(function cluc(){
                $('#floaty').on('click');
                    $("#floaty").click(function(){
                        $("#underfut").show(200);
                        $("#futt").hide(400);
                        $('#floaty').unbind('click');
                    });
                    $("#bckfut").click(function(){
                        $("#underfut").hide(200);
                        $("#futt").show(400);
                        $('#floaty').bind('click', cluc);
                    });
            });
            $('#buton').click(function(){
                $('#fni').hide(200);
                $('#unda1').hide(200);
            });

            $(doument).ready(function(){
                $('#linksv1').click(function(){
                });
                $('#linksv2').click(function(){

                });
                $('#linksv3').click(function(){

                });
                $('#linksv4').click(function(){

                });
                $('#linksv5').click(function(){
                    $('#loginshow').show(200);
                });
            });
        </script>
</body>
</html>