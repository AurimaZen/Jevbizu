<?php
require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
<html lang = "lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Jewbizu</title>
        <meta name="description" content="Jewbizu rankų darbo papuošalai">
        <link rel="stylesheet" href="app/css/style.css">
        <link rel="stylesheet" href= "bootstrap-3.3.7-dist/css/bootstrap.css">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css">
    </head>
   <body>               
  <header>
    <div class='top-header'> <!-- ŠITAME DIV'E VISAS NAVIGATION BAR --> 
       <div class='logo'>
           <a hreff = #top-header><img src="app/images/jewbizulogo.png" alt = "jevbizu logo"></a>
        </div> 
        <div class="w3-bar">
            <a href="#top-header" class="w3-bar-item w3-button w3-hide-small">Pradžia</a>
            <a href="about.html" class="w3-bar-item w3-button w3-hide-small">Apie</a>
            <a href="#nugalerija" class="w3-bar-item w3-button w3-hide-small">Galerija</a>
            <a href="#paslaugos" class="w3-bar-item w3-button w3-hide-small">Paslaugos</a>
            <a href="#kontaktailink" class="w3-bar-item w3-button w3-hide-small">Kontaktai</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
        </div>
    </div> 
        <div id="mobile-menu" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium">  
          <a href="#top-header" class="w3-bar-item w3-button ">Pradžia</a>
          <a href="about.html" class="w3-bar-item w3-button">Apie</a>
          <a href="#nugalerija" class="w3-bar-item w3-button">Galerija</a>
          <a href="#paslaugos" class="w3-bar-item w3-button">Paslaugos</a>
          <a href="#kontaktailink" class="w3-bar-item w3-button">Kontaktai</a>  
        </div>
    </header>
        <div class="navbar"><!--CIA IKELTAS BACKGROUNDAS-->
            <div class="col-md-6"></div>
                    <div class="kas col-md-6 nopadding">
                            <h1>Jewbizu papuošalai</h1>
                            <p>We hope that our artwork will bring you positive emotions, soulful experiences, while decorating your walls and embellish your outfits.</p> 
                            <div class="mygtukas">
                                <a href="#kontaktailink">
                            <button class="button">Susisiekite</button></a>
                        </div>
                  </div>
                </div>
              <!--CIA SKILTIS "APIE" BALTAS FONAS, IR TEKSTAS-->     
           <div class="container about-container">
               <div class="col-md-2"></div>
                  <div class="col-md-8" >
                      <div id="about" class="about">
                        <h2>Papuošalų dizaino studija</h2>
                          <p>Mūsų papuošalai yra rankų darbo. Jiems kurti panaudotos įvairios gamtos dovanos: pusbrangiai akmenys, stiklas, sidabras, medis, kriauklės, kristalai, vilna, plunksnos ir kt. Kiekvienas papuošalas turi savo stilių, savo nuotaiką ir net charakterį, todėl jiems suteikėme ypatingus vardus. Papuošalas pats už save „kalba“. Pamėginau tą kalbą užrašyti jų vardais. Būkite gražios! </p>
                         <img src="app/images/Signature.png" alt = "Indre_parasas"/>
                      </div>
                </div>
               <div class="col-md-2"></div>
           </div>
        <!--CIA PROGRESS BAR--> 
<div class="container">  
    <div class="col-md-6">
        <h2 id = "medziagos">Naudojamos medžiagos</h2>
         <p class="skillsTop">Akmenys</p>
         <div class="skillsBottom">
           <div class="progress">
             <div class="akmenys progress-bar progress-bar-info" role="progressbar">
          </div>
      </div>
         </div>  
        <p class="skillsTop">Oda</p>
        <div class="skillsBottom">
          <div class="progress">
          <div class="oda progress-bar progress-bar-info" role="progressbar" ></div>
          </div>
       </div>
       <p class="skillsTop">Karoliukai</p>
        <div class="skillsBottom">
          <div class="progress">
          <div class="karoliukai progress-bar progress-bar-info" role="progressbar"></div>
         </div>
       </div>
      <p class="skillsTop">Varis</p>
      <div class="skillsBottom">
        <div class="progress">
        <div class="varis progress-bar progress-bar-info" role="progressbar">
        </div>
        </div>
      </div>
     <p class="skillsTop">Tekstilė</p>
       <div class="skillsBottom">
        <div class="progress">
        <div class="tekstile progress-bar progress-bar-info" role="progressbar">
        </div>
        </div>
       </div>
    <p class="skillsTop">Emalė</p>
      <div class="skillsBottom">
       <div class="progress">
       <div class="emale progress-bar progress-bar-info" role="progressbar">
       </div>
       </div>
      </div>  
    </div> 
    <div class="col-md-6 nopadding">   
            <img class="skillsf " src="app/images/jewbizzu_skills.jpg" height= "auto" width="100%" alt = "Irankiai"/>
    </div>     
