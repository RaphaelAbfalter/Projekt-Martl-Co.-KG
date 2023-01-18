@extends('dashboard')
@section('content')
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/style_index.css')}}" >
        <link rel="stylesheet" href="{{ URL::asset('css/style_index_alternate.css') }}">
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
        <div class="startpage-header">
            <h1>WILLKOMMEN BEI MARTL & CO. KG <br> AUTOMATISIERUNGSTECHNIK - KONSTRUKTION – MASCHINENBAU</h1>
        </div>

        <div class="scrollable">
            <div class="headerpics">
                <img src="../assets/martl_cokg.png" alt="Martl & CO. KG Gebäude">
                <img src="../assets/Endmessdrehteller.jpg" alt="Endmessdrehteller">
            </div>

            <h2>KONSTRUKTION - PLANUNG – ENTWICKLUNG</h2>

            <div class="slideshow-container">
                <div class="mySlides1">
                  <div class="slide-content-row">
                    <img class="img-text-row" src="../assets/Mechanische_Konstruktion.png" alt="Mechanische Konstruktion">
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
                    <img class="img-text-col" src="../assets/Vision_Systeme.png" alt="Vision Systeme">
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
                    <img class="img-text-row" src="../assets/Widerstandsschweissroboter.jpg" alt="Widerstandsschweissroboter">
                  </div>
                </div>
              
                <div class="mySlides2">
                  <div class="slide-content-row">
                    <img class="img-text-row" src="../assets/Endmessdrehteller.jpg" alt="Endmessdrehteller">
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
    </body>
@endsection