<?php
header("Content-type: text/css");
$text_color=urldecode($_GET['text_color']);
$title_color=urldecode($_GET['title_color']);
$backcolor=urldecode($_GET['backcolor']);
$img_select=urldecode($_GET['img_select']);
$pattern_select=urldecode($_GET['pattern_select']);
$title_font=urldecode($_GET['title_font']);
$text_font=urldecode($_GET['text_font']);
$title_font_size=urldecode($_GET['title_font_size']);
$text_font_size=urldecode($_GET['text_font_size']);
echo "
.YanoneKaffeesatz{ font-family: 'Yanone Kaffeesatz'}
.WireOne{ font-family: 'Wire One'}
.Ubuntu{ font-family: 'Ubuntu'}
.Rokkitt{ font-family: 'Rokkitt'}
.Righteous{ font-family: 'Righteous'}
.Raleway{ font-family: 'Raleway'}
.QuattrocentoSans{ font-family: 'Quattrocento Sans'}
.PTSans{ font-family: 'PT Sans'}
.OpenSans{ font-family: 'Open Sans'}
.NixieOne{ font-family: 'Nixie One'}
.NewsCycle{ font-family: 'News Cycle'}
.Acme{ font-family: 'Acme'}
.Coustard{ font-family: 'Coustard'}
.AlfaSlabOne{ font-family: 'Alfa Slab One'}
.Abel{ font-family: 'Abel'}
.Brawler{ font-family: 'Brawler'}
.DroidSans{ font-family: 'Droid Sans'}
.Crushed{ font-family: 'Crushed'}
.CabinCondensed{ font-family: 'Cabin Condensed'}
.Federo{ font-family: 'Federo'}
.Arimo{ font-family: 'Arimo'}
.ContrailOne{ font-family: 'Contrail One'}
.Anton{ font-family: 'Anton'}
.DaysOne{ font-family: 'Days One'}
.DroidSerif{ font-family: 'Droid Serif'}
.AbrilFatface{ font-family: 'Abril Fatface'}
.Allan{ font-family: 'Allan'}
.AmaticSC{ font-family: 'Amatic SC'}
.AnonymousPro{ font-family: 'Anonymous Pro'}
.Bangers{ font-family: 'Bangers'}
.Baumans{ font-family: 'Baumans'}
.Boogaloo{ font-family: 'Boogaloo'}
.BreeSerif{ font-family: 'Bree Serif'}
.Buda{ font-family: 'Buda'}
.Cuprum{ font-family: 'Cuprum'}
.Damion{ font-family: 'Damion'}
.Dorsa{ font-family: 'Dorsa'}
.FrancoisOne{ font-family: 'Francois One'}
.Gruppo{ font-family: 'Gruppo'}
.JustAnotherHand{ font-family: 'Just Another Hand'}
.JockeyOne{ font-family: 'Jockey One'}
.MaidenOrange{ font-family: 'Maiden Orange'}
.Lobster{ font-family: 'Lobster'}
.JosefinSlab{ font-family: 'Josefin Slab'}
.LobsterTwo{ font-family: 'Lobster Two'}
.Marvel{ font-family: 'Marvel'}
.Andika{ font-family: 'Andika'}

.Tahoma{ font-family: 'Tahoma'}
.TrebuchetMS{ font-family: 'Trebuchet MS'}
.Georgia{ font-family: 'Georgia'}

.loading-spinner{
    display: none;
    position: fixed;
    top:30px;
    right: 0;
    width: 60px;
    height: 60px;
}
.message1{
    font-weight: bold;
    font-family: 'Tahoma';
}
div .content_img{
    margin: auto;    
    position: relative;
    padding-top: 30px;
    padding-bottom:  30px;
    width: 100%;    
    	border: 1px solid #999;
  	border: 1px solid rgba(0, 0, 0, 0.3);
        	
  	-webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;

       -webkit-box-shadow: inset 0 0px 2px white;
       -moz-box-shadow: inset 0 0px 2px white;
            box-shadow: inset 0 0px 2px white;  	

	 -webkit-background-clip: padding-box;
    	 -moz-background-clip: padding-box;
          background-clip: padding-box;
    
    background-image: url('$pattern_select');
    background-color: $backcolor;
}
div .container_full{    
    width: 700px;
    margin: 50px auto 50px auto;
    border: none;    
    -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
          
    -webkit-box-shadow: 5px 3px 7px rgba();
    	 -moz-box-shadow: 5px 3px 7px #000;
          box-shadow: 5px 3px 7px #000;
}
div .content_img .title_cu{
    width: 100%;
    height: 60px;
    font-family: '$title_font';
    font-size: ".$title_font_size."px;
    color: $title_color;
    padding-top: 10px;
    -moz-text-shadow: 1px 1px 1px #000;
    -ms-text-shadow: 1px 1px 1px #000;
    -webkit-text-shadow: 1px 1px 1px #000;    
    text-shadow: 1px 1px 1px #000;
    filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=1);
    text-align: center;
    letter-spacing: -1px;
}
div.content_img .content_cusim{
    width: 235px;
    height: 270px;
    bottom: -60px;
    right: -80px;
    background: url('$img_select') no-repeat;
    position: absolute;
    z-index: 100;
}
div .content_img .custom_text_content{
    width: 100%;
    height: 20px;
    font-family: '$text_font';
    font-size: ".$text_font_size."px;
    color: $text_color;
    font-style: italic;
    text-align: center;   
}
div .content_img .text_content{
    width: 100%;
    height: 30px;
    color: $text_color;
    font-family: '$text_font';
    font-size: ".$text_font_size."px;
    margin-left: 20px;    
}
div .content_img .text_urls{
    width: 100%;
    height: 25px;
    color: $text_color;
    font-family: '$text_font';
    font-size: ".$text_font_size."px;
    text-align: center;    
}
div .content_img .text_urls span a{
    color: $text_color;
    letter-spacing: 1px;
}
div .content_img .text_content a{
    color: $text_color;
    letter-spacing: 1px;
}

