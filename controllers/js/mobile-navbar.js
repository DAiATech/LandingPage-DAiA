class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    animateLinks() {
      this.navLinks.forEach((link, index) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${
              index / 7 + 0.3
            }s`);
      });
    }
  
    handleClick() {
      this.navList.classList.toggle(this.activeClass);
      this.mobileMenu.classList.toggle(this.activeClass);
      this.animateLinks();
    }
  
    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
  );
  mobileNavbar.init();

  



  var navbar = document.querySelector('.nav-header')
  var line = document.querySelector('.line')
  var line2 = document.querySelector('.line2')
  var links = document.querySelector('.links')
  var text = document.querySelectorAll('.a1, .a2, .a3')
  var img = document.querySelector('.logo');

  window.onscroll = function() {
      
    // pageYOffset or scrollY
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled')
      line.classList.add('scrolled')
      line2.classList.add('scrolled')
      links.classList.add('scrolled')
      text.forEach(function(text) {
        text.classList.add('scrolled');
      });
      img.setAttribute('src', '../../views/img/daialogo.png');
    } else {
      navbar.classList.remove('scrolled')
      line.classList.remove('scrolled')
      line2.classList.remove('scrolled')
      links.classList.remove('scrolled')
      text.forEach(function(text) {
        text.classList.remove('scrolled');
      });
      img.setAttribute('src', '../../views/img/daialogow.png');

  }
}