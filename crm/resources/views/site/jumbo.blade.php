@extends('common.mdb-fullpage')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h4 class="card-title h4 pb-2"><strong>Minhas férias inesquecíveis!</strong></h4>
    
        <div class="view overlay my-4">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).webp" class="img-fluid" alt="">
            <a href="#">
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    
        <h5 class="indigo-text h5 mb-4">Meus Retratos</h5>
        <p class="card-text">Estive em Santa Cruz de La Sierra... este lugar inacreditavelmente bonito!.</p>
        <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
        <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
        <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>
    </div>
</div>

@include('parts.blog-post', ['title' => 'Um dia feliz!',  'author' => 'Oprah Winfrey'])
@include('parts.blog-post', ['title' => 'Sol no Guarujá', 'author' => 'Gilberto Gil'])
@include('parts.blog-post', ['title' => 'Minha família',  'author' => 'Paul Mc Cartney'])
@include('parts.blog-post', ['title' => 'Vida de rico',   'author' => 'Airton Senna'])

<div class="container">
<!-- Card Wider -->
<div class="card card-cascade wider">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.webp" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center pb-0">

    <!-- Title -->
    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
    <!-- Text -->
    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
      laudantium, totam rem aperiam. </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

    <!-- Card footer -->
    <div class="card-footer text-muted text-center mt-4">
      2 days ago
    </div>

  </div>

</div>
<!-- Card Wider -->

<!-- Card Narrower -->
<div class="card card-cascade narrower">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).webp"
      alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade">

    <!-- Label -->
    <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
    <!-- Title -->
    <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
    <!-- Text -->
    <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
      laboriosam, nisi ut aliquid ex ea commodi.</p>
    <!-- Button -->
    <a class="btn btn-unique">Button</a>

  </div>

  <!-- Card footer -->
  <div class="card-footer text-muted text-center">
    2 days ago
  </div>

</div>
<!-- Card Narrower -->

<!-- Card Regular -->
<div class="card card-cascade">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.webp" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>Billy Coleman</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
      Facere modi sunt, quod quibusdam.
    </p>

    <!-- Facebook -->
    <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
    <!-- Twitter -->
    <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
    <!-- Google + -->
    <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

  </div>

  <!-- Card footer -->
  <div class="card-footer text-muted text-center">
    2 days ago
  </div>

</div>
<!-- Card Regular -->
</div>
@endsection