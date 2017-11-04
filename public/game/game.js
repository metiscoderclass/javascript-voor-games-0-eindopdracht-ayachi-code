var s;
var scl = 20;

var food;
var snoep;
var kdjesbk;


function sleep(delay) {
    var start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}


function setup() {
  createCanvas(600, 600);
  s = new Snake();
  frameRate(10);
  pickLocation();
  spicklocation();

}

var kans = function () {
  kdjesbk = floor(random(0,5));
  console.log(kdjesbk)

}

function pickLocation() {
  var cols = floor(width/scl);
  var rows = floor(height/scl);
  food = createVector(floor(random(cols)), floor(random(rows)));
  food.mult(scl);
}

function spicklocation() {
  var cols = floor(width/scl);
  var rows = floor(height/scl);
  snoep = createVector(floor(random(cols)), floor(random(rows)));
  snoep.mult(scl)
}


setInterval(kans,3000);



function draw() {
  background(51);

  if (s.eat(food)) {
    pickLocation();
  }



  if (s.eeteenspeciaalbal(snoep)) {
    spicklocation();
  }

  s.death();
  s.update();
  s.show();
  s.bilal();
  s.trofee();


  


  fill(255, 50, 100);
  rect(food.x, food.y, scl, scl);


  if (kdjesbk == 2) {
    fill(100,100,50);
    rect(snoep.x,snoep.y,scl,scl)
  } 

}



function keyPressed() {
  if (keyCode === UP_ARROW) {
    s.dir(0, -1);
  } else if (keyCode === DOWN_ARROW) {
    s.dir(0, 1);
  } else if (keyCode === RIGHT_ARROW) {
    s.dir(1, 0);
  } else if (keyCode === LEFT_ARROW) {
    s.dir(-1, 0);
  }
}
