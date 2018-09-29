// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-8" + " w3-animate-top" + " w3-light-grey";
    } else {
        navbar.className = navbar.className.replace(" w3-card-8 w3-animate-top w3-light-grey", " w3-white");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navSmall");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function minimizeBot(){
    var box = document.getElementById("chatBot");
    var icon = document.getElementById("botIcon");
    var con =  document.getElementById("con");
    var textbox =  document.getElementById("usertext");
    if(box.style.height == "40px"){
        box.style.height = "400px";
        icon.className = " w3-text-white fa fa-close";
    }
    else {
        box.style.height = "40px";
        icon.className = " w3-text-white fa fa-expand";
        con.innerHTML = "";
        textbox.value="";
    }
}

function showAndHide(show, hide){
    document.getElementById(show).style.display = "block";
    document.getElementById(hide).style.display = "none";
}

function createAct(){
    var con = document.getElementById("activityCon");
    var amount = document.getElementById('actAmount');
    while(con.firstChild){
        con.removeChild(con.firstChild);
    }
    for(var i=0;i<amount.value;i++){
        
        var div = document.createElement("DIV");
        var name = document.createElement("INPUT");
        var price = document.createElement("INPUT");
        var img = document.createElement("INPUT");
        var br = document.createElement("BR");
        var h3 = document.createElement("h3");
      
        div.className="w3-card-2 w3-padding";
        div.style.marginBottom = '10px';

        h3.innerHTML = "Activity #"+(i+1);

        name.type="text";        
        name.className="w3-input w3-border";
        name.placeholder="Enter activity name";
        name.name ="aname[]";
        name.style.marginBottom = '10px';

        price.type="text";
        price.className="w3-input w3-border";
        price.placeholder="Enter activity price";
        price.name = "price[]";
        price.style.marginBottom = '10px';

        img.type="file";
        img.className="w3-input w3-border";
        img.name = "userfile[]";

        div.appendChild(h3);
        div.appendChild(name);
        div.appendChild(br);
        div.appendChild(price);
        div.appendChild(br);
        div.appendChild(img);
        div.appendChild(br);

        con.appendChild(div);
    }

}


function createPlace(){
    var con = document.getElementById("placeCon");
    var amount = document.getElementById('placeAmount');
    while(con.firstChild){
        con.removeChild(con.firstChild);
    }
    for(var i=0;i<amount.value;i++){
        
        var div = document.createElement("DIV");
        var name = document.createElement("INPUT");
        var price = document.createElement("INPUT");
        var img = document.createElement("INPUT");
        var br = document.createElement("BR");
        var h3 = document.createElement("h3");
      
        div.className="w3-card-2 w3-padding";
        div.style.marginBottom = '10px';

        h3.innerHTML = "Place #"+(i+1);

        name.type="text";        
        name.className="w3-input w3-border";
        name.placeholder="Enter Place name";
        name.name ="lname[]";
        name.style.marginBottom = '10px';

        price.type="text";
        price.className="w3-input w3-border";
        price.placeholder="Enter place distance";
        price.name = "pdis[]";
        price.style.marginBottom = '10px';

        img.type="file";
        img.className="w3-input w3-border";
        img.name = "ppic[]";

        div.appendChild(h3);
        div.appendChild(name);
        div.appendChild(br);
        div.appendChild(price);
        div.appendChild(br);
        div.appendChild(img);
        div.appendChild(br);

        con.appendChild(div);
    }

}
