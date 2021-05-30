function excluir(){
	if (confirm("Esta ação é permanente. Deseja mesmo excluir?"))
		alert("Excluído com sucesso!");
}

function formatarMoeda() {
	var elemento = document.getElementById('precoProduto');
	var valor = elemento.value;
		  
	valor = valor + '';
	valor = parseInt(valor.replace(/[\D]+/g,''));
	valor = valor + '';
	valor = valor.replace(/([0-9]{2})$/g, ",$1");

	if (valor.length > 6) {
		valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
	}

	elemento.value = valor;
}

function handleSelectImage(event) {
    if (!event.target.files.length) {
      	return;
    }

    const selectedImages = Array.from(event.target.files);
	const image = URL.createObjectURL(selectedImages[0]);
	const imageContainer = document.querySelector("#image-container");

	imageContainer.innerHTML = `<img src="${image}" alt="">`;
}