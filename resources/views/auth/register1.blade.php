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
                <select name="" id="">
                    <option value="">Client </option>
                    <option value="">fournisseur </option>
                    <option value="">logisticien </option>
                    <option value="">Client </option>
                </select>
                <input id="role" type="text" placeholder="qui etes vous?" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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