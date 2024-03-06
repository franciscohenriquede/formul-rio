git add .

<?php
 if(isset($_POST["submit"])) 
   {
     print_r($_post["nome"]);
     print_r($_post["email"]);
     print_r($_post["telefone"]);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right , rgba(0, 0, 255, 0.815), rgba(81, 255, 0, 0.452));
  }
  .box{
    color:aliceblue; 
    position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50% ,-50%);
     background-color: rgba(0, 0,0, 0.7);
     padding: 15px;
     border-radius: 15px;
     width: 20%;

  }
  .fielset{
      border: 3px solid dodgerblue;

}
.legend{
    border: 1px solid darkblue;
    padding: 10px;
    text-align: center;
    background-color: blue;
    border-radius: 5px;
}
.inputbox{
    position: relative;
    }
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
  
} 
.labelInput{
 position: absolute;
 top: 0px;
 left: 0px;
 pointer-events: none;
 transition: 0.5s ;

}

 .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
    top : -20px;
    font-size: 12px;
    color: blue;

}
 #data_nascimento{
border: none;
padding: 8px;
border-radius: 10px;
outline: none;
font-size: 15px;
 }
#submit {
 background-image: linear-gradient(to right , rgba(0, 0, 255, 0.815), rgba(81, 255, 0, 0.452));
 width: 100%;
 padding: 15px;
 color: white;
 font-size: 15px;
 border-radius: 10px;

}
#submit :houver {
    background-image:  linear-gradient(to right , rgba(231, 12, 77, 0.815), rgba(81, 255, 0, 0.452));;
}
</style>
</head>
<body>
    <div class ="box" >
        <form action=" ">
            <fieldset><legend><b>Formulario de clientes</b></legend>
             <br> <br>
              <div class="inputbox">
               <input type="text" name="nome" id="nome" class="inputUser" required>
               <label for="nome" class="labelInput">Nome completo</label>
              </div>
              <br> <br>
              <div class="inputbox">
              <input type="text" name="email" id="email" class="inputUser" required>
              <label for="nome" class="labelInput">Email</label>
              </div>
              <br> <br> 
              <div class="inputbox">
              <input type="tel" name="telefone" id="telefone" class="inputUser" required>
              <label for="nome" class="labelInput">telefone</label>
              </div>
              
               <p>sexo:</p> 
                <input type= "radio" id= "naobinario"  name = "genero"  value="naobinario " required>
                <label for="naobinario">não binario</label>
                <input type= "radio" id= "feminino"  name ="genero"  value="feminino " required>
                <label for="feminino">femenino</label>
                <input type= "radio" id = "masculino"  name = "genero"  value=" masculino " required>
                <label for="masculino">Masculino</label>
                <br> <br>
        
                   <label for="data_nascimento"  > Data de nascimento:</label>
                   <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br> <br> 
                <br> 
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">cidade</label>
                 </div>
                 <br> <br>
                 <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput" >estado</label>
                 </div>
                 <br> <br>
                 <div class="inputbox"> 
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput" >endereço</label>
                 </div>
                 <br> <br>
                 <input type="submit" name="submit" id= "submit"  value="enviar">
                </fieldset>

              
        </form>
    </div>
</body>
</html>