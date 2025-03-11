document.querySelectorAll("nav a").forEach(link => {
  
    link.addEventListener("click", function(event) {
      
        event.preventDefault();
        const targetId = this.getAttribute("href"); 
        const section = document.querySelector(targetId);
        document.querySelector(".slider").style.transform = 
            `translateX(-${section.offsetLeft}px)`;
      
    });
});
