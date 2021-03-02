//HamburgerIcon
function hamburgerMenu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function setNavActive() {
  aObj = document.getElementsByClassName('topnav')[0].getElementsByTagName('a');
  for (i = 0; i < aObj.length; i++) {
    if (document.location.href.indexOf(aObj[i].href) >= 0) {
      aObj[i].className = 'active';
    }
  }
}