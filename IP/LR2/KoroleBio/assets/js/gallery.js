let numberImage = 1; 
const countImage = 3; 
const pathImage = "/image/gallery/"
const countDiv = 15;
const speed = 100;


function generateImage(){
    let widthDiv = 600/countDiv;
    let image = pathImage+"0"+numberImage+".jpg";
    for (let i = 0; i <countDiv; i++){
        let item = $("<div></div>");
        item.addClass("elementImage");
        item.css("width", widthDiv + "px");
        item.css("background-image", 'url('+image+')');    
        item.css("background-position-x", - i * widthDiv + "px");
         $("#mainImage").append(item);
    } 
}



function changeImage(){
 let image = pathImage+"0"+numberImage+".jpg";
let i=1; 
 $("#mainImage div").each(function(){
  
    $(this).fadeOut(speed*i, function(){
        $(this).css("background-image", 'url('+image+')');
        $(this).fadeIn(speed*i);
    });
    i++;
});  
}

function leftChangeImage(){
if(numberImage > 1)
    numberImage--;
else 
    numberImage = countImage;
    changeImage()
}

function rightChangeImage(){
if(numberImage < countImage)
    numberImage++;
else 
    numberImage = 1;
    changeImage()
}

setInterval(function() { counter = 0; }, 1000);

$(document).ready(function(){
    generateImage();
});