@extends('layouts.front')
@section('content')
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
      
          <div class="col-2">

            <div class="sidebar md-4">
    
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
    
              <h3 class="sidebar-title">Categories</h3>
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
    

          <div class="col-8">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/carousel3.jpg');">
                    <div class="img-bg-inner">
                      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem </h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/caeousel2.jpg');">
                    <div class="img-bg-inner">
                      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem </h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/carrousel1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem </h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

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
          <div class="col-2">

        <div class="sidebar md-4">

          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End sidebar search formn-->

          <h3 class="sidebar-title">Categories</h3>
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
  

     <section id="section">
 
        <style>
           
          
            .category-item {
                background-color: #d9f0ff; 
                color: #121111;
             margin-left: 6px;
              border: 1px solid #ccc;
              padding: 20px;
              border-radius: 10px;
              text-align: center;
             /* flex-basis: calc(25% - 20px);  Occupe un quart de la largeur du conteneur avec un espace de 20px entre chaque élément */
              height: 150px;
              /* display: flex; */
              align-items: center;
              justify-content: center;
              font-size: 18px;
              font-weight: 900;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
              transition: box-shadow 0.3s ease;
            }
            .category-item img {
            /* position: absolute; */
            width: 100%;
            height: 59%;
            object-fit: contain;
               
              }
          
            .category-item:hover {
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
              transform: scale(1.02);
            }
          </style>
          
          <div class="container  category-list">
            <div class="row justify-content-center  g-3">
                <div class="  col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Agroalimentaire</h5>
                  
                  <img src="assets/img/pal1.webp" alt="Image 1">
                </div>
                <div class=" col-2 category-item" >
                    <i class="fas fa-shopping-cart"></i>
                    <h5>Cosmetiques</h5>
                    <img src="assets/img/ti2.png" alt="Image 1">
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Cimentrie</h5>
                  <img src="assets/img/cimenteri-cat.png" alt="Image 1">

                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Textile</h5>
                  <img src="assets/img/ti1.webp" alt="Image 1">
                </div>
                <div class="  col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Siderurgie</h5>
                  <img src="assets/img/suderurgie.webp" alt="Image 1">

                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Metallurgie</h5>
                  
                </div>

                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Mecanique</h5>
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Chimique</h5>
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Energie</h5>
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Automobile</h5>
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Constuction</h5>
                </div>
                <div class=" col-2 category-item">
                    <i class="fas fa-shopping-cart"></i>
                  <h5>Catégorie 4</h5>
            </div>
            </div>
            <!-- <div class="category-item">
                <i class="fas fa-shopping-cart"></i>
              <h5>Catégorie 4</h5>
            </div>
            <div class="category-item">
                <i class="fas fa-shopping-cart"></i>
              <h5>Catégorie 4</h5>
            </div>
            <div class="category-item">
                <i class="fas fa-shopping-cart"></i>
              <h5>Catégorie 4</h5>
            </div>
            <div class="category-item">
                <i class="fas fa-shopping-cart"></i>
              <h5>Catégorie 4</h5>
            </div> -->
            <!-- Ajoutez les autres catégories ici -->
          </div>
          
     </section>
 
  </main><!-- End #main -->
 
@endsection