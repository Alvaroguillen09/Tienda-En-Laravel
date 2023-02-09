@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!DOCTYPE>
<html lang="en">

<head>
    <!--important tags : these are important settings for your machine to know more about your code and how to display it-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--title-->
    <title>SOBRE NOSOTROS </title>
    <style>
.about-1{
    margin: 30px;
    padding: 5px;
}
.about-1 img{
    width: 800px;
    height: 500px;
    margin: 0 auto;
    display: block;
    margin-bottom: 25px;
}
.about-1 h1{
    text-align: center;
    color: black;
    font-weight: bold;
}
.about-1 p{
    text-align: center;
    padding: 3px;
    color: black;
    font-size: 20px;
}

/*===========================
 adding style to about items 
============================*/

.about-item{
    margin-bottom: 20px;
    margin-top: 20px;
    background-color: #e6810f ;
    padding: 80px 30px;
    box-shadow: 0 0 9px rgba(0,0,0.6);
}


.about-item i{
    font-size: 43px;
    margin: 0;
}

.about-item h3{
    font-size: 25px;
    margin-bottom: 10px;
}

.about-item hr{
    width: 46px;
    height: 3px;
    background-color: #5fbff9;
    margin: 0 auto;
    border: none;
    text-align: center;
}

.about-item:hover{
    background-color: #231f66;
}
.about-item:hover i,
.about-item:hover h3,
.about-item:hover p{
    color: #fff;
}
.about-item:hover hr{
    background-color: #fff;
}

.about-item:hover i{
    transform: translateY(-20px);
}
.about-item:hover i,
.about-item:hover h3,
.about-item:hover hr{
    transition: all 400ms ease-in-out;
}
      </style>
</head>
<body>
 <section id="ABOUT">
 <div class="about-1">
         <P>Somos una empresa especializada en la venta de ordenadores de alta calidad. Ofrecemos una amplia variedad de opciones, desde computadoras de escritorio y portátiles hasta dispositivos de juego y equipos específicos para profesionales. Nuestros productos son seleccionados cuidadosamente para garantizar que cumplen con las últimas especificaciones y tendencias en tecnología.<br>
 <br>  <img src="{{ asset('/img/manos.jpg') }}" width="800px">
Además de nuestros productos de calidad, también ofrecemos un servicio excepcional al cliente. Nuestro equipo de profesionales está disponible para ayudarle a encontrar el ordenador adecuado para sus necesidades y responder cualquier pregunta que tenga. También ofrecemos servicios de instalación y configuración para garantizar que su nuevo ordenador esté listo para su uso.</P>

     </div>
     <div id="about-2">
     <div class="content-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-book"></i>
                     <h3>MISIÓN</h3>
                     <hr>
                     <p> La misión de nuestra empresa es brindar soluciones de tecnología de vanguardia y servicios de alta calidad a nuestros clientes, con el objetivo de mejorar su eficiencia y competitividad en el mercado. En nuestra empresa valoramos la transparencia y honestidad, por lo que no solo ofrecemos precios competitivos, sino también una política de devolución y garantías flexibles.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3>VISIÓN</h3>
                     <hr>
                     <p> Nuestra visión es ser reconocidos como líderes en el mercado de productos de informática, ofreciendo una amplia gama de productos innovadores y de alta calidad, junto con un servicio al cliente excepcional. Trabajamos constantemente para desarrollar relaciones a largo plazo con nuestros clientes y proveedores, y para proporcionar soluciones tecnológicas que satisfagan sus necesidades cambiantes.  </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center">
                     <i class="fa fa-pencil"></i>
                     <h3>CONCLUSIÓN</h3>
 
                     <hr>
                     <p> En nuestra empresa valoramos la transparencia y honestidad, si está buscando un ordenador de alta calidad, un servicio excepcional al cliente y los MEJORES PRECIOS, no busque más allá de nuestra empresa. Estamos seguros de que encontrará lo que necesita en nuestra amplia selección de productos y estaremos encantados de ayudarle en cualquier momento ya que estamos 24h para ti.  </p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
 </section>
  
</body>
</html>
@endsection
