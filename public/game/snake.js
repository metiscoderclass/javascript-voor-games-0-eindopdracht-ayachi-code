
function Snake() {
  this.x = 0;
  this.y = 0;
  this.xspeed = 1;
  this.yspeed = 0;
  this.totaal = 0;
  this.lengte = [];
  this.kansen = 0;
  this.kansenp = document.getElementById('kansen');
  this.score = 0;
  this.scorep = document.getElementById('scoren');
  this.scorenonthoud;


  this.eat = function(pos) {
    var d = dist(this.x, this.y, pos.x, pos.y);
    if (d < 1) {
      this.totaal++;
      this.score += 1;
      this.scorep.innerHTML = "Score " + this.score;
      return true;
    } else {
      return false;
    }
  }


  this.eeteenspeciaalbal = function (pos) {
    var d = dist(this.x,this.y,pos.x,pos.y);
    if (d < 1) {
      console.log("speciaal bal");
      this.score += 10;
      this.totaal++
      this.scorep.innerHTML = "Score " + this.score;
      return true;
    } else {
      return false;
    }
  }



  this.dir = function(x, y) {
    this.xspeed = x;
    this.yspeed = y;
  }

  this.death = function() {
    for (var i = 0; i < this.lengte.length; i++) {
      var pos = this.lengte[i];
      var d = dist(this.x, this.y, pos.x, pos.y);
      if (d < 1) {
        this.kansen += 1;
        this.kansenp.innerHTML = "pogingen " + this.kansen;
        if (this.kansen != 3) {
          this.totaal = 0;
          this.lengte = [];
        } else if (this.kansen = 3) {
          window.location.href = "gameover/index.html"
      }
    }
  }

this.bilal = function () {
  if (this.kansen == 2) {
      this.scorenonthoud = localStorage.setItem("score", this.score);
  }
}

  this.update = function() {
    for (var i = 0; i < this.lengte.length - 1; i++) {
      this.lengte[i] = this.lengte[i + 1];
    }
    if (this.totaal >= 1) {
      this.lengte[this.totaal - 1] = createVector(this.x, this.y);
    }

    this.x = this.x + this.xspeed * scl;
    this.y = this.y + this.yspeed * scl;

    this.x = constrain(this.x, 0, width - scl);
    this.y = constrain(this.y, 0, height - scl);
  }

  this.show = function() {
    fill(255);
    for (var i = 0; i < this.lengte.length; i++) {
      rect(this.lengte[i].x, this.lengte[i].y, scl, scl);
    }
    rect(this.x, this.y, scl, scl);

  }



}
}
