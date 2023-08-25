<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{asset('dashboard/assets/plugin/datatables/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/plugin/datatables/dataTables.bootstrap5.min.css')}}">

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.min.css')}}">

    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            
            <img src="assets/img/carousel3.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            
        </div>
       
        
      
        <div class="row g-3">
            <div class="col-lg-12 col-md-12">
                <div class="tab-filter d-flex align-items-center justify-content-center mb-3 flex-wrap">
                    <ul class="nav nav-tabs tab-card tab-body-header rounded  d-inline-flex w-sm-100">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#summery-today" >Client</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-week" >grossiste</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-month" >logisticien</a></li>
                    </ul>
                    
                </div>

                <div class="tab-content mt-1">
                    <div class="tab-pane fade show active" id="summery-today">
                                <div class="row g-1 g-sm-3 mb-3 row-deck">
                                    
                                    <form method="POST" class="p-3 mt-3" action="{{ route('register') }}">
                                        @csrf
                                    <div class="form-field d-flex align-items-center">
                                        <span class="far fa-user"></span>
                                        {{-- <input type="text" name="raison_sociale" id="raison_sociale" placeholder="raison_sociale"> --}}
                                        <input id="raison_sociale" type="text" placeholder="raison_sociale" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" value="{{ old('raison_sociale') }}" required autocomplete="raison_sociale" autofocus>
                                    </div>
                                    <div class="form-field d-flex align-items-center">
                                        <span class="far fa-user"></span>
                                        
                                        <input id="role" type="hidden" placeholder="qui etes vous?" value="client" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                                        @error('role')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror 
                                                        
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
                                         
                                        <input id="nom" type="text" placeholder="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                    </div>
                                    <div class="form-field d-flex align-items-center">
                                        <span class="far fa-user"></span>
                                         
                                        <input id="prenom" type="text" placeholder="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                                        @error('prenom')
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
                                </div> <!-- row end -->
                            </div>
                <div class="tab-pane fade" id="summery-week">
                        <div class="row g-3 mb-4 row-deck">
                        <form method="POST" class="p-3 mt-3" action="{{ route('register') }}">
                                @csrf
                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                {{-- <input type="text" name="raison_sociale" id="raison_sociale" placeholder="raison_sociale"> --}}
                                <input id="raison_sociale" type="text" placeholder="raison_sociiiiiale" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" value="{{ old('raison_sociale') }}" required autocomplete="raison_sociale" autofocus>
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                
                                <input id="role" type="hidden" placeholder="qui etes vous?" value="grossiste" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                                
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
                        </div> <!-- row end -->
                    </div>
                    <div class="tab-pane fade" id="summery-month">
                        <form method="POST" class="p-3 mt-3" action="{{ route('register') }}">
                            @csrf
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            {{-- <input type="text" name="raison_sociale" id="raison_sociale" placeholder="raison_sociale"> --}}
                            <input id="raison_sociale" type="text" placeholder="raison_sociale" class="form-control @error('raison_sociale') is-invalid @enderror" name="raison_sociale" value="{{ old('raison_sociale') }}" required autocomplete="raison_sociale" autofocus>
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            
                            <input id="role" type="hidden" placeholder="qui etes vous?" value="logisticien" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                            
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
                    </form> <!-- row end -->
                    </div>
                    
                </div>
            </div>
        </div><!-- Row end  -->

        <div class="text-center fs-6">
            <a href="#">Avez deja un compte?</a> si oui <a href="{{url('login')}}">connexion</a>
        </div>
    </div> 
    
</body>
<!-- Jquery Core Js -->
<script src="{{asset('dashboard/assets/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('dashboard/assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('dashboard/assets/bundles/dataTables.bundle.js')}}"></script>  

<!-- Jquery Page Js -->
{{-- <script src="{{asset('dashboard/js/template.js')}}"></script> --}}
<script src="{{asset('dashboard/js/page/index.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script>  
<script>
    $('#myDataTable')
    .addClass( 'nowrap')
    .dataTable( {
        responsive: true,
        columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
        ]
    });
</script>
<script>
    
</script>
</html>