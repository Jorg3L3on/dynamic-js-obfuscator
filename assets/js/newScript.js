function changeColor(newColor){
    const elem = document.getElementsByClassName('card-thumbnail');
    for(var i = 0; i < elem.length; i++){
		elem[i].style.fill = newColor;
	}
}