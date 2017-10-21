var pak = localStorage.getItem('score');
var context = document.getElementById('ha');
context.innerHTML = "Score " + pak;
var gebruikers_input = document.getElementById('ka')

function setup() {

var config = {
apiKey: "AIzaSyBbFafD2Q_PboZ2BL5bEBbVw_Gx3jrx7aE",
authDomain: "snake-52dbc.firebaseapp.com",
databaseURL: "https://snake-52dbc.firebaseio.com",
projectId: "snake-52dbc",
storageBucket: "snake-52dbc.appspot.com",
messagingSenderId: "709722970318"
};
firebase.initializeApp(config);


console.log(firebase)


}
