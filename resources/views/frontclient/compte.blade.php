@extends('layouts.front')

@section('content')
<section></section>
<section></section>
    <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
     
    }
   
    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-top: -50px;
      border: 3px solid #fff;
    }
  
    .navigation {
        display: flex;
    align-items: center;
     
      
      border-bottom: 1px solid #ddd;
      display: flex;
      justify-content: center;
    }
  
    .navigation a {
      text-decoration: none;
      color: #333;
      margin: 0 20px;
      font-weight: bold;
    }
  
    .video-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      padding: 20px;
    }
  
    .video {
 
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }
  
    .video img {
      width: 100%;
      height: auto;
    }
  
    .video-info {
      padding: 10px;
    }
  
    .video-title {
      font-size: 18px;
      margin-bottom: 5px;
    }
  
    .video-views {
      color: #888;
      font-size: 14px;
    }
  
    .headers {
      display: flex;
    align-items: center;
    justify-content: space-between;
   
    padding: 10px 20px;
    color: white;
    text-align: center;
    padding: 20px;
      position: relative;
      text-align: center;
      height: 150px;
      padding: 150px 0;
      background-image: url('{{asset('assets/img/carousel3.jpg')}}'); /* Chemin vers votre image de couverture */
      background-size: cover;
      background-position: center;
      color: #fff;
    }

    .headerd {
      display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #282626;
    padding: 10px 20px;
    color: white;
    }
  
    .avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 3px solid #fff;
      margin-top: 20px;
    }
  
    .nav-links {
        display: flex;
    align-items: center;
 
    padding: 10px;
     
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }
      
    .avatar {
       width: 120px;
       height: 120px;
       border-radius: 50%;
       margin: 20px auto;
       display: flex;
       justify-content: center;
       align-items: center;
       font-size: 36px;
     }
   
     .channel-name {
       font-size: 24px;
       font-weight: bold;
       margin-bottom: 10px;
     }
   
     .subscriber-count {
       font-size: 16px;
       color: #666;
       margin-bottom: 20px;
     }
   
     .subscribe-button {
      background-color: #ff0000;
       color: #ffffff;
       border: none;
       padding: 10px 20px;
       border-radius: 5px;
       font-size: 18px;
       cursor: pointer;
     }
     .logos {
    display: flex;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    
    margin-right: 20px;
  }

  .logos img {
 
    margin-right: 10px;
    
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
  }

 
  .logos-text {
    font-size: 14px;
    font-weight: bold;
  }

  .subscribe-button {
 
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 20px;
    cursor: pointer;
  }
  </style>
  
   
   
  <main class="main">
      <div class="container">
        <div>
          <div class="headers">
             </div>
            </div>

        <div>
          <div class="headerd mt-3">
            <div class="logos">
              <img src="{{asset('assets/img/carousel3.jpg')}}" alt="logos">
              <div class="logos-tex">{{ $author->raison_sociale }} </div>
            </div>
            <button class="subscribe-button">S'abonner</button>
          </div>
        </div>
     <div class="mt-3">
      <div class="navigation">
              
             
        <ul class="nav  mt-3 nav-pills mb-3" id="pills-tab" role="tablist">
            
              <a class="nav-item" role="presentation" href="#pills-home"> <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Accueil</button>
              </a>
            
             
                <a class="nav-item" role="presentation" href="#pills-profile"> <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">video</button>
                </a>  
            
             
                <a class="nav-item" role="presentation" href="#pills-contact"> <button class="nav-link  " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">societe</button></a>
                <a class="nav-item" role="presentation" href="#pills-contact"> <button class="nav-link  " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">societe</button></a>
                <a class="nav-item" role="presentation" href="#pills-contact"> <button class="nav-link  " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">societe</button></a>
                <a class="nav-item" role="presentation" href="#pills-contact"> <button class="nav-link  " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">societe</button></a>
                <a class="nav-item" role="presentation" href="#pills-contact"> <button class="nav-link  " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">societe</button></a>
          </ul>
          
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <section id="blog" class=" container blog">
                    <div class="row">
                     
                             <!-- ======= Breadcrumbs ======= -->
                        <a href="">
                            <section class="breadcrumbs">
                              <h3> telephone et ordinateurs</h3>
                                <h2> <button class="btn-vert">Voir tout</button></h2>
                            </section><!-- End Breadcrumbs -->
                           </a>
                     
                     
                      <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
                        
                        @foreach ($products as $item)
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{$item->nom}}</h5>
                            <!-- Remplacez l'image.png par le chemin de votre image -->
                            <img src="{{asset('product_images/product_images/'.$item->product_image)}}" alt="Image 2" style="width: 100%;">
                             <h5 class="card-title">6787</h5>
                          </div>
                        </div>
                        @endforeach
                      
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
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><section id="blog" class=" container blog">
            <div class="row">
             
                     <!-- ======= Breadcrumbs ======= -->
                <a href="">
                    <section class="breadcrumbs">
                      <h3> telephone et profife</h3>
                        <h2> <button class="btn-vert">Voir tout</button></h2>
                    </section><!-- End Breadcrumbs -->
                   </a>
             
             
              <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
                
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
              
              </div></div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><section id="blog" class=" container blog">
            <div class="row">
             
                     <!-- ======= Breadcrumbs ======= -->
                <a href="">
                    <section class="breadcrumbs">
                      <h3> telephone et contact</h3>
                        <h2> <button class="btn-vert">Voir tout</button></h2>
                    </section><!-- End Breadcrumbs -->
                   </a>
             
             
              <div class="card-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(calc(100% / 6), 1fr)); gap: 10px;">
                
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
              
              </div></div>
          </div>
          
        
  </div>
     </div>
  </main>
@endsection