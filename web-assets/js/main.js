
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
