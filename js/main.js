//Jquery

$(document).ready(() => {

$('.hambuger-bar').on('click', () => {
	$('.bar-2').toggleClass('fade');
	$('.bar-1').toggleClass('transition-top');
	$('.bar-3').toggleClass('transition-bottom');
	$('.logo').toggleClass('active');
	$('.mob-nav').toggleClass('active-1');
	$('.select-product').removeClass('active-1');

	
})

$('.drop-down').on('mouseenter', () => {
	$('.select-product').addClass('active-1');
})

$('.select-product').on('mouseleave', () => {
	$('.select-product').removeClass('active-1');
})







});