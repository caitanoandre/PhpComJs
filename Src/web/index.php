<!DOCTYPE html>
<html>
<head>
<title>Cadastro Presença</title>
</head>
<body>


<?php
echo"
    
    
    
    <h1>Cadastro de Nascionalida</h1>
    Digite a sua nacional <input type='text' id='nas'>
    <input type='button' value='Verificar' onclick='verificar()''>
    <div id='res'></div>
    <br>
    
    

<script>

function verificar (){
  var vel =document.getElementById('nas')
  var res = window.document.getElementById('res')
  var vei= String(vel.value)

  if( vei =='brasileiro'){
   
    res.innerHTML += '<p>Você é Brasileiro </p>'
}

else {

res.innerHTML += '<p>Você é ' +vei+' Coloque seu passaporte';
var nome = window.prompt('Digite o seu nome');
var r = window.prompt('Digite o passaporte');
alert(' Ola ,'+nome + ' seu passaporte é  ' + r +',sua nacionalidade, '+vei)



}


}
var corpo =window.document.body
corpo.style.color='blue'
corpo.style.background='aqua'
 
</script>
"
;?>
</body>
</html>