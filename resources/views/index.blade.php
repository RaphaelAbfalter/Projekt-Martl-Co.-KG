<!Doctype html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css\alternate_startpage.css') }}">

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
        <div class="startpage-header">
            <h1>WILLKOMMEN BEI MARTL & CO. KG <br> AUTOMATISIERUNGSTECHNIK - KONSTRUKTION – MASCHINENBAU</h1>
        </div>

        <div class="scrollable">
            <div class="headerpics">
                <img class="hp1" src="martl_cokg.png">
                <img class="hp2" src="Endmessdrehteller.jpg">
            </div>

            <h2>KONSTRUKTION - PLANUNG – ENTWICKLUNG</h2>

            <div class="slideshow-container">
                <div class="mySlides1">
                  <div class="slide-content">
                    <img src="Mechanische_Konstruktion.png" style="width:100%">
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
                  <div class="slide-content">
                    <img src="Vision_Systeme.png" style="width:100%">
                  </div>
                </div>
                  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
              </div>

            <h2>PRODUKTE / PROZESSE</h2>
            <!--style="text-align: center"-->

            
            <div class="slideshow-container">
                <div class="mySlides2">
                  <img src="Widerstandsschweissroboter.jpg" style="width:100%">
                </div>
              
                <div class="mySlides2">
                  <img src="Laserschweissdrehteller.jpg" style="width:100%">
                </div>
              
                <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            </div>
        </div>
    </body>
</html>
