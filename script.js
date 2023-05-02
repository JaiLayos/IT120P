function toggleView(e){
	console.log(e.target);
	if(e.target.classList.contains('list-layout')){
		console.log('list layout');
		document.querySelector('.toggle-btns ').children[0].classList.add('active');
		document.querySelector('.toggle-btns ').children[1].classList.remove('active');
		
		document.querySelector('.project-container').classList.add('list');
		document.querySelector('.project-container').classList.remove('grid');
		
	}else if(e.target.classList.contains('grid-layout')){
		console.log('grid layout');
		document.querySelector('.toggle-btns ').children[0].classList.remove('active');
		document.querySelector('.toggle-btns ').children[1].classList.add('active');
		
		document.querySelector('.project-container').classList.remove('list');
		document.querySelector('.project-container').classList.add('grid');
	}
}