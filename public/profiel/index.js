var pak = localStorage.getItem('score');

var hoogste_scoren = document.getElementById('hoogste_scoren').innerHTML = "meest recente scoren: " + pak;

var trofee1unlocked = localStorage.getItem('Trofee1');



$(document).ready(function(){
    $(".trofee1").hide();
  
});



if (trofee1unlocked = true) {
    $(document).ready(function(){
        $(".trofee1").show();
  
    });
} 









