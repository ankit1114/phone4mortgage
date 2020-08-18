jQuery(document).ready(function($) {
  $('.testimonials-slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1150,
    nav: false,
  });
  $('.blogs-slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 1150,
    nav: false,
  });
  $('.navigation-toggle-buttons button.open').click(function(){
    $('.mobile-navigation-wrapper').addClass('open');
    $(this).addClass('hide');
    $('.navigation-toggle-buttons button.close').addClass('show');
  });
  $('.navigation-toggle-buttons button.close').click(function(){
    $('.mobile-navigation-wrapper').removeClass('open');
    $(this).removeClass('show');
    $('.navigation-toggle-buttons button.open').removeClass('hide');
  });
  $('.mobile-navigation-item.parent > a').click(function(e){
    e.preventDefault();
    $(this).next().addClass('open');
  });
  $('.mobile-navigation-item.parent > span').click(function(e){
    e.preventDefault();
    $(this).next().addClass('open');
  });
  $('.mobile-navigation-sub-menu li.sub-menu-parent > a').click(function(){
    $('.mobile-navigation-sub-menu').removeClass('open');
  });

  //back to top button
  $('#back-to-top-button').click(function(){
    $("html, body").animate({ scrollTop: 0 }, '500');
  });

  // Testimonials Read More
  /*$('.testimonial-content').each(function(){
    var maxLength = 420;
    var textLength = $(this).text().length;
    var htmlLength = $(this).html().length;
    if (textLength > maxLength) {
      var visibleContent = $(this).html().substring(0, maxLength);
      var hiddenContent = $(this).html().substring(maxLength, htmlLength);
      if (visibleContent.substring(maxLength - 4) == '</p>'){
        $(this).empty().html(visibleContent);
        $(this).append('<a href="javascript:void(0);" class="read-more-text">...READ MORE</a>');
      }
      else {
        $(this).empty().html(visibleContent);
        $(this).append('</p><a href="javascript:void(0);" class="read-more-text">...READ MORE</a>');
      }
      if (hiddenContent.substring(0, 3) == '<p>'){
        $(this).append('<span class="hidden-content">' + hiddenContent + '</span>');
      }
      else {
        $(this).append('<span class="hidden-content"><p>' + hiddenContent + '</span>');
      }
    }
  });
  $(".read-more").click(function(){
    var hiddenContent = $(this).siblings(".hidden-content").html();
    if ()
    $(this).siblings(".hidden-content").contents().unwrap();
    $(this).remove();
  });*/
});

//Get the button
var mybutton = document.getElementById("back-to-top-button");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}