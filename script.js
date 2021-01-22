const aiwm = document.querySelector('.pios a');
const song = document.querySelector('.song');]
aiwm.addEvenListener('click',function(){
    if(song.className==="song"){
        song.className="song2";
    }
    else{
        wyjazd.className="song";
    };
})
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("myCon").style.marginleft = "250px";
}
function closeNav() {
    document.getElementById("mySidenav").style.left = "-250px";
    document.getElementById("myCon").style.marginleft = "0px";
    document.getElementById("MenuP").style.display = "none";
    document.getElementById("menuf").style.display = "none";
    document.getElementById("menub").style.display = "none";
}


