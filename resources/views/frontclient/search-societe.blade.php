@extends('layouts.front')
@section('content')
<main id="main">
 
<section></section>
<section></section>
   
    <div class="container">
      
     
    <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-5  ">
      
      @forelse ($societes as $item)
      <div class="col mb-4">
        <div class="card">
          <div class="card-body">
            <a href="{{url('product-details/'.$item->id)}}">
              <h5 class="card-title">{{$item->raison_sociale}}</h5>
              <!-- Remplacez l'image.png par le chemin de votre image -->
              <img src="{{asset('assets/img/pro0.jpg')}}" alt="Image 1" style="width: 100%;">
            </a>
          </div>
        </div>
      </div>
      @empty
      <div class="align-items-center justify-content-center"><h3 class="justify-content-center " style="color: red;">Pas de resultats !!!!</h3>
      </div>
        @endforelse
     
    

</div>
  </div>
</section><!-- End Blog Section -->

 
  </main><!-- End #main -->

@endsection