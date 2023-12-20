@extends('layouts.app')

@section('contact')

<div class="contact-container">
        <h2>Contact</h2><br><br>

        @if(session('success'))
            <div class="alert contact-alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert contact-alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.sendMessage') }}" method="POST">
            @csrf

            <div class="contact-form-group">
                <label for="name">Nume:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="contact-form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="contact-form-group">
                <label for="message">Cu ce vă putem ajuta?</label>
                <textarea id="message" name="message" class="form-control">{{ old('message') }}</textarea>
            </div>

            <div class="contact-form-group">
                <button type="submit" class="contact-button">Trimite mesaj</button>
            </div>
        </form>
    </div>

<!-- <div class="contact-info">
    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/" target="_blank"><i class="fab fa-tiktok"></i></a>
</div> -->

<div class="footer">
    <p>eventica@email.com</p>
    <p>Str. Teodor Mihali 56-60, Cluj-Napoca, Romania
</div>


@endsection 
