<div class="sku">
<?php 
    $css = 'buy.css';
    require_once 'header.php';
?>

<div class="accordion" id="accordionExample">
  <div class="card ">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="bouton shadow-none text-center text-success  btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Buy an appartment.
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

      <div class="card mb-3 mx-auto" style="max-width: 90%;">
        <div class="row no-gutters">
            <div class="image col-md-4">
                <img src="img/appart2.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title">Appartment 1</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><a class="text-success"href="#">I want it !</a></p>
                 </div>
            </div>
           </div>
        </div>

        <div class="card mb-3 mx-auto" style="max-width: 90%;">
        <div class="row no-gutters">
            
            <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title">Appartment 2</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><a class="text-success"href="#">I want it !</a></p>
                 </div>
            </div>
            
            <div class="imagesku col-md-4">
                <img src="img/appart.jpg" class="card-img" alt="...">
            </div>
           </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="bouton shadow-none text-center text-success  btn btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Buy a house.
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="card mb-3 mx-auto" style="max-width: 90%;">
        <div class="row no-gutters">
            <div class="image col-md-4">
                <img src="img/maison.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title">House 1</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><a class="text-success"href="#">I want it !</a></p>
                 </div>
            </div>
           </div>
        </div>

        <div class="card mb-3 mx-auto" style="max-width: 90%;">
        <div class="row no-gutters">
            
            <div class="col-md-8">
                <div class="card-body">
                 <h5 class="card-title">House 2</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><a class="text-success"href="#">I want it !</a></p>
                 </div>
            </div>
            
            <div class="imagesku col-md-4">
                <img src="img/maison2.jpg" class="card-img" alt="...">
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="bouton shadow-none text-center text-success  btn btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Buy a mansion.
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
    </div>
<?php 
    require 'footer.php';
?>