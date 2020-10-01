function ocultar() {
  document.getElementById('like').style.display = 'none';
  document.getElementById('likes').style.display = '';
 }
 
 function mostrar() {
   document.getElementById('likes').style.display = 'none';
  document.getElementById('like').style.display = '';
 }

 function ocultarfav() {
  document.getElementById('mdl').style.display = 'none';
  document.getElementById('mdl2').style.display = '';
 }
 
 function mostrarfav() {
   document.getElementById('mdl2').style.display = 'none';
  document.getElementById('mdl').style.display = '';
 }

 var clk = 1;
 function changepublic() {
  
  document.getElementById("lbltypelist").innerHTML = "Privada";
 }

 var clke = 1;
 function changetypeoflist() {
  if(clke==1) {
   document.getElementById("list").innerHTML = "Lista privada";
  clke = clke + 1;  
  }
  else{
     document.getElementById("list").innerHTML = "Lista publica";
    clke = 1;
     }
 }

function rotate_arrow() {
    $('.icon-arrow').toggleClass('spent');
    $('.icon-arrow ').toggleClass('rotate2');  
}

function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id 
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}


function oculta(elemento) {
        ///// capturamos el elemento
    item=$("#"+elemento);

       ///// verificamos su estado
    if($(item).hasClass('visible')) {
        $(item).removeClass('visible');
                //// cambiamos su estado
        $(item).addClass('invisible');
                //// animamos
        $(item).slideUp('fast');
    } else {
        $(item).removeClass('invisible');
        $(item).addClass('visible');
        $(item).slideDown('fast');
    }
}

var clic = 1;
 function rotate(elemento,elemento2) {
     // capturamos los elementos que recibe la funcion
    icon=$("#"+elemento);
    icon2=$("#"+elemento2);

    // verificamos su estado de ambos elementos que sea visible e invisible
    if(clic==1) {
         //quitamos las clases necesarias para que se vea el icono2
        $(icon).removeClass('spent');
        $(icon).addClass('spent_invisible');

        $(icon2).removeClass('spent_invisible');
        $(icon2).addClass('spent');


        clic = clic + 1;
    } else {
        //quitamos las clases necesarias para que se vea el icono1
        $(icon).removeClass('spent_invisible');
        $(icon).addClass('spent');

        $(icon2).removeClass('spent');
        $(icon2).addClass('spent_invisible');
        // animamos
        clic = 1;
    }
}



var clic2 = 1;
 function wishlist(elemento,elemento2) {
     // capturamos los elementos que recibe la funcion
    icon1=$("#"+elemento);
    icon2=$("#"+elemento2);

    // verificamos su estado de ambos elementos que sea visible e invisible
    if(clic2==1) {
         //quitamos las clases necesarias para que se vea el icono2
        $(icon1).removeClass('iconheartadd');
        $(icon1).addClass('iconheartadd2');

        $(icon2).removeClass('iconheartadds2');
        $(icon2).addClass('iconheartadds');


        clic2 = clic2 + 1;
    } else {
        //quitamos las clases necesarias para que se vea el icono1
        $(icon1).removeClass('iconheartadd2');
        $(icon1).addClass('iconheartadd');

        $(icon2).removeClass('iconheartadds');
        $(icon2).addClass('iconheartadds2');
        // animamos
        clic2 = 1;
    }
}

var clic3 = 1;
 function like_like(elemento,elemento2) {
     // capturamos los elementos que recibe la funcion
    like1=$("#"+elemento);
    like2=$("#"+elemento2);

    // verificamos su estado de ambos elementos que sea visible e invisible
    if(clic3==1) {
         //quitamos las clases necesarias para que se vea el icono2
        $(like1).removeClass('iconlikeadd');
        $(like1).addClass('iconlikeadds');

        $(like2).removeClass('iconlikeadds');
        $(like2).addClass('iconlikeadd');


        clic3 = clic3 + 1;
    } else {
        //quitamos las clases necesarias para que se vea el icono1
        $(like1).removeClass('iconlikeadds');
        $(like1).addClass('iconlikeadd');

        $(like2).removeClass('iconlikeadd');
        $(like2).addClass('iconlikeadds');
        // animamos
        clic3 = 1;
    }
}

