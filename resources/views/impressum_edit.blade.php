@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Impressum bearbeiten</h1>
    <section class="impressum-edit">
        <form action="{{ route('impressum.update') }}" method="post">
            @csrf
            @method('PUT')
            <label for="firmenadresse">Firmensitz Adresse:</label>
            <input name="firmenanschrift" id="firmenanschrift" class="input-design" value="{{ $texts->firmenanschrift }}">
            <label for="unternehmensgegenstand">Unternehmensgegenstand:</label>
            <input name="unternehmensgegenstand" id="unternehmensgegenstand" class="input-design" value="{{ $texts->unternehmensgegenstand }}">
            <label for="UIDNummer">UID-Nummer:</label>
            <input name="UIDNummer" id="UIDNummer" class="input-design" value="{{ $texts->UIDNummer }}">
            <label for="GLA">GLA:</label>
            <input name="GLN" id="GLN" class="input-design" value="{{ $texts->GLN }}">
            <label for="GISA">GISA:</label>
            <input name="GISA" id="GISA" class="input-design" value="{{ $texts->GISA }}">
            <label for="telefonnummer">Telefonnummer:</label>
            <input name="telefonnummer" id="telefonnummer" class="input-design" value="{{ $texts->telefonnummer }}">
            <label for="fax">FAX:</label>
            <input name="fax" id="fax" class="input-design" value="{{ $texts->fax }}">
            <label for="email">E-Mail:</label>
            <input name="email" id="email" class="input-design" value="{{ $texts->email }}">
            <label for="adresse">Adresse:</label>
            <input name="adresse" id="adresse" class="input-design" value="{{ $texts->adresse }}">
            <input type="submit" value="Änderungen speichern" class="style-button form-button user-button">
        </form>
    </section>
</main>
@endsection
