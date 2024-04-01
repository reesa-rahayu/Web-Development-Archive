//getElement
const form = document.getElementById("game-form");
const canvasContainer = document.getElementById("canvas-container");
const canvasOverlay = document.getElementById("canvas-overlay-container");
const startOverlay = document.getElementById("canvas-overlay-container-start");
const countdownOverlay = document.getElementById("canvas-overlay-countdown");
const topPanel = document.getElementById("top-panel-container");
const scoreBoard = document.getElementById("score");
const canvas = document.getElementById('canvas');

//Awal Dokumen dibuka
topPanel.style.display = 'none';
countdownOverlay.style.display = 'none';
canvas.style.display = 'none';

form.addEventListener('submit', function(event) {
  event.preventDefault() //prevent load default

   //Update player name and level display
  const playerName = document.getElementById('name').value;
  const selectedLevel = document.getElementById('level').value;
  document.getElementById('player-name').textContent = playerName;
  document.getElementById('selected-level').textContent = selectedLevel;

  //Show top panel
  topPanel.style.display = 'grid';

  //Hide game form
  startOverlay.style.display = "none"

  //Display countdown overlay
  countdownOverlay.style.display = "flex"

  //Start countdown
  let timeLeft = 3;
  const countdownInterval = setInterval(() => {
    if (timeLeft > 0) {
      countdownOverlay.textContent = `Starting game in ${timeLeft}...`;
    }
    timeLeft--;
    if (timeLeft < 0) {
      clearInterval(countdownInterval);
      startGame();
    }
  }, 1000);
})

function startGame(){
  //Hide countdown
  countdownOverlay.style.display = 'none';
  //hide overlay
  canvasOverlay.style.display = "none";
  //Show canvas
  canvas.style.display = 'flex'
  //run game initialization
  gameInit()
}

var ctx = canvas.getContext('2d');
function gameInit() {
  console.log("GAME INIT START")
  //draw Car
  //draw Road
  //draw Obstacle
  //Update Score  
}

//car Object
class Car {
  constructor() {
      this.x = 350;
      this.y = 500;
  }

  //add turn animation
  show() {
      if (turnRight == true) {
          ctx.save();
          ctx.translate(this.x + 100, this.y + 100);
          ctx.rotate(20 * Math.PI / 180);
          ctx.translate(-(this.x + 100), -(this.y + 100));
          ctx.drawImage(carImage, this.x, this.y);
          ctx.restore();
          return;
      }
      if (turnLeft == true) {
          ctx.save();
          ctx.translate(this.x + 100, this.y + 100);
          ctx.rotate(-20 * Math.PI / 180);
          ctx.translate(-(this.x + 100), -(this.y + 100));
          ctx.drawImage(carImage, this.x, this.y);
          ctx.restore();
          return;
      }
      ctx.drawImage(carImage, this.x, this.y);
  }

  // Move car function.
  move() {
      if (turnLeft == true) {
          this.x -= 5;
      }
      if (turnRight == true) {
          this.x += 5;
      }
      //Check if Collide with the road
      if (gameStarted) {
          if (this.x < road[53].o - 50 || this.x + 200 > road[53].o + 450) {
              resetGame();
          }
          if (road[53].e != false) {
              let dif = Math.abs((this.x + 100) - road[53].e);
              if (dif < 80) {
                  resetGame();
              }
          }
      }
  }
}

function resetGame() {
  console.log("GAME OVER!")
}
