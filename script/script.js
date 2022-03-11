const menu = document.querySelector(".nav-menu");
const tooggle = document.querySelector(".toggle");

tooggle.addEventListener("click", () =>{
    menu.classList.toggle("nav-menu-visible");
   if(menu.classList.contains("nav-menu-visible")){
tooggle.setAttribute("arial-label" , "Cerrar menú");
   }else{
tooggle.setAttribute("arial-lael" , "Abrir menú");
   }


});
$(document).ready(function() {
   $('a[href^="#"]').click(function() {
     var destino = $(this.hash); //this.hash lee el atributo href de este
     $('html, body').animate({ scrollTop: destino.offset().top }, 500); //Llega a su destino con el tiempo deseado
     return false;
   });
 });