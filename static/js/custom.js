
(function ($) {

  "use strict";

  // MENU
  $('.navbar-collapse a').on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });

  // CUSTOM LINK
  $('.smoothscroll').click(function () {
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height();

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $('body,html').animate({
        scrollTop: totalScroll
      }, 300);
    }
  });

  $(window).on('scroll', function () {
    function isScrollIntoView(elem, index) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(window).height() * .5;
      if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
        $(elem).addClass('active');
      }
      if (!(elemBottom <= docViewBottom)) {
        $(elem).removeClass('active');
      }
      var MainTimelineContainer = $('#vertical-scrollable-timeline')[0];
      var MainTimelineContainerBottom = MainTimelineContainer.getBoundingClientRect().bottom - $(window).height() * .5;
      $(MainTimelineContainer).find('.inner').css('height', MainTimelineContainerBottom + 'px');
    }
    var timeline = $('#vertical-scrollable-timeline li');
    Array.from(timeline).forEach(isScrollIntoView);
  });

})(window.jQuery);

// !! PET BUTTONS !!
// Get all buttons in the pet-button-container
var buttons = document.querySelectorAll('.pet-button-container .pet-button');

// Get the import and export content
var importContent = document.querySelector('.import-pet-div');
var exportContent = document.querySelector('.export-pet-div');


// Add a click event listener to each button
buttons.forEach(function(button) {
  button.addEventListener('click', function() {
    // Remove the 'selected' class from all buttons
    buttons.forEach(function(btn) {
      btn.classList.remove('selected');
    });

    // Add the 'selected' class to the clicked button
    this.classList.add('selected');

    // Show and hide the respective content
    // !!"IMPORT" is case sensitive, make sure it is the same as title in HTML
    if (this.textContent.trim() === 'IMPORT') {
      importContent.style.display = 'block';
      exportContent.style.display = 'none';
    } else {
      importContent.style.display = 'none';
      exportContent.style.display = 'block';
    }
  });
});
