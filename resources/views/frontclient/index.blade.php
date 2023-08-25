@extends('layouts.front')
@section('content')
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="containr-md" data-aos="fade-in">
        <div class="row">
      
          <div class="col-3">

            <div class="sidebar">
    
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
    
              <h3 class="sidebar-title">Categorie</h3>
              <div class="sidebar-item categories">
                <ul>@foreach ($categories as $categorie)
                  <li><a href="/select_by_cat/{{ $categorie->category_name}}"  class="{{(request()
                  ->is('/select_by_cat/'.$categorie->category_name)? 'Active':'') }}">
                  {{ $categorie->category_name}}<span>(25)</span></a></li>
                  @endforeach
                  </ul>
              </div><!-- End sidebar categories-->
    
              </div><!-- End sidebar recent posts-->
    
              
    
            </div><!-- End sidebar -->
    

          <div class="col-6">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                 
                @foreach ($sliders as $item)
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('{{asset('sliders_images/'.$item->slider_image)}}');">
                    <div class="img-bg-inner">
                      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem </h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div> 
                @endforeach

              </div>
              <!-- <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div> -->
            </div>
          </div>
      <div class="col-3">

        <div class="sidebar md-4">

          <h6 class="sidebar-ti">Envoyer une requete</h6>
          <div class="sidebar-item search-form">
            <form action="{{url('requete')}}" method="post">
              {{ csrf_field() }}
              <input type="text" name="requete" placeholder="une requete">
              <button type="submit"><i class="bi bi-send"></i></button>
            </form>
          </div><!-- End sidebar search formn-->

          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
        @endif
        @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
       @endif
          <div class="sidebar-item categories">
            <ul>
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>
          </div><!-- End sidebar categories-->

          </div><!-- End sidebar recent posts-->

          

        </div><!-- End sidebar -->

          
        </div>
      </div>
    </section><!-- End Hero Slider Section -->
    
 <!-- ======= Blog Section ======= -->
 <section id="blog" class=" container blog">
  <div class="">
   
           <!-- ======= Breadcrumbs ======= -->
           <a href="">
            <section class=" lo breadcrumbs">
              <h3> {telephone et ordinateurs}</h3>
              
              @foreach ($categories as $categorie)  
              
                <button type="button" class="btn btn-success">
                 <a href="/select_by_cat/{{ $categorie->category_name}}"  class="{{(request() 
                ->is('/select_by_cat/'.$categorie->category_name) ) }}">
                {{ $categorie->category_name}}</a> 
                </button>
              @endforeach
        
            </section><!-- End Breadcrumbs -->
        
           </a>
   
    <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-5  ">
      @foreach ($products as $item)
      <div class="col mb-4">
      <div class="card">
        <div class="card-body">
          <a href="{{url('product-details/'.$item->id)}}">
            <h5 class="card-title">{{$item->nom}}</h5>
            <!-- Remplacez l'image.png par le chemin de votre image -->
            <img src="{{asset('product_images/product_images/'.$item->product_image)}}" alt="Image 1" style="width: 100%;">
          </a>
          </div>
      </div>
    </div>
      @endforeach

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro9.jpg')}}" alt="Image 2" style="width: 100%;">
           <h5 class="card-title">6787</h5>
        </div>
      </div>
    </div>
    
      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro4.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro7.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro3.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro5.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro7.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro6.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro5.jpg')}}" alt="Image 2" style="width: 100%;">
        </div>
      </div>
    </div>

      <div class="col">
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
  </div>
    <div class="row">
    
      <!-- ======= Breadcrumbs ======= -->
      <a href="">
       <section class="breadcrumbs">
         <h3> telephone et ordinateurs</h3>
           <h2> <button class="btn-vert">Voir tout</button></h2>
       </section><!-- End Breadcrumbs -->
      </a>

 <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 1</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="{{asset('assets/img/pro0.jpg')}}" alt="Image 1" style="width: 100%;">
        </div>
      </div>
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

<div class="row">
    
  <!-- ======= Breadcrumbs ======= -->
  <a href="">
   <section class=" lo breadcrumbs">
     <h3> telephone et ordinateurs</h3>
       <h2> <button class="btn-vert">Voir tout</button></h2>

   </section><!-- End Breadcrumbs -->

  </a>

 <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 1</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro0.jpg" alt="Image 1" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro9.jpg" alt="Image 2" style="width: 100%;">
           <h5 class="card-title">6787</h5>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro4.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro7.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro3.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro5.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro7.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro6.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro5.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title 2</h5>
          <!-- Remplacez l'image.png par le chemin de votre image -->
          <img src="assets/img/pro8.jpg" alt="Image 2" style="width: 100%;">
        </div>
      </div>
      
      <!-- Ajoutez les autres cartes avec leurs images -->
    </div>
    

</div>


  </div>
</section><!-- End Blog Section -->

 
  </main><!-- End #main -->

@endsection