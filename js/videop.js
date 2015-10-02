//window.addEventListener('load', iniciar, false);



//Reproductor 


function abrirvideo(vi,idvi,idus,pe){
fondo=document.getElementById('fondoreproductor');
//barra=document.getElementsByClassName('vjs-control-bar');
//barra=barra[0];
fondo.style.visibility='visible';
fondo.style.display='block';
//barra.style.visibility='visible';
showVid(vi,idvi,idus,pe);
}

function cerrarvideo(){
/*videojs("medio").ready(function(){
  var myPlayer = this;

  myPlayer.pause();

});


barra.style.visibility='hidden';*/
video.src="";
fondo.style.visibility='hidden';
fondo.style.display='none';
//fondo.style.display='none';
//medio.pause();


}


function cambiarvideo(vi,idvi){
/*videojs("medio").ready(function(){
  var myPlayer = this;

  myPlayer.pause();
  $("video:nth-child(1)").attr("src",vi);
  
});
*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp2.onreadystatechange=function()
  {
  if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    {
    document.getElementById("resultadoinfovideo").innerHTML=xmlhttp2.responseText;
	video=document.getElementById('videoprincipal');
	video.src="//www.youtube.com/embed/"+vi+"?rel=0&autoplay=1&showinfo=0";
    }
  }
xmlhttp2.open("GET","infovideo.php?idvideo="+idvi,true);
xmlhttp2.send();


}


function showVid(vi,idvi,idus,pe)
{
cambiarvideo(vi,idvi);



if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("videorelacionados").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","reproductor.php?idusuario="+idus+"&perfil="+pe,true);
xmlhttp.send();
}






function iniciar() {
maximo=600;
medio=document.getElementById('medio');
reproducir=document.getElementById('reproducir');
barra=document.getElementById('barra');
progreso=document.getElementById('progreso');
reproducir.addEventListener('click', presionar, false);
barra.addEventListener('click', mover, false);
}


function presionar(){
if(!medio.paused && !medio.ended) {
medio.pause();
reproducir.innerHTML='Reproducir';
window.clearInterval(bucle);
}else{
medio.play();
reproducir.innerHTML='Pausar';
bucle=setInterval(estado, 1000);//Ejecuta estado 1 ves cada segundo
}
}


function mover(e){
if(!medio.paused && !medio.ended){
var ratonX=e.pageX-barra.offsetLeft;
var nuevoTiempo=ratonX*medio.duration/maximo;
medio.currentTime=nuevoTiempo;
progreso.style.width=ratonX+'px';
}
}


function estado(){
if(!medio.ended){
var total=parseInt(medio.currentTime*maximo/medio.duration);
progreso.style.width=total+'px';
}else{
progreso.style.width='0px';
reproducir.innerHTML='Reproducir';
window.clearInterval(bucle);//Al finalizar termina el bucle
}
}


function votar(idvideo,idusuario)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp2.onreadystatechange=function()
  {
  if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    {
    document.getElementById("resultadovoto").innerHTML=xmlhttp2.responseText;
    }
  }
xmlhttp2.open("GET","infovideo.php?idvideo="+idvideo+"&idusuariovoto="+idusuario,true);
xmlhttp2.send();
}



//Galeria imagenes


function abrirgaleria(pi,id,pe){
fondogaleria=document.getElementById('fondogaleria');
fondogaleria.style.visibility='visible';
fondogaleria.style.display='block';
showPict(pi,id,pe);
}

function cerrargaleria(){
fondogaleria.style.visibility='hidden';
fondogaleria.style.display='none';
}

function cambiarimagen(pi,id){
//imagen.src=pi;
vinculo=document.getElementsByClassName('vinculoimagen');
for (index = 0; index < vinculo.length; ++index) {
	vinculo[index].href="perfil.php?usuario="+id;
}

}




function showPict(pi,id,pe)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("galeriarelacionados").innerHTML=xmlhttp.responseText;
	cargarGaleria();
	//imagen=document.getElementById('imagengrande');
	//vinculo=document.getElementById('vinculoimagen');
	cambiarimagen(pi,id);
	
    }
  }
xmlhttp.open("GET","galeria.php?idusuario="+id+"&perfil="+pe,true);
xmlhttp.send();
}