</div>    
<!--PROGRESS SKAICIUKAI MELYNAM FONE-->
        <div id="#klientai" class="container">
           <div class="ikoneles col-md-3"> 
               <i class="glyphicon glyphicon-star-empty"></i>               
               <div class="counter">
                <div class="timer count-title count-number" data-to="250" data-speed="1500"></div>
                <p class="count-text ">NUDŽIUGINTA MOTERŲ</p>
               </div> 
           </div>
            <div class="ikoneles col-md-3">     
               <i class="glyphicon glyphicon-heart-empty"></i>
               <div class="counter">
                <div class="timer count-title count-number" data-to="987" data-speed="1500"></div>
                <p class="count-text ">PAGAMINTA PAPUOŠALŲ</p>
               </div>
            </div>
          <div class="ikoneles col-md-3 hidden-sm hidden-xs"> 
               <i class="glyphicon glyphicon-time"></i>       
                <div class="counter">
                  <div class="timer count-title count-number" data-to="2489" data-speed="1500"></div>
                  <p class="count-text ">Kūrybos valandų</p>
              </div>
          </div>
          <div class="ikoneles col-md-3 hidden-sm hidden-xs">   
                <i class="glyphicon glyphicon-gift"></i>      
                <div class="counter">
                  <div class="timer count-title count-number" data-to="500" data-speed="1500"></div>
                   <p class="count-text ">PADOVANOTA</p>
               </div>
          </div>
        </div>
        <!--GALERIJA-->
        <div id="nugalerija"></div>
       <div id="wrapper">
    <ul id="imageSet">
        <div class="container container-galerija">
            <li class="col-lg-3 col-md-4 hidden-sm hidden-xs nopadding"><img src="app/images/melynas_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "melynas"/></li>
             <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 nopadding "><img  src="app/images/apyranke_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "apyranke"/></li>
             <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img src="app/images/geles_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "geles"/></li>
             <li class="col-lg-3 hidden-md hidden-sm hidden-xs nopadding "><img src="app/images/karoliai-zalias-kutas_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "karoliai"/></li>   
              <li class="col-lg-3 col-md-4 hidden-sm hidden-xs nopadding"><img src="app/images/melsva_sirdis_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "sirdis"/></li>  
              <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 nopadding"><img src="app/images/koralas_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "koralas"/></li> 
              <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img src="app/images/pakabukas_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "pakabikas"/></li>  
              <li class="col-lg-3 hidden-md hidden-sm hidden-xs nopadding"><img src="app/images/paukstelis_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "paukstelis"/></li>      
        </div>                     
        <!--cia dar turi buti juosta LOAD MORE WORK-->
        <div class="container galerija2">
              <li class="col-lg-3 col-md-4 hidden-sm col-xs-12 nopadding"><img src="app/images/melynas_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "melynas"/></li>
              <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img  src="app/images/apyranke_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "apyranke"/></li>
              <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img src="app/images/geles_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "geles"/></li>
              <li class="col-lg-3 hidden-md hidden-sm hidden-xs nopadding"><img src="app/images/karoliai-zalias-kutas_d.jpg" height="260" width="281" class="lightboxTrigger" alt = "karoliai"/></li>
            </div>
        <div class="container galerija3">
              <li class="col-lg-3 col-md-4 hidden-sm col-xs-12 nopadding"><img src="app/images/melsva_sirdis_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "sirdis"/></li>  
              <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img src="app/images/koralas_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "koralas"/></li> 
              <li class="col-lg-3 col-md-4 col-sm-6 hidden-xs nopadding"><img src="app/images/pakabukas_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "pakabukas"/></li>  
              <li class="col-lg-3 hidden-md hidden-sm hidden-xs nopadding"><img src="app/images/paukstelis_d.jpg" height="260px" width="281px" class="lightboxTrigger" alt = "paukstelis"/></li>      
        </div>
      </ul>
