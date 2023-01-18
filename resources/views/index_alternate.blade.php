<!Doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css\index_alternate.css') }}">
        <title>
          Alternate Startpage
        </title>
        <script>
            let slideIndex = [1,1];
            let slideId = ["mySlides1", "mySlides2"]
            showSlides(1, 0);
            showSlides(1, 1);
            
            function plusSlides(n, no) {
              showSlides(slideIndex[no] += n, no);
            }
            
            function showSlides(n, no) {
              let i;
              let x = document.getElementsByClassName(slideId[no]);
              if (n > x.length) {slideIndex[no] = 1}    
              if (n < 1) {slideIndex[no] = x.length}
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
              }
              x[slideIndex[no]-1].style.display = "block";  
            }
        </script>        
    </head>
    <body>
    @include('header')
        <div class="startpage-header">
            <h1>WILLKOMMEN BEI MARTL & CO. KG <br> AUTOMATISIERUNGSTECHNIK - KONSTRUKTION – MASCHINENBAU</h1>
        </div>

        <div class="scrollable">
            <div class="headerpics">
                <img class="hp1" src="../../../../WebDev/martl_cokg.png">
                <img class="hp2" src="../../../../WebDev/Endmessdrehteller.jpg">
            </div>

            <h2>KONSTRUKTION - PLANUNG – ENTWICKLUNG</h2>

            <div class="slideshow-container">
                <div class="mySlides1">
                  <div class="slide-content-row">
                    <img class="img-text-row" src="Mechanische_Konstruktion.png">
                    <a>
                      <h4>
                        Mechanische Konstruktion
                      </h4>
                      <P>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                        Corrupti maiores consequatur tempore sapiente illum maxime nihil minima tempora quod rerum cumque <br>
                        magnam ipsa nemo excepturi esse ipsum alias, inventore eius.<br>
                      </P>
                    </a>
                  </div>
                </div>
              
                <div class="mySlides1">
                  <div class="slide-content-col">
                    <a>
                      <h4>
                        Vision Systeme
                      </h4>
                      <P>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                        Corrupti maiores consequatur tempore sapiente illum maxime nihil minima tempora quod rerum cumque <br>
                        magnam ipsa nemo excepturi esse ipsum alias, inventore eius.<br>
                      </P>
                    </a>
                    <img class="img-text-col" src="Vision_Systeme.png">
                  </div>
                </div>
                  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
              </div>

            <h2>PRODUKTE / PROZESSE</h2>
            
            <div class="slideshow-container">
                <div class="mySlides2">
                  <div class="slide-content-row">
                    <a>
                      <h4>
                        Widerstandsschweissroboter
                      </h4>
                      <P>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                        Corrupti maiores consequatur tempore sapiente illum maxime nihil minima tempora quod rerum cumque <br>
                        magnam ipsa nemo excepturi esse ipsum alias, inventore eius.<br>
                      </P>
                    </a>
                    <img class="img-text-row" src="Widerstandsschweissroboter.jpg">
                  </div>
                </div>
              
                <div class="mySlides2">
                  <div class="slide-content-row">
                    <img class="img-text-row" src="Laserschweissdrehteller.jpg">
                    <a>
                      <h4>
                        Laserschweissdrehteller
                      </h4>
                      <P>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                        Corrupti maiores consequatur tempore sapiente illum maxime nihil minima tempora quod rerum cumque <br>
                        magnam ipsa nemo excepturi esse ipsum alias, inventore eius.<br>
                      </P>
                    </a>
                  </div>
                </div>
              
                <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            </div>
        </div>
        @include('footer')
    </body>
</html>
