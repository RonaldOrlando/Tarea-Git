//Menu
var enlaces = document.querySelectorAll(".nav-link");

enlaces.forEach(function(enlace) {
    enlace.addEventListener("mouseover", function() {
      enlace.style.color = "red";
    });

    enlace.addEventListener("mouseout", function() {
        enlace.style.color = ""; // Restaura el color original al quitar el ratón
      });
    });

    //efecto de imagen de libros
    var imagen = document.getElementById('img-thumbnail');

    imagen.addEventListener('mouseenter', function() {
      // Acciones al pasar el puntero sobre la imagen
      imagen.style.transform = 'scale(1.2)';
    });

    imagen.addEventListener('mouseleave', function() {
      // Acciones al retirar el puntero de la imagen
      imagen.style.transform = 'scale(1)';
    });