var slideIndex = 1;
                showSlide(slideIndex);
            
                function nextslide(n){
                    showSlide(slideIndex += n);
                }
    
                function dotslide(n){
                    showSlide(slideIndex = n);
                }
    
                function showSlide(n){
                    var a;
                    var slidesguru = document.getElementsByClassName("imgslide-fade");
                    var dot = document.getElementsByClassName("dot");
    
                    if (n > slidesguru.length){
                        slideIndex = 1
                    }
    
                    if (n < 1){
                        slideIndex = slidesguru.length;
                    }
       
                    for (a = 0; a <slidesguru.length; a++){
                        slidesguru[a].style.display = "none";
                    }
    
                    for (a = 0; a <slidesguru.length; a++){
                        dot[a].clasName = dot[a].className.replace;("active")
                    }
    
                    slidesguru[slideIndex - 1].style.display = "block"
                }