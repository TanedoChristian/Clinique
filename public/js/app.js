function showInfo(number){

    if(number == "1") {
        document.getElementById("student").style.display = "flex";
        document.getElementById("emergency").style.display = "none";
    } else {
        document.getElementById("student").style.display = "none";
        document.getElementById("emergency").style.display = "flex";
    }

}