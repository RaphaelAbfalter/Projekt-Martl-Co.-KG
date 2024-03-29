@extends('dashboard')
@section('content')

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/style_index.css')}}" >
        <link rel="stylesheet" href="{{ URL::asset('css/style_index_alternate.css') }}">
        <title>
          Alternate Startpage
        </title>
        <script src="{{ URL::asset('js/index_alternate.js')}}"></script>        
    </head>
    <body>
    <div class="scrollable">
        <div class="startpage-header">
            <h1>WILLKOMMEN BEI MARTL & CO. KG <br> AUTOMATISIERUNGSTECHNIK - KONSTRUKTION – MASCHINENBAU</h1>
        </div>

        
            <div class="headerpics">
              <a href="/anfahrtsplan">
                <img id="imgA" class="img-top" src="../assets/martl_cokg.png" alt="Martl & CO. KG Gebäude">
              </a>
              <a>
                <img id="imgB" class="img-bottom" src="../assets/Endmessdrehteller.jpg" alt="Endmessdrehteller">
              </a>
            </div>
            <form action="{{ URL('/alternate')}}" method="post">
              @csrf
              <?php
                if(isset(Auth::user()['admin'])){
                  echo '<div id="button-parent">
                    <button type="button" id="edit">Edit</button>
                  </div>';
                }
              ?>

              <h2>KONSTRUKTION - PLANUNG – ENTWICKLUNG</h2>

              <div class="slideshow-container">
                  <div class="mySlides1">
                    <div class="slide-content-row">
                      <img class="img-text-row" src="../assets/Mechanische_Konstruktion.png" alt="Mechanische Konstruktion">
                      <a>
                        <h4>
                          Mechanische Konstruktion
                        </h4>
                        <P name="bildtext">
                          <?php
                          include('../public/index_alternate_texts/index_alt_text_1.txt');
                          ?>
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
                        <P name="bildtext">
                          <?php
                          include('../public/index_alternate_texts/index_alt_text_2.txt');
                          ?>
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
                        <P name="bildtext">
                          <?php
                          include('../public/index_alternate_texts/index_alt_text_3.txt');
                          ?>
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
                        <P name="bildtext">
                          <?php
                          include('../public/index_alternate_texts/index_alt_text_4.txt');
                          ?>
                        </P>
                      </a>
                    </div>
                  </div>
                
                  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
              </div>
            </form>
        </div>
    </body>
@endsection