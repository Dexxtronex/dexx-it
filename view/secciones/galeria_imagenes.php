<script type="text/javascript">
    var n;
    function mostrar(nodo){
       var nodoP=document.createElement("P");
       nodoP.innerHTML=nodo.getAttribute("alt");  
        nodoP.style.background="blue";
        nodoP.style.padding="1px";  
        nodoP.style.color="white";
        var nodoD=document.querySelector("#contenedor");
        nodoD.appendChild(nodoP); 
    }
    

    
    function ocultar(){
        //alert("Ocultando Imagen");
    var nodoD=document.getElementById("contenedor");
         nodoD.removeChild(nodoD.lastChild);
    }

   
    

    </script>



<div class="row">

  <div class="col-12 col-sm-12 col-md-12-center col-lg-12 col-xl-12" heigth=40%;>
  <h1>GALERIA DE IMAGENES </h1>
</div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 "> 
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto1.jpg"alt="CAMBIO DE LUCK" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 1</h5>
  </div>
    </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto2.jpg"alt="mascota1" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded"  /></a>
    <h5>Imagen 2</h5>
  </div>
    </div>

  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto3.jpg" alt="mascota2" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 3</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto4.jpg"alt="mascota3" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 4</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto5.jpg"alt="mascota4" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 5</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto6.jpg" alt="mascota5" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded"/></a>
    <h5>Imagen 6</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto7.jpg"alt="mascota6" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 7</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto8.jpg" alt="mascota7" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded" /></a>
    <h5>Imagen 8</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <div id="contenedor">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto9.jpg" alt="mascota8" onmouseover="mostrar(this)" onmouseout="ocultar()"  "class="img-fluid border rounded"/></a>
    <h5>Imagen 9</h5>
  </div>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto10.jpg" /></a>
    <h5>Imagen 10</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto11.jpg" /></a>
    <h5>Imagen 11</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto12.jpg" /></a>
    <h5>Imagen 12</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto13.jpg" /></a>
    <h5>Imagen 13</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto14.jpg" /></a>
    <h5>Imagen 14</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto15.jpg" /></a>
    <h5>Imagen 15</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto16.jpg" /></a>
    <h5>Imagen 16</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto17.jpg" /></a>
    <h5>Imagen 17</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto18.jpg" /></a>
    <h5>Imagen 18</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto19.jpg" /></a>
    <h5>Imagen 19</h5>
  </div>
  <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
    <img class="img-fluid border rounded" src="/veteri/assets/img/foto20.jpg" /></a>
    <h5>Imagen 20</h5>
  </div>


</div>