@extends('dashboard')
@section('content')
<main>
    <h1>Edit Anfahrtsplan</h1>
    <form action="{{ route('anfahrtsplan_update') }}" method="post">
        @csrf
        @method('PUT')
        <label for="addressOffice">Firmensitz Adresse:</label>
        <textarea name="addressOffice" id="addressOffice">{{ $texts->addressOffice }}</textarea>
        <br>
        <label for="driveToOffice">Anreise mit dem Auto:</label>
        <textarea name="driveToOffice" id="driveToOffice">{{ $texts->driveToOffice }}</textarea>
        <br>
        <label for="publicTransportToOffice">Anreise mit öffentlichen Verkehrsmittel:</label>
        <textarea name="publicTransportToOffice" id="publicTransportToOffice">{{ $texts->publicTransportToOffice }}</textarea>
        <br>
        <label for="addressWorkshop">Werkstatt Adresse:</label>
        <textarea name="addressWorkshop" id="addressWorkshop">{{ $texts->addressWorkshop }}</textarea>
        <br>
        <label for="driveToWorkshop">Anreise mit dem Auto:</label>
        <textarea name="driveToWorkshop" id="driveToWorkshop">{{ $texts->driveToWorkshop }}</textarea>
        <br>
        <label for="publicTransportToWorkshop">Anreise mit öffentlichen Verkehrsmittel:</label>
        <textarea name="publicTransportToWorkshop" id="publicTransportToWorkshop">{{ $texts->publicTransportToWorkshop }}</textarea>
        <br>
        <input type="submit" value="Änderungen speichern" class="style-button form-button">
    </form>
</main>
@endsection