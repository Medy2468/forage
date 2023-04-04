var tabUsers = [];
var tabClient = [];
var tabCompte = [];


function init_tab_employe(){
    $.ajax({
        type : "get",
        url : 'http://localhost/banque_l2gl/ajax/getUsers.php',
        dataType : 'json',
        success : function(donnees){
             //console.log(donnees);
            for (let i = 0; i < donnees.length; i++) {
                tabUsers.push(donnees[i]);
            }
        }, 
        error : function(){
            console.log("Erreur de recupération");   
        }
    });
}

init_tab_employe();
 console.log(tabUsers); 

var error = 0;
var cpt =0;

function recherche(){
    error=0;
    cpt=0;
    var searchBox = document.getElementById("rechercher");
    var users = document.querySelectorAll(".Users");
    var searchFilter;

    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        console.log(searchFilter);

        users.forEach(function (u) {
    
            if(searchFilter!=""){
                console.log(u.id.includes(searchFilter));
                if(u.id.includes(searchFilter)){
                    //initSearch();
                    error=0;
                    console.log(u.id);
                   
                    //break;
                }else if(!u.id.includes(searchFilter)){
                    cpt=1;
                    error=1;
                    u.setAttribute("hidden","hidden");
                  
                }
            }

        });
       
    });

}

function initSearch() {
    var searchBox = document.getElementById("rechercher");
    var users = document.querySelectorAll(".Users");
    var searchFilter;
    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        if(searchFilter==''){

            users.forEach(function (u) {
                //alert("djjdjd");
                    u.removeAttribute("hidden");
            });
            errorSearch.innerText = "";
        }
    });
}

/* ------------------------------ PARTIE CLIENT ----------------------------- */

function init_tab_client(){
    $.ajax({
        type : "get",
        url : 'http://localhost/banque_l2gl/ajax/getClient.php',
        dataType : 'json',
        success : function(donnees){
            // console.log(donnees);
            for (let i = 0; i < donnees.length; i++) {
                tabClient.push(donnees[i]);
            }
        }, 
        error : function(){
            console.log("Erreur de recupération");   
        }
    });
}
init_tab_client();
console.log(tabClient);

var erreur = 0;
var cmpteur =0;
function rechercherClient(){
    erreur = 0;
    cmpteur =0;
    var searchBox = document.getElementById("rechercher");
    var client = document.querySelectorAll(".Client");
    var searchFilter;

    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        console.log(searchFilter);

        client.forEach(function (c) {
    
            if(searchFilter!=""){
                console.log(c.id.includes(searchFilter));
                if(c.id.includes(searchFilter)){
                    //initSearch();
                    erreur=0;
                    console.log(c.id);
                   
                    //break;
                }else if(!c.id.includes(searchFilter)){
                    cmpteur=1;
                    erreur=1;
                    c.setAttribute("hidden","hidden");
                  
                }
            }

        });
       
    });
}

function initSearche() {
    var searchBox = document.getElementById("rechercher");
    var client = document.querySelectorAll(".Client");
    var searchFilter;
    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        if(searchFilter==''){

            client.forEach(function (c) {
                //alert("djjdjd");
                    c.removeAttribute("hidden");
            });
            errorSearch.innerText = "";
        }
    });
}

/*------------------------------------------- PARTIE COMPTE -------------------------------*/



function init_tab_compte(){
    $.ajax({
        type : "get",
        url : 'http://localhost/banque_l2gl/ajax/getCompte.php',
        dataType : 'json',
        success : function(donnees){
            // console.log(donnees);
            for (let i = 0; i < donnees.length; i++) {
                tabCompte.push(donnees[i]);
            }
        }, 
        error : function(){
            console.log("Erreur de recupération");   
        }
    });
}

init_tab_compte();

console.log(tabCompte);

var erreur = 0;
var cmpteur =0;
function rechercherCompte(){
    erreur = 0;
    cmpteur =0;
    var searchBox = document.getElementById("rechercher");
    var compte = document.querySelectorAll(".Compte");
    var searchFilter;

    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        console.log(searchFilter);

        compte.forEach(function (c) {
    
            if(searchFilter!=""){
                console.log(c.id.includes(searchFilter));
                if(c.id.includes(searchFilter)){
                    //initSearch();
                    erreur=0;
                    console.log(c.id);
                   
                    //break;
                }else if(!c.id.includes(searchFilter)){
                    cmpteur=1;
                    erreur=1;
                    c.setAttribute("hidden","hidden");
                  
                }
            }

        });
       
    });
}

function initSearchee() {
    var searchBox = document.getElementById("rechercher");
    var compte = document.querySelectorAll(".Compte");
    var searchFilter;
    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        if(searchFilter==''){

            compte.forEach(function (c) {
                //alert("djjdjd");
                    c.removeAttribute("hidden");
            });
            errorSearch.innerText = "";
        }
    });
}

/*--------------------------------- PARTIE SIDENAV ---------------------------------- */

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
/* ------------------------------ PARTIE SIDENAV -----------------------------------*/

/*
function color(color) { // fonction à revoir 
    document.forms[0].nom.style.background = color;
  }

  function texte() {   // fonction à revoir
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }


  function printPage() {   // fonction à revoir
    window.print();
  }
  */

initSearchee();
rechercherCompte();

initSearche();
rechercherClient();

initSearch();
recherche();




