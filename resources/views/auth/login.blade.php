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
       
            <form method="POST" class="p-3 mt-3" action="{{ route('login') }}">
                @csrf
            
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
            
            <button class="btn mt-3" type="submit">connecter</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Avez deja un compte?</a> si non <a href="{{url('login')}}">inscrire</a>
        </div>
    </div> 
    
</body>

<script>
    
</script>
</html>