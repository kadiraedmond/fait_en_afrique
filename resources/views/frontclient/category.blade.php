@extends('layouts.front')
@section('content')
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
   
 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

  <div class="row">
    @foreach ($categories as $categorie)
    <li><a href="/select_by_cat/{{ $categorie->category_name}}"  class="{{(request() 
    ->is('/select_by_cat/'.$categorie->category_name) ) }}">
    {{ $categorie->category_name}}</a></li>
    @endforeach
           <!-- ======= Breadcrumbs ======= -->
           <a href="">
            <section class=" lo breadcrumbs">
              <h3> {telephone et ordinateurs}</h3>
                <h2> <button class="btn-vert">Voir tout</button></h2>
        
            </section><!-- End Breadcrumbs -->
        
           </a>
   
    <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
      @foreach ($products as $item)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$item->nom}}</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro0.jpg')}}" alt="Image 1" style="width: 100%;">
        </div>
      </div>
      @endforeach
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro9.jpg')}}" alt="Image 2" style="width: 100%;">
           <h5 class="card-title">6787</h5>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro4.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro7.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro3.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro5.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro7.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro6.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro5.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro8.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      
      <!-- Ajoutez les autres cartes avec leurs images -->
    </div>
    
    </div>
    
</section><!-- End Blog Section -->

 
  </main><!-- End #main -->

@endsection