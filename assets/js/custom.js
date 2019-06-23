 $( document ).ready(function() {

        var images = [
            "https://picsum.photos/800/391/?image=335",
            "https://picsum.photos/800/391/?image=443",
            "https://picsum.photos/800/391/?image=513"    
        ];

        var imageIndex = 0;

        
        $("#next").on("click", function(){
            imageIndex = (imageIndex+1) % (images.length);    
            $("#image").attr('src', images[imageIndex]);
        });

        $("#image").attr(images[0]);

    });