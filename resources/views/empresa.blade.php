@extends('layout.inside')

@section('conteudo')

<!-- inicio do carousel-->
<div id="carouselExampleIndicators" class="carousel slide  " data-ride="carousel">
    
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img class=" slide1 d-block img-fluid "  src="/img/quemsomos.jpg" alt="First slide"> 
            <div class="carousel-caption d-none d-md-block">
                <div style="font-size: 45px;  " class="text-center"> SOBRE NÓS </div>
            </div>
                                
        </div>
        
        
    </div>

</div>
</div><!-- final do carousel-->

<div class="container mt-5 mb-5">
    <div class="row ">
        <div class=" col-lg-6 col-md-12 " >
            <h4> Bem vindos ao natural raiz, seu e-commerce de produtos naturais! </h4>
            <p class="mt-5 " style="font-size: 18px; "> 
                Somos a Natural Raiz. Buscamos aproximar a alimentação natural, produzida por pequenos
                agricultores das regiões periféricas da cidade de São Paulo, para seus vizinhos também das
                regiões periféricas. Vendemos alimentos naturais e saudáveis a um custo menor do que as
                grandes redes de supermercados, porque não temos intermediários, é da horta direto para
                sua casa!
                </p>
        </div>   
        
        <div class="col-lg-6 col-md-12">
            
                <img src="img/colhendocenoura.jpeg" class="img-fluid mb-5" alt="">
    
            </div>
    
        </div>
        <div class="row">
            
            <div class="col-lg-6 col-md-12">
                
                    <img src="img/colheita.jpeg" class="img-fluid" alt="">
        
                </div>
            <div class="col-lg-6 col-md-12 ">
                <p class="mt-5" style="font-size: 18px; ">
                        Garantimos produtos frescos, que podem ser colhidos e entregues no mesmo dia, a um
                        preço justo e ajudando o crescimento da economia das regiões mais populosas e mais
                        carentes da cidade. Colaborando para a alimentação saudável dos nossos vizinhos
                        Nosso e-commerce abrange somente as regiões periféricas próximas aos produtores, nosso
                        projeto piloto abrange o extremos da zona sul de São Paulo, com produtores da região de
                        Parelheiros para os consumidores da região do Grajaú, no perímetro de no máximo 10 km,
                        para que o custo de frete seja coerente com a realidade da região.</p>
                        
    
            </div>   
        
            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h2> Nossos parceiros </h2>
        <div class="row">
            <div class="col-lg-3">
                <img src="img/garden.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
                <img src="img/lemon.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
                <img src="img/organic.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
                <img src="img/renu.jpg" class="img-fluid" alt="">
            </div>
            
        </div>
    </div>

</div>


<br>
<br>
<hr>


@endsection