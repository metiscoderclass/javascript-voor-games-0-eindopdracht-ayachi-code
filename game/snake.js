function Snake()
{

  this.x = 100;
  this.y = 0;
  this.xspeed = 1;
  this.yspeed = 0;
  this.update = function () {
      this.x = this.x + this.xspeed;
      this.y = this.y + this.yspeed;
  }
  this.show = function () {
    fill(250);
    rect(this.x, this.y, 10, 10)
  }

    this.dir = function (x, y) {
        this.xspeed = x;
        this.yspeed = y;

    }



    this.check = function () {
      if (this.x >= 800) {
          this.x = 0;
      } else if (this.y >= 600) {
        this.y = 0;
      } else if (this.y <= 0) {
        this.y = 600
      } else if (this.x <= 0) {
        this.x = 800
      }
    }

}
