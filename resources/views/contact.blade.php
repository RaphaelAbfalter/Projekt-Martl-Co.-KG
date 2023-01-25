<div>
<h3>Kontakt</h3>
<form action="{{ route('contact.create') }}" method="post" class="contact-create">
    @csrf
        <label for="contact-name">Vorname und Nachname:</label>
        <input type="text" class="input-design" name="name" id="contact-name" placeholder="Name">

    @if ($errors->has('name') OR $errors->has('email') OR $errors->has('message'))
        @php
            echo '<script>document.querySelector("dialog").showModal();</script>';
        @endphp
    @endif

    @if ($errors->has('name'))
        <span class="error-msg">{{ $errors->first('name') }}</span>
    @endif
    <label for="mail">E-Mail:</label>
    <input type="email" class="input-design" name="email" id="mail" placeholder="name@example.com">
    @if ($errors->has('email'))
        <span class="error-msg">{{ $errors->first('email') }}</span>
    @endif
    <label for="message">Nachricht:</label>
    <textarea class="input-design textarea-design" name="message" id="message" placeholder="Nachricht"></textarea>
    @if ($errors->has('message'))
        <span class="error-msg">{{ $errors->first('message') }}</span>
    @endif
    <input type="submit" value="Absenden" class="style-button form-button"/>
</form>
</div>
