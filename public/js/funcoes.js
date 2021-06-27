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