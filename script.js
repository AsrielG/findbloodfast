document.querySelectorAll("nav a").forEach(link => {
  
    link.addEventListener("click", function(event) {
      
        event.preventDefault(); 
        const targetId = this.getAttribute("href"); 
        const section = document.querySelector(targetId);
        const index = [...document.querySelectorAll("section")].indexOf(section);
        
        document.querySelector(".slider").style.transform = 
            `translateX(-${index * 100}vw)`;
      
    });
});
