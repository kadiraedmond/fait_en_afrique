 @extends('layouts.front')
 @section('content')
<main class="main">
    <section></section>
    <section></section>
    
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #d7e1f3;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .product-details {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
  }

  .product-image {
    flex: 1;
    max-width: 50%;
  }

  .product-image img {
    width: 100%;
    height: auto;
  }

  .product-info {
    flex: 1;
    padding: 20px;
  }

  .product-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .product-author {
    font-size: 16px;
    color: #888;
    margin-bottom: 5px;
  }

  .product-price {
    font-size: 20px;
    margin-bottom: 10px;
    color: #e91e63;
  }

  .product-description {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  .product-likes {
    display: flex;
    align-items: center;
    color: #888;
    margin-bottom: 15px;
  }

  .like-icon {
    margin-right: 5px;
    font-size: 18px;
    color: #e91e63;
  }

  .action-buttons {
    display: flex;
    gap: 10px;
  }

  .action-button {
    padding: 10px 20px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .additional-description {
    margin-top: 30px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .additional-description p {
    font-size: 16px;
    line-height: 1.5;
  }
  
  .sidebar {
    flex: 1;
    max-width: 25%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin-left: 20px;
  }

  .category-title {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .category-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .category-list li {
    margin-bottom: 5px;
  }

  .search-bar {
    margin-top: 20px;
    padding: 10px;
    background-color: #f4f4f4;
    border-radius: 5px;
    border: 1px solid #ccc;
    display: flex;
    align-items: center;
  }

  .search-input {
    flex: 1;
    padding: 5px;
    border: none;
  }

  .search-button {
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
  }
</style>
</head>
<body>
<div class="container">
  
  <div class="product-details">
    <div class="product-image">
      <img src="{{asset('product_images/product_images/'.$product_detail->product_image)}}" alt="Nom du Produit">
    </div>
    <div class="product-info">
      <h1 class="product-title"> <a href="{{$product_detail->nom}}"></a>{{$product_detail->nom}}</h1>
      <p class="product-author"><a href="{{ url('auteur', $product_detail->author->raison_sociale) }}"> Par:  {{ $product_detail->author->raison_sociale }}</p></a>
      <p class="product-price">$99.99</p>
      <div class="product-likes">
        <span class="like-icon">&#9825;</span>
        <span>120 Likes</span>
      </div>
      <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed luctus libero.</p>
      <div class="action-buttons">
        <button class="action-button">contacter-nous</button>
        <button class="action-button">commander</button>
      </div>
    </div>
    
  </div>
  <div class="additional-description">
    <h2>Description</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed luctus libero. Fusce nec neque id urna dictum aliquet vel vel magna. Sed sed ante vel ex viverra feugiat. Sed consequat turpis non dolor posuere, vel aliquet eros auctor.</p>
    <p>Morbi finibus, justo et aliquam consequat, ex nulla aliquam tortor, a volutpat leo nulla sed odio. Suspendisse potenti. Nunc blandit sit amet risus vel sollicitudin. Sed in vulputate lorem. Vestibulum et turpis a erat gravida hendrerit. Donec maximus dolor nec nisi cursus efficitur. Ut vel elit nec ligula luctus tincidunt nec a odio.</p>
    <p>Morbi finibus, justo et aliquam consequat, ex nulla aliquam tortor, a volutpat leo nulla sed odio. Suspendisse potenti. Nunc blandit sit amet risus vel sollicitudin. Sed in vulputate lorem. Vestibulum et turpis a erat gravida hendrerit. Donec maximus dolor nec nisi cursus efficitur. Ut vel elit nec ligula luctus tincidunt nec a odio.</p>
  </div>
  
</div>
{{-- <div class="sidebar">
    <h2 class="category-title">Catégories</h2>
    <ul class="category-list">
      <li>Catégorie 1</li>
      <li>Catégorie 2</li>
      <li>Catégorie 3</li>
      <!-- ... Ajoutez d'autres catégories ici ... -->
    </ul>
    <div class="search-bar">
      <input type="text" class="search-input" placeholder="Rechercher...">
      <button class="search-button">Rechercher</button>
    </div>
  </div> --}}
</main>
 @endsection