var pak = localStorage.getItem('score');
var context = document.getElementById('ha');
context.innerHTML = "Score " + pak;
var gebruikers_input = document.getElementById('ka');


var data = {
  score: pak,
  user: gebruikers_input
};



var config = {
apiKey: "AIzaSyBbFafD2Q_PboZ2BL5bEBbVw_Gx3jrx7aE",
authDomain: "snake-52dbc.firebaseapp.com",
databaseURL: "https://snake-52dbc.firebaseio.com",
projectId: "snake-52dbc",
storageBucket: "snake-52dbc.appspot.com",
messagingSenderId: "709722970318"
};
firebase.initializeApp(config);

var database = firebase.database();


function voeg() {
      var gebruikers_input = document.getElementById('ka').value;
      var data = {
        score: pak,
        user: gebruikers_input
      };
      var score = database.ref('gegevens').push(data);


}


function restart()
{
  window.location.href = "/";
}
