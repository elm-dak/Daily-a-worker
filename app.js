const image = [...document.querySelectorAll(".blog-post_img img")];
const popup = document.querySelector(".popup-image");
const closeBtn = document.querySelector('.popup-image span');


le
image.forEach((item, i) => {
	item.addEventListener('click', () => {
		popup.classList.toggle('active');
		
	})
})



closeBtn.addEventListener('click', () => {
	popup.classList.toggle('active');
})



 