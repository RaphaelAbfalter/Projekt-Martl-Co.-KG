@extends('dashboard')
@section('content')
<script defer type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
<main class="index-container">
<section class="hero">
    <img loading="lazy" class="hero-img" src="./assets/martl_cokg.png" alt="Martl & CO. KG Gebäude"/>
    <h1>Willkommen bei Martl & CO. KG 
        <br>
        Automatisierungstechnik - Konstruktion - Maschinenbau
    </h1>
</section>
<section class="content">
    <div class="carousel">
        <button class="arrow-left left">
            <i class="bi bi-arrow-left"></i>
        </button>
        <div class="slide">
            <p>Widerstandsschweißroboter</p>
            <img loading="lazy" src="./assets/Widerstandsschweissroboter.jpg" alt="Widerstandsschweissroboter"/>
        </div>
        <div class="slide hidden">
            <p>Endmessdrehteller</p>
            <img loading="lazy" src="./assets/Endmessdrehteller.jpg" alt="Endmessdrehteller"/>
        </div>
        <div class="slide hidden">
            <p>Laserschweißdrehteller</p>
            <img loading="lazy" src="./assets/Laserschweissdrehteller.jpg" alt="Laserschweissdrehteller"/>
        </div>
        <button class="arrow-right right">
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
</section>
</main>
@endsection