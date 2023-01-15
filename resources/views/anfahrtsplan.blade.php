@extends('dashboard')
@section('content')
    <h1>Firmensitz</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71456.50723485905!2d14.274401776016587!3d48.273643069461286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477397da7180f8e9%3A0xd11a61d6a61f789e!2sBerufsschule%20Linz%202!5e0!3m2!1sde!2sat!4v1669816637452!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <h3>Adresse</h3>
    <p>{{ $texts->addressOffice }}</p>
    <h1>Anfahrtsbeschreibung</h1>
    <h3>Anreise mit dem Auto</h3>
    <p>{{ $texts->driveToOffice }}</p>
    <h3>Anreise mit öffentlichen Verkehrsmittel</h3>
    <p>{{ $texts->publicTransportToOffice }}</p>
    <h1>Werkstatt</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10648.13842117729!2d14.002230985270993!3d48.14813806938309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4773f2f50c51ec91%3A0x12d195140280b726!2zTMOkcmNoZW5zdHJhw59lIDE3!5e0!3m2!1sde!2sat!4v1669904550789!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <h3>Adresse</h3>
    <p>{{ $texts->addressWorkshop}}</p>
    <h1>Anfahrtsbeschreibung</h1>
    <p> {{ $texts->driveToWorkshop }}</p>
    <h3>Anreise mit öffentlichen Verkehrsmittel</h3>
    <p> {{ $texts->publicTransportToWorkshop }}</p>
    @if($isAdmin)
        <form action="{{ route('anfahrtplan_edit') }}" method="get">
            <input type="submit" value="Edit">
        </form>
    @endif
@endsection