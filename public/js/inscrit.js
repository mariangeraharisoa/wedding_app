 const cloche = document.querySelector(".fa-bell") 
 const section_notif = document.querySelector(".section_notif")
 cloche.addEventListener("click",()=>{
    console.log("misy inona eee");
    section_notif.style.display = "block"

})

$(document).ready(function(){
    $(".tasks").click(function(){
        $(".user_menu").toggle();
    });

    $(".logout").click(function(){
        $("#logout-form").submit();
    });
});