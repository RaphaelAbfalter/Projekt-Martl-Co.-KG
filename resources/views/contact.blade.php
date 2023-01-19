
<h3>Kontakt</h3>
    <form action="{{ route('contact.create') }}" method="post">
        @csrf
    <div class="name">
        <div class="form-group">
            <label for="firstname">Vorname und Nachname:</label>
            <input type="text" class="form-control" name="name" id="firstname" placeholder="Name">
        </div>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="message">
        <label for="message">Nachricht:</label>
        <textarea class="form-control" name="message" id="message" aria-label="With textarea" placeholder="Nachricht"></textarea>
        @if ($errors->has('message'))
        <span class="text-danger">{{ $errors->first('message') }}</span>
        @endif
    </div>
    <div><br>
        <button type="submit" class="btn btn-dark btn-block">Absenden</button>
    </div>
</form>

