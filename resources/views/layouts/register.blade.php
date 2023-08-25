<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            
            <img src="assets/img/pal1.webp" alt="">
        </div>
        <div class="text-center mt-4 name">
            
        </div>
       
            <form method="POST" class="p-3 mt-3" action="{{ route('register') }}">
                @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                {{-- <input type="text" name="raison_sociale" id="raison_sociale" placeholder="raison_sociale"> --}}
                <input id="raison_sociale" type="text" placeholder="raison_sociale" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" value="{{ old('raison_sociale') }}" required autocomplete="raison_sociale" autofocus>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                
                <input id="pays" type="text" placeholder="pays" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
                                @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                 
                <input id="secteurs" type="text" placeholder="secteurs" class="form-control @error('secteurs') is-invalid @enderror" name="secteurs" value="{{ old('secteurs') }}" required autocomplete="secteurs" autofocus>
                                @error('secteurs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="tel" type="number" placeholder="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="email" type="text" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="password-confirm" type="password" class="form-control" placeholder="password-confirm" name="password_confirmation" required autocomplete="new-password">

            </div>
            <button class="btn mt-3" type="submit">s'inscrire</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Avez deja un compte?</a> si oui <a href="{{url('login')}}">connexion</a>
        </div>
    </div> 
    
</body>

<script>
    
</script>
</html>