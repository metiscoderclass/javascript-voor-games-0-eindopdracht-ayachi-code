var slang;
var scl;


function setup() {
  createCanvas(800,600);
  slang = new Snake();
  

}

function keyPressed() {
  if (keyCode == UP_ARROW) {
    slang.dir(0,-1);
  } else if (keyCode == DOWN_ARROW) {
      slang.dir(0,1);
    } else if (keyCode == RIGHT_ARROW) {
        slang.dir(1,0);
    } else if (keyCode == LEFT_ARROW) {
        slang.dir(-1,0);
    }
}



function draw() {
    background(50);
    slang.update();
    slang.show();
    slang.check();






}
