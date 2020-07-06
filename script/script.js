

// goToTop

const scrollButton = document.querySelector(".scroll"),
   mainMenu = document.querySelector(".main-menu");

const trackScroll =() =>{
   let scrolled = window.scrollY + 150;
   let y = document.documentElement.clientHeight;

   if (scrolled > y) {
      scrollButton.classList.add("show-button");
      mainMenu.classList.add("navbar-show");
   } else {
      scrollButton.classList.remove("show-button");
      mainMenu.classList.remove("navbar-show");
   }
}

const goUp = () => {
   if (window.pageYOffset > 0) {
      window.scrollBy(0, -80); 
      setTimeout(goUp, 0);
   };
}


// init


   window.addEventListener("scroll", trackScroll);
   scrollButton.addEventListener("click", goUp);  
