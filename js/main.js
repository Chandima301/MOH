var tabs = document.getElementsByClassName('tabs');

function toggleTab(tab){
    for (var index = 0; index < tabs.length; index++) {
        tabs[index].style.visibility = "hidden";
        
    }

    document.getElementById(tab).style.visibility = "visible";
}