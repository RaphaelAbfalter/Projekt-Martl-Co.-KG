@extends('dashboard')
@section('content')
    <h1>Edit Impressum</h1>
    <form action="{{ route('impressum.update') }}" method="post">
        @csrf
        @method('PUT')
        <label for="firmenadresse">Firmensitz Adresse:</label>
        <textarea name="firmenadresse" id="firmenadresse">{{ $texts->firmenadresse }}</textarea>
        <br>
        <label for="unternehmensgegenstand">Unternehmensgegenstand:</label>
        <textarea name="unternehmensgegenstand" id="unternehmensgegenstand">{{ $texts->unternehmensgegenstand }}</textarea>
        <br>
        <label for="UIDNummer">UID-Nummer:</label>
        <textarea name="UIDNummer" id="UIDNummer">{{ $texts->UIDNummer }}</textarea>
        <br>
        <label for="GLA">GLA:</label>
        <textarea name="GLA" id="GLA">{{ $texts->GLA }}</textarea>
        <br>
        <label for="GISA">GISA:</label>
        <textarea name="GISA" id="GISA">{{ $texts->GISA }}</textarea>
        <br>
        <label for="telefonnummer">Telefonnummer:</label>
        <textarea name="telefonnummer" id="telefonnummer">{{ $texts->telefonnummer }}</textarea>
        <br>
        <label for="fax">FAX:</label>
        <textarea name="fax" id="fax">{{ $texts->fax }}</textarea>
        <br>
        <label for="email">E-Mail:</label>
        <textarea name="fax" id="fax">{{ $texts->fax }}</textarea>
        <br>
        <label for="adresse">Adresse:</label>
        <textarea name="adresse" id="adresse">{{ $texts->adresse }}</textarea>
        <br>
        <input type="submit" value="Save Changes">
    </form>
@endsection
