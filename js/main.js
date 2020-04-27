
function view(id){
    var a = document.getElementsByClassName("btn-base-login");
    for (let index = 0; index < a.length; index++) {
        a[index].style.display = "none";
        
    }
    document.getElementById(id).style.display = "block";
   
}
