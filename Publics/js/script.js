'use strict';



/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElems = [overlay, navOpenBtn, navCloseBtn];

for (let i = 0; i < navElems.length; i++) {
  navElems[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}



/**
 * header & go top btn active on page scroll
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 80) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});


//Call jQuery before below code
$('.main-btn').click(function() {
  $('.search-description').slideToggle(100);
});
$('.search-description li').click(function() {
  var target = $(this).html();
  var toRemove = 'By ';
  var newTarget = target.replace(toRemove, '');
  //remove spaces
  newTarget = newTarget.replace(/\s/g, '');
  $(".search-large").html(newTarget);
  $('.search-description').hide();
  $('.main-input').hide();
  newTarget = newTarget.toLowerCase();
  $('.main-' + newTarget).show();
});
$('#main-submit-mobile').click(function() {
  $('#main-submit').trigger('click');
});
$(window).resize(function() {
  replaceMatches();
});

function replaceMatches() {
  var width = $(window).width();
  if (width < 516) {
    $('.main-location').attr('value', 'City or postal code');
  } else {
    $('.main-location').attr('value', 'Search by city or postal code');
  }
};
replaceMatches();

function clearText(thefield) {
  if (thefield.defaultValue == thefield.value) {
    thefield.value = ""
  }
}

function replaceText(thefield) {
  if (thefield.value == "") {
    thefield.value = thefield.defaultValue
  }
}

