//  const cloche = document.querySelector(".fa-bell") 
//  const section_notif = document.querySelector(".section_notif")
//  cloche.addEventListener("click",()=>{
//     console.log("misy inona eee");
//     section_notif.style.display = "block"

// })

$(document).ready(function(){
    $(".tasks").click(function(){
        $(".section_notif").hide();
        $(".user_menu").toggle();
    });

    $(".bell").click(function(){
        $(".user_menu").hide();
        $(".section_notif").toggle();
    });

    $(".logout").click(function(){
        $("#logout-form").submit();
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(".tasks, .user_menu, .bell, .section_notif").length) {
            $(".user_menu, .section_notif").hide();
        }
    });
});