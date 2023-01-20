<div>
<h3>Kontakt</h3>
<form action="{{ route('contact.create') }}" method="post" class="contact-create">
    @csrf
        <label for="name">Vorname und Nachname:</label>
        <input type="text" class="input-design" name="name" id="name" placeholder="Name">
    @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
    <label for="email">E-Mail:</label>
    <input type="email" class="input-design" name="email" id="email" placeholder="name@example.com">
    @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <label for="message">Nachricht:</label>
    <textarea class="input-design textarea-design" name="message" id="message" placeholder="Nachricht"></textarea>
    @if ($errors->has('message'))
    <span class="text-danger">{{ $errors->first('message') }}</span>
    @endif
    <button type="submit" class="style-button form-button">Absenden</button>
</form>
</div>