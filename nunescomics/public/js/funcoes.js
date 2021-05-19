function excluir(){
	if (confirm("Esta ação é permanente. Deseja mesmo excluir?"))
		alert("Excluído com sucesso!");
}

function addProduto(){
	document.getElementById("addProduto").style.visibility = "visible";
}

function fecharJanela(el){
	document.getElementById(el).style.visibility = "hidden";
}