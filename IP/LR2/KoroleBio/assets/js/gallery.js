let numberImage = 1; 
const countImage = 3; 
const pathImage = "image/gallery/"



function changeImage(){
   let image =pathImage+"0"+numberImage+"jpg";
   let speed = 3000;
   $("#mainImage").fadeOut(speed, function(){
        $("#mainImage").attr("src", image);
        $("#mainImage").fadeIn(speed);
   });
}

function leftChangeImage(){
if(numberImage > 1)
    numberImage--;
else 
    numberImage = countImage;
}
function rihtChangeImage(){
if(numberImage < countImage)
    numberImage++;
else 
    numberImage = 1;
}