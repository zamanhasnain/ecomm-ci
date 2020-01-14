// $(window).resize(function() {
//     if( $(this).width() <=576 ) {
//     	 $('#navbarDropdown1').attr('data-toggle','model');
//        alert('hello');
//     }
// });





function openNav() {
	document.getElementById("mySidenav").style.width = "80%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.body.style.backgroundColor = "rgba(0,0,0,0)";
}

// bank and promo

$('#collapseOne').on('show.bs.collapse', function () {
	$('[data-toggle=collapse]').prop('disabled',true);
	$('#viewAll').remove();
	$('#viewAllNext').removeClass("d-none");

});
$(document).ready(function(){

	$('.product-card-one').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 3,

		swipeToSlide:true,


		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 4 ,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,

			}
		}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});

	$('.product-card-two').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 3,
		variableWidth: false,
		swipeToSlide:true,


		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 4 ,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,

			}
		}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});
	$('.single-img').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide:true,
		responsive:[{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		}]

	});

	$('.proc-cat').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 7,
		slidesToScroll: 8,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 7,
				slidesToScroll: 5,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		}
		]
	});});
