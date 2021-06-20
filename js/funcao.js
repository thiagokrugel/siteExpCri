var nome;
var sobrenome;
var senha;
var email;
var tel;

function GravarDados(){
    
    nome = document.getElementById("nome").value; 
    sobrenome = document.getElementById("sobrenome").value;
    senha = document.getElementById("senha").value;
    email = document.getElementById("email").value;
    anime = document.getElementById("anime").value;
    
    if(nome!='' && sobrenome!='' && senha!='' && email!='' && anime!='')
        {
        comunicaservidor();
        }
    else{
        alert("campos são obrigatórios");
        }
}
function comunicaservidor(){
    var senha_hash_md5 = $.MD5(senha);
    $.ajax({
        type:"POST",
        datatype:"json",
        url:"php/GravarDados.php",
        data:{ch_nome:nome, ch_senha:senha_hash_md5}
    });
}

