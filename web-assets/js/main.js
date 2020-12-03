
var coll = document.getElementsByClassName("faq");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {

    var content = this.nextElementSibling;
    content.classList.toggle("active");
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight*3 + "px";
    }
  });
}


function navMenu(){
  let ham = document.getElementsByClassName('nav__items__mob')[0];
  ham.classList.toggle('active')
}

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

  $(".type .tab").on("click", function () {
    var check = $(this).hasClass("active");
    if (!check) {
      $(".type .tab").removeClass("active");
      $(this).addClass("active");
    }
  });

  $(".faq-tab.type").on("click", function () {
    var check = $(this).hasClass("active");
    if (!check) {
      $(".faq-tab.type .tab").removeClass("active");
      $(this).addClass("active");
    }
  });

  $(".pages .page").on("click", function () {
    var check = $(this).hasClass("active");
    if (!check) {
      $(".pages .page").removeClass("active");
      $(this).addClass("active");
    }
  });

  $(".pages .img1").on("click", function () {
    $(".pages .page").each(function () {
      var numbers = parseInt($(this).text()) - 1;
      if ($(this).hasClass("active") && numbers <= 2 && numbers > 0) {
          var prevActive = numbers - 1;
          $(".pages .page").removeClass("active");
          $(".pages .page").eq(prevActive).addClass("active");
      }
    });
  });

  $(".pages .img2").on("click", function () {
    $(".pages .page").each(function () {
      var numbers = parseInt($(this).text()) - 1;
      if ($(this).hasClass("active") && numbers < 2 && numbers > -1) {
        var nextActive = numbers + 1;
        $(".pages .page").removeClass("active");
        $(".pages .page").eq(nextActive).addClass("active");
        return false;
      }
    });
  });

  $(".social-image.facebook").hover(function(){
    $(this).attr("src", "web-assets/images/icons/facebook-hover.svg")
  }, function(){
    $(this).attr("src", "web-assets/images/icons/facebook.svg")
  });
  $(".social-image.instagram").hover(function(){
    $(this).attr("src", "web-assets/images/icons/insta-hover.svg")
  }, function(){
    $(this).attr("src", "web-assets/images/icons/insta.svg")
  });
  $(".social-image.twitter").hover(function(){
    $(this).attr("src", "web-assets/images/icons/twitter-hover.svg")
  }, function(){
    $(this).attr("src", "web-assets/images/icons/twitter.svg")
  });
  $(".social-image.linkedin").hover(function(){
    $(this).attr("src", "web-assets/images/icons/linkedin-hover.svg")
  }, function(){
    $(this).attr("src", "web-assets/images/icons/linkedin.svg")
  });
});