</div>  
        <div class="container"> 
           <div class=" hidden-md hidden-sm hidden-xs">
          <a href="#" id="loadMore">Load More</a>
       </div>
            </div> 
      <p class="totop">
    <a href="#top"><i class="fa fa-chevron-circle-up" aria-hidden="true" style = "font-size: 50px;color: #10c9c3;"></i></a> 
     </p>
        <!--CIA YRA VIDEO-->
        <div class="container container-procesas">
            <div class="procesas">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h2>Kūrybos procesas</h2>
                <p>I use a variety of materials in my works so I want to share my experience about stainless steel details designed for jewellery.</p>
                </div>
                </div>
            <div class="col-md-3"></div>
            <div id=vid class="hidden-sm hidden-xs">
              <video width="1170" height="100%" controls>
               <source src="app/images/Untitle.mp4" type="video/mp4"/>
               Your browser does not support the video tag.
            </video>
            </div>
      </div>
        <!--CIA YRA IKONOS ANT PILKO FONO-->
        <!--PIRMA EILUTE-->
        <div id="paslaugos"></div>
        <div class="container container-paslaugos">
          <div class="paslaugos">
             <div class="col-lg-3 col-md-6 col-xs-6">
              <i class="glyphicon glyphicon-heart-empty"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-6">
               <i class="glyphicon glyphicon-tree-deciduous"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
             </div>
             <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
               <i class="glyphicon glyphicon-leaf"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
            </div>
              <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
               <i class="glyphicon glyphicon-pencil"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
              </div>
            </div>
        </div>
        <!--ANTRA IKONU EILUTE-->
        <div class="container container-paslaugos1">
          <div class="paslaugos1">
              <div class="col-lg-3 col-md-6 col-xs-6">
                <i class="glyphicon glyphicon-scissors"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
              </div>
              <div class="col-lg-3 col-md-6 col-xs-6">
                 <i class="glyphicon glyphicon-star-empty"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
              </div>
              <div class="col-lg-3  hidden-md hidden-sm hidden-xs">
                 <i class="glyphicon glyphicon-star-empty"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
              </div>
              <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                 <i class="glyphicon glyphicon-star-empty"></i>
                <h4>Antraste</h4>
                <p>Cia pats graziausias pasaulyje tekstas apie kuryba</p>
              </div>
           </div>
        </div>
        <!--SLYDERIS-->
  
        <div class="slydeshow-container hidden-xs ">
        <div class="yourSlydes fade">
            <div class="numbertext">1 / 3</div>
            <img src="app/images/pexels-photo-135486.jpg" style="width:100%" height="420" alt = "papuosalai"/>
            <div class="text">Pirmas slaidas</div>
        </div>
        <div class="yourSlydes fade">
            <div class="numbertext">2 / 3</div>
            <img src="app/images/ceramic-2627149_1920.jpg" style="width:100%" height="420" alt = "keramika"/>
            <div class="text">Antras slaidas</div>
        </div>
        <div class="yourSlydes fade">
            <div class="numbertext">3 / 3</div>
            <img src="app/images/necklace-2683707_1920.jpg" style="width:100%" height="420" alt = "papuosalai"/>
            <div class="text">Trečias slaidas</div>
        </div>
          <a class="previous" onclick="plusSlydes(-1)">&#10094;</a>
          <a class="yournext" onclick="plusSlydes(1)">&#10095;</a>
        </div>
        <!--KLIENTU LOGOTIPAI-->
        
    <div class="container container-herbai"> 
      <div class="klientai">
          <ul>
              <li><img class="img-responsive" src="app/images/clients_logo.png" alt = "nuostabus klientas"/></li>
              <li><img class="img-responsive"  src="app/images/clients_logo1.png" alt = "labai nuostabus klientas"/></li>
              <li><img class="img-responsive"  src="app/images/clients_logo2.png" alt = "isvis labai nuostabus"/></li>
              <li><img class="img-responsive"  src="app/images/clients_logo4.png" alt = "nerealus"/></li>
              <li><img class="img-responsive"  src="app/images/clients_logo5.png" alt = "siaip sau klientas"/></li>
          </ul>
         </div>
       </div>
       <!--KONTAKTAI-->
    <div id="kontaktailink"></div>
      <div class = "container container-laiskas">
        <form class="contact-form" action="jevbizu.php" method="post">
          <p>Miela Indre,</p>
           <p>Mano
           <label for="your-name">vardas</label> yra
           <input type="text" name="vardas" id="your-name" minlength="3" placeholder="(Jūsų vardas)" required> ir</p>
           <p>mano
           elektroninio pašto adresas yra
           <input type="email" name="email" id="your-email" placeholder="(Jūsų e-paštas)" required>
            </p>
          <p> Norėčiau
          <label for="your-message">susisiekti</label> su Tavimi</p>
          <p><textarea name="message" id="your-message" placeholder="(Jūsų žinutė)" class="expanding" required></textarea></p>
          <p>
         <button class="lektuvas" type="submit">
         <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>
      <small>Siųsti</small>
    </button>
  </p>
</form>
        </div>
       <!--FOOTERIS-->
       <div class="container container-footer footer">
           <div class="col-md-4 ">
              <h2>Jewbizu design &reg;</h2>
              <p>&copy; 2017 Jewbizu</p>
              <p>Visos teisės saugomos</p>
            </div>
            <div class="col-md-4 ">
               <p>Lorem ipsum dolor</p>
               <p>Lorem ipsum dolor</p>
               <p>Lorem ipsum dolor</p>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs ">
               <p>Lorem ipsum dolor</p>
               <p>Lorem ipsum dolor</p>
               <p>Lorem ipsum dolor</p>
                <p>Lorem ipsum dolor</p>
            </div>
       </div> 
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
       
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="scripts/onepage.js"></script>
    </body>
</html>