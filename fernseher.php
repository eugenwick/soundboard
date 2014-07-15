<!DOCTYPE html>
<html>
  <head>
    <title>Play it</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #d4d4d4;">
    <center>
        <div class="page-header">
            <h1>Play it on every device!</h1>
        </div>
	Get Infos how to play sounds on: tsb.nerdswords.de
        <div id="results">
        </div>
    </center>
  </body>
</html>

<script>
$(document).ready(documentreadyfunction);
function documentreadyfunction() 
{
    var soundsplayed = 0;
    var mySounds = new Array( "barsch-ein-barsch.mp3", "bang-boom-bang-bring-ihn-um.mp3", "nr5-huebsche-software.wav", "wow.mp3", "applause.mp3", "bam-lee-bam-gemacht.mp3", "bam-lee-inne-fresse-reinhauen.mp3", "yea.mp3", "booo.mp3", "suprise.mp3", "HAL9000-moment.wav", "HAL9000-upset.wav", "tron-mcp.wav", "blues-brothers-auftrag.wav", "lotw-drecksblagen.wav", "bam-lee-ruhig-bleiben.mp3", "ahhhh.mp3", "bam-lee-nicht-ueben.mp3", "nadine-vitamine.mp3", "bam-lee-solarplexus.mp3", "lotw-quak.wav", "demolition-man-extreme.wav", "barsch-ich-hab-nen-biss.mp3", "bam-lee-freunde-feddich-gemacht.mp3", "yum.mp3", "bam-lee-selber-reinhauen.mp3", "tron-bugs.wav", "HAL9000-1-moment.wav", "lotw-drogenfahndung.wav", "bam-lee-homevideo.mp3", "bam-lee-ja-dat-mach-ich.mp3", "barsch-heeeeyyyyy.mp3", "bam-lee-und-deinen-freunden-auch.mp3", "bam-lee-kaempfen-macht-spass.mp3", "sledge-hammer-vertrauen.wav", "lotw-gabber-gandalf.wav", "army-of-darkness-clatu.wav", "nadine-ekelhaff.mp3", "lotw-schluckrunter.wav", "lotw-fett.wav", "HAL9000-afraid.wav", "deploying.mp3", "bang-boom-bang-scheisse-aussehen.mp3", "bam-lee-hau-ich-dir-eine-rein.mp3", "barsch-baby-barsch-alarm.mp3", "bam-lee-schmatz.mp3", "bam-lee-hingestellt.mp3", "lotw-kopfnuss.mp3", "bam-lee-wenn-der-typ-nochmal-aufsteht.mp3", "bang-boom-bang-olle-schaebich.mp3", "schwachsinnige.mp3", "weloveyou.mp3", "lotw-donbilbo.wav", "bang-boom-bang-laptops.mp3", "bam-lee-hehehe.mp3", "wacken.mp3", "bang-boom-bang-das-kann-nur-einer-alleine.mp3", "army-of-darkness-verlassen.wav", "werner-beinhart-roehrich.wav", "awww.mp3", "lotw-penner-in-muelltonnen.mp3", "demolition-man-blasen.wav", "lotw-rede-halten.mp3", "lotw-hier-spricht-gott.mp3", "bang-boom-bang-geklaut.mp3", "lotw-schmatz.wav", "demolition-man-zumthema.wav", "bam-lee-alles-meins.mp3", "bam-lee-typ.mp3", "ued-ueb-uedeloem.wav", "bang-boom-bang-fettsau.mp3", "bang-boom-bang-pornowichser.mp3", "demolition-man-muscheln.wav", "fdwdhf.mp3", "bam-lee-meine-uebungen.mp3", "nadine-erdbeerkaese.mp3", "nadine-bio-is-abfall.mp3", "bang-boom-bang-marokko.mp3", "demolition-man-sheriff.wav", "bang-boom-bang-scheiss-abgestellt.mp3", "demolition-man-strafe.wav", "bam-lee-bam.mp3", "bam-lee-abgeschmatzt.mp3", "bam-lee-meint-ich-haett-abgeschmatzt.mp3", "lotw-elrond-mcbong.mp3", "bang-boom-bang-horst.mp3", "mmmm.mp3", "yay.mp3", "bam-lee-holzaparat.mp3", "bruce-kakamachen.mp3", "bruce-daswarscheiße.mp3", "haltstopp.mp3", "grille.mp3", "crowd-oh.mp3", "johnny-goldstrand.mp3", "oldy-knallerzuenden.mp3", "simpsons-doh.mp3", "simpsons-haha.mp3", "xdiaries-besterman.mp3", "xdiaries-keinthema.mp3");//sed-helper
    var cachetrick = new Date().getTime();
    var url = 'api.php?getsounds&nocache-aetschbaetsch=' + cachetrick;
    var test = setInterval(intervalfunction,500);
    function intervalfunction() {
        $.getJSON( url, functionjson);
        function functionjson( apidata ) {
            $.each(apidata, foreachsound);
            function foreachsound(i,item)
            {
                var helper = parseInt(apidata[i].sound);
//		console.log(apidata[i].sound);
                $( "#results" ).append( "<audio id=\"soundsplayed" + soundsplayed + "\"><source src=\"audio/" + apidata[i].sound + "\"></source>No HTML5 -> IE4.2 or whooot?</audio>"); 
                var helper2 = "#soundsplayed" + soundsplayed;
                $( helper2 ).get( 0 ).play(); 
                soundsplayed = soundsplayed + 1;
            }
        }
        
        for ( var i = 0; i < soundsplayed - 3; i++) {
            helper3 = "#soundsplayed" + i;
            $( helper3 ).remove();
        }
    }
}
</script>
