@extends('dashboard')
@section('content')
<main class="content-container">
    <h1>Edit Anfahrtsplan</h1>
    <section class="arrival-edit">
        <form action="{{ route('anfahrtsplan_update') }}" method="post" >
            @csrf
            @method('PUT')
            <label for="addressOffice">Firmensitz Adresse:</label>
            <textarea name="addressOffice" id="addressOffice" class="input-design textarea-design input-edit">{{ $texts->addressOffice }}</textarea>
            <label for="driveToOffice">Anreise mit dem Auto:</label>
            <textarea name="driveToOffice" id="driveToOffice" class="input-design textarea-design input-edit">{{ $texts->driveToOffice }}</textarea>
            <label for="publicTransportToOffice">Anreise mit öffentlichen Verkehrsmittel:</label>
            <textarea name="publicTransportToOffice" id="publicTransportToOffice" class="input-design textarea-design input-edit">{{ $texts->publicTransportToOffice }}</textarea>
            <label for="addressWorkshop">Werkstatt Adresse:</label>
            <textarea name="addressWorkshop" id="addressWorkshop" class="input-design textarea-design input-edit">{{ $texts->addressWorkshop }}</textarea>
            <label for="driveToWorkshop">Anreise mit dem Auto:</label>
            <textarea name="driveToWorkshop" id="driveToWorkshop" class="input-design textarea-design input-edit">{{ $texts->driveToWorkshop }}</textarea>
            <label for="publicTransportToWorkshop">Anreise mit öffentlichen Verkehrsmittel:</label>
            <textarea name="publicTransportToWorkshop" id="publicTransportToWorkshop" class="input-design textarea-design input-edit">{{ $texts->publicTransportToWorkshop }}</textarea>
            <input type="submit" value="Änderungen speichern" class="style-button form-button user-button">
        </form>
    </section>
</main>
@endsection