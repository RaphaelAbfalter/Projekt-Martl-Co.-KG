<div>
<h3>Kontakt</h3>
<form action="{{ route('contact.create') }}" method="post" class="contact-create">
    @csrf
        <label for="contact-name">Vorname und Nachname:</label>
        @if ($errors->has('name'))
            <span class="error-msg">{{ $errors->first('name') }}</span>
        @endif
        <input type="text" class="input-design" name="name" id="contact-name" placeholder="Name">

    @if ($errors->has('name') OR $errors->has('email') OR $errors->has('message'))
        @php
            echo '<script>document.querySelector("dialog").showModal();</script>';
        @endphp
    @endif

    <label for="mail">E-Mail:</label>
        @if ($errors->has('email'))
            <span class="error-msg">{{ $errors->first('email') }}</span>
        @endif
    <input type="email" class="input-design" name="email" id="mail" placeholder="name@example.com">
    <label for="message">Nachricht:</label>
        @if ($errors->has('message'))
            <span class="error-msg">{{ $errors->first('message') }}</span>
        @endif
    <textarea class="input-design textarea-design" name="message" id="message" placeholder="Nachricht"></textarea>
    <input type="submit" value="Absenden" class="style-button form-button"/>
</form>
</div>
