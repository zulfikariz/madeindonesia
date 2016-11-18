
$(window).load(function() {
  var winwid = $(window).width();
     win = winwid / 4;
  $(".loader").fadeOut("slow");
});

$('#partner ul li').height($('#partner ul li').width());
$(document).ready(function() {

$("#submit").click(function() {

var nama = $("#nama").val();
var tempat_lahir = $("#tempat_lahir").val();
var tanggal_lahir = $("#tanggal_lahir").val();
var jenis_kelamin = $("#jenis_kelamin").val();
var gol_darah = $("#gol_darah").val();
var facebook = $("#facebook").val();
var motivasi = $("#motivasi").val();
var jenis_kelamin = $("#jenis_kelamin").val();
var pekerjaan = $("#pekerjaan").val();
var email = $("#email").val();
var alamat = $("#alamat").val();
var phone = $("#phone").val();
var photo = $('input[type=file]').val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
 if (nama == '' || email == '' || phone == '') {
alert("Please Fill Required Fields");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("../page-baru", {
nama: nama,
tempat_lahir: tempat_lahir,
tanggal_lahir: tanggal_lahir,
jenis_kelamin: jenis_kelamin,
pekerjaan: pekerjaan,
email: email,
motivasi: motivasi,
gol_darah: gol_darah,
facebook: facebook,
alamat: alamat,
photo: photo,
phone: phone
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your Query has been received, We will contact you soon.") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});



  $("html").niceScroll({
    scrollspeed: 100
  });

  // Dynamic Height
  $('.height').height($(window).height());
  $(window).resize(function() {
      $('.height').height($(window).height());
  });

  //mixitup

   $('.mixup').mixitup();

  // Partner height

  $(window).resize(function() {
      $('#partner ul li').height($('#partner ul li').width());
  });
  $('#partner ul li').hover(function() {
      $(this).find('.overlay').stop().fadeOut();
  }, function() {
      $(this).find('.overlay').stop().fadeIn();
  })

  $('.testimonial').flexslider({
        animation: "slide",
        controlNav: true,
        animationLoop: true,
        slideshow: true
  });

  $('#main-menu ul li').hover(function() {
    var height = $(this).outerHeight();
    $(this).find('.dropdown').stop().animate({
        opacity: 1,
        top: height
    },150)
  }, function() {
    $(this).find('.dropdown').stop().animate({
        opacity: 0,
        top: 70
    }, 150)
  })

  $('.team ul li').hover(function() {
    $(this).find('.overlay').stop().fadeToggle();
  })

  $('.student-testi').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 430,
        itemMargin: 0,
        minItems: 1, // use function to pull in initial value
        maxItems: 4,
        controlNav: false // use function to pull in initial value
    });

  $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: true
  });

  $('.mc-image').attr('data-stellar-background-ratio', 0.5)

    // Parallax effect
    $('#slider div').stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });


	// Resize main background
	resizeWindow();

	function resizeWindow(e) {
		var slideshowHeight = $(window).height() - $('#header').outerHeight();
		$('#slider, .backstretch').height(slideshowHeight);
	};
	$(window).bind('resize', resizeWindow);

  var menu = jQuery('#top-header'),
        pos = menu.offset();

    $(menu).addClass('default');

  $(window).scroll( function(){
    if($(this).scrollTop() > menu.height()){
        menu.addClass('fixed')
    } else if($(this).scrollTop() <= menu.height()){
        menu.removeClass('fixed')
    }
  });

  var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       40,          // distance to the element when triggering the animation (default is 0)
      mobile:       true        // trigger animations on mobile devices (true is default)
    }
);
wow.init();

// // post feed
// $("#comment").submit(function(){
//   $.ajax({
//            type: "POST",
//            url: "<?php echo site_url(feed/create_comment); ?>",
//            data: dataString,
//            success: function(data){

//                           }
//          });
//          return false;
// });



});