var clic = 1;
 function rotate2(elemento,elemento2) {
     // capturamos los elementos que recibe la funcion
    icon=$("#"+elemento);
    icon2=$("#"+elemento2);

    // verificamos su estado de ambos elementos que sea visible e invisible
    if(clic==1) {
         //quitamos las clases necesarias para que se vea el icono2
        $(icon).removeClass('icon-arrow-spent');
        $(icon).addClass('icon-arrow-spent2');

        $(icon2).removeClass('icon-arrow-spent2');
        $(icon2).addClass('icon-arrow-spent');


        clic = clic + 1;
    } else {
        //quitamos las clases necesarias para que se vea el icono1
        $(icon).removeClass('icon-arrow-spent2');
        $(icon).addClass('icon-arrow-spent');

        $(icon2).removeClass('icon-arrow-spent');
        $(icon2).addClass('icon-arrow-spent2');
        // animamos
        clic = 1;
    }
}

 function choiceimagen(){
if (screen.width == 320 && screen.height <= 639) 
    document.location.href="./includes/menu/menu1.html";
if (screen.width >= 360 && screen.height <= 667) 
   document.location.href="./includes/menu/menu2.html";
if (screen.width == 411 && screen.height == 731) 
   document.location.href="./includes/menu/menu3.html";
if (screen.width >= 411 && screen.height <= 823) 
   document.location.href="./includes/menu/menu4.html";
else 
   if (screen.width >374 && screen.height >= 812) 
      document.location.href="./includes/menu/menu5.html";
}

function newsshow() {
  var ic1 = document.getElementById("icnews");
  var ic2 = document.getElementById("icnews2");
  var lbl = document.getElementById("lblnews");
  if (ic1.style.display == "none") {
    lbl.style.display = "";
    ic1.style.display = "";
    ic2.style.display = "none";
  } else {
    lbl.style.display = "";
    ic1.style.display = "";
    ic2.style.display = "none";
  }
 }

 function giftshow() {
  var ic1 = document.getElementById("imggift");
  var ic2 = document.getElementById("imggift2");
  var lbl2 = document.getElementById("lblgift");
  if (ic2.style.display === "none") {
    ic1.style.display = "none";
      
    ic2.style.display = "";
    lbl2.style.display = "";
  } else {
    ic1.style.display = "none";
      
    ic2.style.display = "";
    lbl2.style.display = "";
  }
 }

  function addshow() {
  var ic1 = document.getElementById("icnews2");
  var ic2 = document.getElementById("imggift2");
  var lbl2 = document.getElementById("lbladd");
  if (ic1.style.display === "none") {
    ic2.style.display = "";
    ic1.style.display = "";
    lbl2.style.display = "";
  } else { 
      
    ic1.style.display = "";
    lbl2.style.display = "";
  }
 }

  function shownotifications() {
  var ic1 = document.getElementById("icnews2");
  var ic2 = document.getElementById("icnotifcations");
  var ic3 = document.getElementById("icnotifcations2");
  var lbl2 = document.getElementById("lblnotifications");
  if (ic2.style.display === "none" && lbl2.style.display === "none") { 
    ic2.style.display = "none";
    ic1.style.display = "";
    ic3.style.display = "";
    lbl2.style.display = "";
  } else { 
     ic2.style.display = "none";
    ic1.style.display = "";
    ic3.style.display = "";
    lbl2.style.display = "";
  }
 }

  function showwhislist() {
  var ic1 = document.getElementById("icnews2");
  var ic2 = document.getElementById("icwishlist");
  var ic3 = document.getElementById("icwishlists");
  var lbl2 = document.getElementById("lblwishlist");
  if (ic2.style.display === "none" && ic1.style.display === "none" && ic3.style.display === "none") { 
    ic2.style.display = "none";
    ic1.style.display = "";
    ic3.style.display = "";
    lbl2.style.display = "";
  } else { 
     ic2.style.display = "none";
    ic1.style.display = "";
    ic3.style.display = "";
    lbl2.style.display = "";
  }
 }

  function limpiarFormulario() {
    document.getElementById("complaintregister").reset();
  }

 