/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var nome = document.querySelector('#id_nome');
var matricula = document.querySelector('#id_matricula');
var email = document.querySelector('#id_email');
var curso = document.querySelector('#id_curso');
var senha = document.querySelector('#id_senha');
var confsenha = document.querySelector('#id_confsenha');
var formulario = document.querySelector('#id_formulario');

function limpalogin()
{
   if ((matricula.value!=="") || (senha.value!==""))   {
       matricula.value="";
       senha.value="";    
   }
}



function login(){
    
    if ((matricula.value == "124578") &&  (senha.value == "142536" ))
    {
        window.location.href='menu_projetos.html';  
    }
    else{
        alert('Ou você errou alguma coisa, ou não tem acesso! :(')
    }
        
}

function Onlychars(e)
{

	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if (((tecla >= "33") && (tecla <= "64")) || ((tecla >= "91") && (tecla <= "96")) || ((tecla >= "123") && (tecla <= "125"))){
		return false;
	}
};


function testeform()  {
   var teste1 = false;
   var teste2 = false;
        
    teste1 = testesenhasiguais();
    teste2 = testeemail();
    
    if ((teste1==true) && (teste2==true))
    {
       document.getElementById("id_formulario").submit(); 
       window.location.href='login.html';
    }
}

function testeemail()
{
    var teste = email.value;
    var verifica = false;
    if(teste !== '') 
        {
            if ((teste.includes('@gmail.com')) || (teste.includes('@bol.com.br')) || (teste.includes('@hotmail.com')) || (teste.includes('@outlook.com')) || (teste.includes('@yahoo.com.br')) || (teste.includes('@yahoo.com')))  
                {
                    verifica = true;
                }
        }
        
    if (verifica == false)  
        {
            alert('Email inválido');
        }  
    return  verifica;
}

function testesenhasiguais()
{
    var verifica = false;
    if (confsenha.value != senha.value) {
        alert('As senhas não estão iguais');
    } 
    else {
        verifica = true;
    }
    return verifica;
}

function checaTamanho(el) {
  if (el.value.length < 6) {
    alert("A senha precisa ter ao menos 6 caracteres!");
  }
} 

