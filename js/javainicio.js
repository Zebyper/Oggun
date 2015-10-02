 function profesional(){
	 document.getElementById("campoperfil").style.background = "rgba(197,234,248,1)";
	 document.getElementById("seleccionperfil").innerHTML= "Profesional";
	 }
	 
	 
	 function tecnico(){
	 document.getElementById("campoperfil").style.background = "rgba(226,240,182,1)";
	 document.getElementById("seleccionperfil").innerHTML= "Técnico";
	 }
	  function talento(){
	 document.getElementById("campoperfil").style.background = "rgba(255,236,192,1)";
	 document.getElementById("seleccionperfil").innerHTML= "Talento";
	 }
	  function oficio(){
	 document.getElementById("campoperfil").style.background = "rgba(255,202,202,1)";
	 document.getElementById("seleccionperfil").innerHTML= "Oficio";
	 }

	 
	 function ocultaerror(box){
	 document.getElementById("errorcontenedor").style.visibility="hidden";
	 if(box!=1){
	 show_box(box);
	 }
	 }
	 
	 function verOtro(perfil){
	 switch (perfil){
	 case 1:
	 valorotro=54;
	 break;
	 case 2:
	 valorotro=88;
	 break;
	 case 3:
	 valorotro=31;
	 break;
	 case 4:
	 valorotro=28;
	 break;
	 case 5:
	 valorotro=11;
	 break;
	 default:
	 valorotro=0;
	 break;
	 }
	 if(document.getElementById("profesion").value==valorotro){
	 document.getElementById("formulariovalorotro").style.display="block";
	 }else{
	 document.getElementById("formulariovalorotro").style.display="none";
	 }
	 }
	 
	 function verOtro2(perfil){
	 switch (perfil){
	 case 1:
	 valorotro2=54;
	 break;
	 case 2:
	 valorotro2=88;
	 break;
	 case 3:
	 valorotro2=31;
	 break;
	 case 4:
	 valorotro2=28;
	 break;
	 case 5:
	 valorotro2=11;
	 break;
	 default:
	 valorotro2=0;
	 break;
	 }
	 if(document.getElementById("profesion2").value==valorotro2){
	 document.getElementById("formulariovalorotro2").style.display="block";
	 }else{
	 document.getElementById("formulariovalorotro2").style.display="none";
	 }
	 }
	 
	 function verificaFacebook(){
urlfb=document.getElementById('facebook');
resultadofb=document.getElementById('resultadourlfb');
if (urlfb.value.indexOf('facebook.com/')>= 0){
resultadofb.style.color='green';
resultadofb.innerHTML='URL valido';
}else{
resultadofb.style.color='red';
resultadofb.innerHTML='Inserta un URL valido de Facebook<br> Copia la dirección del url de tu perfil en Facebook, y pégala arriba';
urlfb.value='';
}
}
	 function verificaTwitter(){
urltt=document.getElementById('twitter');
resultadott=document.getElementById('resultadourltt');
if (urltt.value.indexOf('twitter.com/')>= 0){
resultadott.style.color='green';
resultadott.innerHTML='URL valido';
}else{
resultadott.style.color='red';
resultadott.innerHTML='Inserta un URL valido de Twitter<br> Copia la dirección del url de tu perfil en Twitter, y pégala arriba';
urltt.value='';
}
}

function eliminaFoto(idfoto,confirmarfoto){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp5=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp5=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp5.onreadystatechange=function()
  {
  if (xmlhttp5.readyState==4 && xmlhttp5.status==200)
    {
    document.getElementById("casillaf"+idfoto).innerHTML=xmlhttp5.responseText;
	if(confirmarfoto!=0 && confirmarfoto!=1 && confirmarfoto!=2 && confirmarfoto!=3){
	window.location.reload(); 
	}
    }
  }
  if(confirmarfoto!=0 && confirmarfoto!=1 && confirmarfoto!=2 && confirmarfoto!=3){//actualiza foto perfil
  xmlhttp5.open("GET","eliminarfotovideo.php?idfoto="+idfoto+"&perfil="+confirmarfoto,true);
  }else{
  xmlhttp5.open("GET","eliminarfotovideo.php?idfoto="+idfoto+"&confirmarfoto="+confirmarfoto,true);
  }
xmlhttp5.send();
}

function confirmaFoto(nombre,tipo){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp6=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp6=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp6.onreadystatechange=function()
  {
  if (xmlhttp6.readyState==4 && xmlhttp6.status==200)
    {
	//if(tipo==1){
	window.location.reload(); 
	//}else{
	//document.getElementById("preview2").innerHTML=xmlhttp6.responseText;
	//}
    }
  }
  if(tipo==1){
  xmlhttp6.open("GET","ajaximage.php?confirmar=1&nombre="+nombre,true);
  }else{xmlhttp6.open("GET","ajaximage.php?confirmar=2&nombre="+nombre,true);}
xmlhttp6.send();
}

function cambiaFotoRecorte(foto){
document.getElementById("cropbox").src = foto;
document.getElementById("cropboxpreview").src = foto;
initCrop();//Inicializar nuevamente el plugin de corte
}


function hacerRed(sth1){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp7=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp7=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp7.onreadystatechange=function()
  {
  if (xmlhttp7.readyState==4 && xmlhttp7.status==200)
    {
	document.getElementById("cajared").innerHTML=xmlhttp7.responseText;
    }
  }
xmlhttp7.open("GET","amigos.php?ida="+sth1,true);
xmlhttp7.send();
}

function eliminarRed(sth1){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp8=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp8=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp8.onreadystatechange=function()
  {
  if (xmlhttp8.readyState==4 && xmlhttp8.status==200)
    {
	document.getElementById("cajared"+sth1).innerHTML=xmlhttp8.responseText;
    }
  }
xmlhttp8.open("GET","amigos.php?ida="+sth1+"&eliminar=true",true);
xmlhttp8.send();
}


function enviarMensaje(stu){
msj=document.getElementById("escribemsj"+stu).value;
priv=document.getElementById("checkprivado"+stu).checked;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp9=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp9=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp9.onreadystatechange=function()
  {
  if (xmlhttp9.readyState==4 && xmlhttp9.status==200)
    {
	document.getElementById("cajamsj"+stu).innerHTML=xmlhttp9.responseText;
	//window.location.reload(); 
    }
  }
xmlhttp9.open("GET","mensajes.php?msj="+msj+"&pri="+priv+"&usu="+stu,true);
xmlhttp9.send();
}


function eliminarMsj(stu){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp10=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp10=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp10.onreadystatechange=function()
  {
  if (xmlhttp10.readyState==4 && xmlhttp10.status==200)
    {
	document.getElementById("listamsj"+stu).innerHTML=xmlhttp10.responseText;
    }
  }
xmlhttp10.open("GET","mensajes.php?idmsj="+stu+"&eliminar=true",true);
xmlhttp10.send();
}