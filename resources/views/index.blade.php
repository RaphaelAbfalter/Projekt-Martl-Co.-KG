<!Doctype html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/alternate_startpage.css') }}">
    </head>
    <body>
        <div>
            @include("Header")
            <div class="startpage-header">
                <h1>WILLKOMMEN BEI MARTL & CO. KG <br> AUTOMATISIERUNGSTECHNIK - KONSTRUKTION – MASCHINENBAU</h1>

            </div>
            <img src="https://bslinz2.sharepoint.com/:i:/r/sites/2022-23_3aAPC_PP/Kursmaterialien/bilder_martl_automationstechnik/Endmessdrehteller.jpg?csf=1&web=1&e=tFpbxR">

            <h2>KONSTRUKTION - PLANUNG – ENTWICKLUNG</h2>

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://bslinz2.sharepoint.com/:i:/r/sites/2022-23_3aAPC_PP/Kursmaterialien/bilder_martl_automationstechnik/Mechanische_Konstruktion.png?csf=1&web=1&e=Ftz5NW" style="width:100%">
                    <div class="text">Mechanische_Konstruktion</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://bslinz2.sharepoint.com/:i:/r/sites/2022-23_3aAPC_PP/Kursmaterialien/bilder_martl_automationstechnik/Vision_Systeme.png?csf=1&web=1&e=O9HXE4" style="width:100%">
                    <div class="text">Vision_Systeme</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>

            <h2>PRODUKTE / PROZESSE</h2>
            <!--style="text-align: center"-->

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://bslinz2.sharepoint.com/:i:/r/sites/2022-23_3aAPC_PP/Kursmaterialien/bilder_martl_automationstechnik/Widerstandsschweissroboter.jpg?csf=1&web=1&e=AEeLsN" style="width:100%">
                    <div class="text">Widerstandsschweissroboter</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://bslinz2.sharepoint.com/:i:/r/sites/2022-23_3aAPC_PP/Kursmaterialien/bilder_martl_automationstechnik/Laserschweissdrehteller.jpg?csf=1&web=1&e=nLsym7" style="width:100%">
                    <div class="text">Laserschweissdrehteller</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>

            @include("Footer")
        </div>
    </body>
</html>
