@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">Kontakt</h5>
                            <p class="card-text">

                                <!-- Post Start -->
                            <form action="{{ route('contact.create') }}" method="post">
                                @csrf
                                <!-- Vorname und Nachname -->
                                <div class="name">
                                    <div class="form-group">
                                        <label for="firstname">Vorname und Nachname:</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <!-- E-Mail -->
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-Mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <!-- Nachricht -->
                                <div class="message">
                                    <span>Nachricht:</span>
                                    <div class="input-group">
                                        <textarea class="form-control" name="message" id="message" aria-label="With textarea" placeholder="Nachricht"></textarea>
                                    </div>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>

                                <div><br>
                                    <button type="submit" class="btn btn-dark btn-block">Absenden</button>
                                </div>

                            </form>
                            <!-- Post Ende -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

