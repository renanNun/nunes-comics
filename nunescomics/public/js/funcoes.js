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

<<<<<<< HEAD
function handleSelectImage(event) {
    if (!event.target.files.length) {
      	return;
    }

    const selectedImages = Array.from(event.target.files);
	const image = URL.createObjectURL(selectedImages[0]);
	const imageContainer = document.querySelector("#image-container");

	imageContainer.innerHTML = `<img src="${image}" alt="">`;
=======
function fecharJanela(el){
	document.getElementById(el).style.visibility = "hidden";
}

function highlightButton(element) {
	const pagination = document.querySelector('.pagination');
	const activeButton = pagination.querySelector('.active');

	if (activeButton) {
		activeButton.classList.remove('active');
	}

	element.parentElement.classList.add('active');
}

function highlightNextButton() {
	const pagination = document.querySelector('.pagination');
	const pageItems = pagination.querySelectorAll('.page-item');
	const pageItemsLength = pageItems.length;

	for (let i = 1; i < pageItemsLength - 2; i++) {
		if (pageItems[i].classList.contains('active')) {
			pageItems[i].classList.remove('active');
			pageItems[i + 1].classList.add('active');
			break;
		}
	}
}

function highlightPreviousButton() {
	const pagination = document.querySelector('.pagination');
	const pageItems = pagination.querySelectorAll('.page-item');
	const pageItemsLength = pageItems.length;

	for (let i = pageItemsLength - 1; i > 1; i--) {
		if (pageItems[i].classList.contains('active')) {
			pageItems[i].classList.remove('active');
			pageItems[i - 1].classList.add('active');
			break;
		}
	}
>>>>>>> main
}