div .content_img .text_content a:hover, div .content_img .text_content a:active, div .content_img .text_content a:focus {
  text-decoration: underline;
}

div .content_img .custom_title{
    width: 100%;
    height: 40px;
    color: $title_color;
    font-family: '$title_font';
    font-size: ".$title_font_size."px;
    padding-top: 15px;
    -moz-text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    -ms-text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    -webkit-text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    text-shadow: 1px 1px 1px #000;
    filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=1);
    letter-spacing: -1px;
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 18px;
}
div .content_img .custom_title2{
    width: 100%;    
    height: 40px;
    text-align: center;
    color: $title_color;
    font-family: '$title_font';
    font-size: ".$title_font_size."px;
    word-spacing: -1px;
    padding-top: 5px;
    -moz-text-shadow: 1px 1px 1px #000;
    -ms-text-shadow: 1px 1px 1px #000;
    -webkit-text-shadow: 1px 1px 1px #000;
    text-shadow: 1px 1px 1px #000;
    filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=1);
    letter-spacing: -1px;
    margin-top: 45px;    
}
.red_selection{
    float: right;
    width: 100px;    
    border: 1px solid #999;
  	border: 1px solid rgba(0, 0, 0, 0.3);
        	
  	-webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;

  	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    	 -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);

	 -webkit-background-clip: padding-box;
    	 -moz-background-clip: padding-box;
          background-clip: padding-box;
    background-color: #c5423c;
    background-image: url('../img/bkg_noise.png');    
    -webkit-box-shadow: inset 0 0px 3px white;
       -moz-box-shadow: inset 0 0px 3px white;
            box-shadow: inset 0 0px 5px white
}
.blue_selection{
    float: right;
    width: 100px;    
    border: 1px solid #999;
  	border: 1px solid rgba(0, 0, 0, 0.3);
        	
  	-webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;

  	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    	 -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);

	 -webkit-background-clip: padding-box;
    	 -moz-background-clip: padding-box;
          background-clip: padding-box;
    background-color: #009ed4;
    background-image: url('../img/bkg_noise.png');
    -webkit-box-shadow: inset 0 0px 3px white;
       -moz-box-shadow: inset 0 0px 3px white;
            box-shadow: inset 0 0px 5px white
}
.black_selection{
    float: right;
    width: 100px;    
    border: 1px solid #999;
  	border: 1px solid rgba(0, 0, 0, 0.3);
        	
  	-webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;

  	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    	 -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);

	 -webkit-background-clip: padding-box;
    	 -moz-background-clip: padding-box;
          background-clip: padding-box;
    background-color: #3a3a3a;
    background-image: url('../img/bkg_noise.png');    
    -webkit-box-shadow: inset 0 0px 3px white;
       -moz-box-shadow: inset 0 0px 3px white;
            box-shadow: inset 0 0px 5px white
}
.white_selection{
    float: right;
    width: 100px;    
    border: 1px solid #999;
  	border: 1px solid rgba(0, 0, 0, 0.3);
        	
  	-webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;

  	-webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    	 -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);

	 -webkit-background-clip: padding-box;
    	 -moz-background-clip: padding-box;
          background-clip: padding-box;
    background-color: #efefef;
    background-image: url('../img/bkg_noise.png');    
    -webkit-box-shadow: inset 0 0px 3px white;
       -moz-box-shadow: inset 0 0px 3px white;
            box-shadow: inset 0 0px 5px white
}
.powerby{    
    width: 800px;    
    font-family: 'Arial';
}
div.updated_custom {
    background-color: lightYellow;
    border-color: #E6DB55;
    padding: 0 .6em;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border-width: 1px;
    border-style: solid;    
}
";
?>