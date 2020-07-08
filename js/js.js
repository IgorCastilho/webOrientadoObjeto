function cadastroUsuario() {
	window.location.href = "cadastroUsuario.php";
}

function verProdutos() {
	window.location.href = "verProdutos.php";
}

function verUsuarios() {
	window.location.href = "verUsuarios.php";
}

function cadastrouSucesso() {
	alert("Cadastrado com sucesso");
	window.location.href = "index.php";
}

function cadastroProdutos() {
	window.location.href = "cadastroProdutos.php";
}

function naoAutorizado(){
	alert("Acesso não autorizado. Faça login.");
	window.location.href = "index.php";
}


function inseriuSucesso() {
	alert("Inserido com sucesso");
	window.location.href = "painel.php";
	
}

function erroLogar(){
	alert("Erro ao logar");
}