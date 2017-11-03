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
var database = firebase.database();

var ref = database.ref("gegevens");
ref.on("value", gotData, errData);


function gotData(data) {
    var scores = data.val()
    var keys = Object.keys(scores)
    for (var i = 0; i < keys.length; i++) {
      var k = keys[i];
      var naam = scores[k].user;
      var scoren = scores[k].score;
      //console.log(naam, scoren)
      var li = createElement('li', naam + ": " + scoren);
      li.parent('scorelijst');
    }
}


function errData(err) {
      console.log("Je hebt een error " + err)
}


}
