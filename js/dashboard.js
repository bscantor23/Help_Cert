let options_button = document.getElementById("options-button");
let options_container = document.getElementById("options");

options_button.addEventListener("click", function() {

    if(options_container.style.visibility == "visible" ){
        options_container.style.visibility = "hidden";
    }else{
        options_container.style.visibility = "visible";
    }

});
