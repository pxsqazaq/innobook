$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
function checkPass() {
    if (document.getElementById("pass1").value != document.getElementById("pass2").value) {
        alert("Not same password!")
        document.getElementById("register").classList.add("disabled");
    } else {
        document.getElementById("register").classList.remove("disabled");
    }
}