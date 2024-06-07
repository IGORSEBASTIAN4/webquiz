<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="imagen/x-icon">
    <title>Quiz</title>

    <style>
    body{
        background-image: linear-gradient(to right, #a10032, #4d001c);
        font-family: Arial, Helvetica, sans-serif;
    }
    .box{
        position: absolute;
        top : 50%;
        left : 50%;
        transform: translate(-50%,-50%);
        background-color : rgba(0, 0, 0, 0.7);
        padding: 10px;
        border-radius: 15px;
        width: 44%;
        color: white;
    }
    fieldset{
        border: 3px solid firebrick;
    }
    legend{
        border: 1px solid firebrick;
        padding: 10px;
        text-align: center;
        background-color: firebrick;
        border-radius:8px ;
        

    }
    .inputQuiz{
        position: relative;
    
    }
    .inputUser{
        background: none;
        border:none ;
        border-bottom: 1px solid white;
        outline: none;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
        color: white;
    }
    .labelDados{
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;  
      transition: .5s ;
      color: white;

    }
    .inputUser:focus ~ .labelDados,
    .inputUser:valid ~ .labelDados{
        top: -20px;
        font-size: 12px;
        color: firebrick;
    }
    #submit{
        background-image: linear-gradient(to right, #b22222,#800000 );
        width: 100%;
        border: none;
        padding:15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }
    #submit:hover{
        background-image: linear-gradient(to right,#870000, #190a05);
    }
</style>
</head>
<body>
 <div class="box">
    <form action="gravar.php" method="POST" name="quizForm" onsubmit="return validateForm()">
        <fieldset>
            <legend><b>Pesquisa do dia-a-dia</b></legend>
            <br>
            <div class="inputQuiz">
            <input type="text" name="nome"  class="inputUser" required>
            <label for="nome" class="labelDados">Qual o seu nome? </label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="cidade"  class="inputUser" required>
            <label for="cidade" class="labelDados">Em qual cidade você mora ? </label>
            </div>
            <br>
            <div class="inputQuiz">
            <input type="text" name="atividade"  class="inputUser" required>
            <label for="atividade" class="labelDados">Você pratica atividade fisica? </label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="facul"  class="inputUser" required>
            <label for="facul" class="labelDados">Você faz alguma facudade se sim, responda o curso ?</label>
            </div>
            <br>
            <div class="inputQuiz">
            <input type="text" name="profi"  class="inputUser" required>
            <label for="profi" class="labelDados">Você Trabalha se sim, qual profissão? </label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="salario"  class="inputUser" required>
            <label for="salario" class="labelDados">Atualmente Quantos você ganha por mês? </label>
            </div>
            <br>
            <div class="inputQuiz">
            <input type="text" name="gostaria"  class="inputUser" required>
            <label for="gostaria" class="labelDados">Quantos você gostaria de receber ?</label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="idade"  class="inputUser" required>
            <label for="idade" class="labelDados">Qual sua idade ? </label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="sexo"  class="inputUser" required>
            <label for="sexo" class="labelDados">Qual o seu genêro sexual ? </label>
            </div> 
            <br>
            <div class="inputQuiz">
            <input type="text" name="feliz" class="inputUser" required>
            <label for="feliz" class="labelDados">E por ultimo você é feliz ?  </label>
            </div> 
            
            <p> <input type="submit" name="bt" value="Gravar" id = "submit"> </p>
        </fieldset>
    </form>
</div>

<script>
    function validateForm() {
        const fields = [
            { name: "nome", min: 3, max: 50 },
            { name: "cidade", min: 3, max: 50 },
            { name: "atividade", min: 3, max: 50 },
            { name: "facul", min: 3, max: 50 },
            { name: "profi", min: 3, max: 50 },
            { name: "salario", min: 1, max: 20 },
            { name: "gostaria", min: 1, max: 20 },
            { name: "idade", min: 1, max: 3 },
            { name: "sexo", min: 3, max: 10 },
            { name: "feliz", min: 3, max: 10 }
        ];

        for (const field of fields) {
            const value = document.forms["quizForm"][field.name].value;
            if (value.length < field.min || value.length > field.max) {
                alert(`O campo ${field.name} deve ter entre ${field.min} e ${field.max} caracteres.`);
                return false;
            }
        }
        return true;
    }
</script>
</body>
</html>
