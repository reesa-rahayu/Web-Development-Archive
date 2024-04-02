//getElement
const form = document.getElementById("game-form");
const canvasContainer = document.getElementById("canvas-container");
const canvasOverlay = document.getElementById("canvas-overlay-container");
const startOverlay = document.getElementById("canvas-overlay-container-start");
const countdownOverlay = document.getElementById("canvas-overlay-countdown");
const topPanel = document.getElementById("top-panel-container");
const scoreBoard = document.getElementById("score");
const canvas = document.getElementById('canvas');
const playerNameInput = document.getElementById('name');
var selectedLevel = "";

//variables
var ctx = canvas.getContext('2d');
var gameStarted = false;
var totalBlocks = 0;
let road = [];
let turnLeft = false;
let turnRight = false;
let roadCurve = 0;
let straightBlocks = 0;
let turnBlocks = 0;
let speed = 10;
let score = 0;
var countSound = new Audio('sounds/count.mp3');
var playSound = new Audio('sounds/Manual.mp3');
var moveSound = new Audio('sounds/Kanan-kiri.mp3');
var crashSound = new Audio('sounds/Nabrak.mp3');
var gameoverSound = new Audio('sounds/Gwenchanayo2.mp3');

//coba
var enemycars = ["./assets/images/car_black.svg", "./assets/images/car_green.svg", "./assets/images/car_red.svg", "./assets/images/car_yellow.svg"]

//Document Opened
topPanel.style.display = 'none';
countdownOverlay.style.display = 'none';
canvas.style.display = 'none';

//car Object
class Car {
  constructor() {
      this.x = 350;
      this.y = 450;
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

      // Play move sound when the car moves
      if (turnLeft || turnRight) {
      if (!window.moveSound.paused) {
          window.moveSound.pause();
          window.moveSound.currentTime = 0;
      }
      window.moveSound.play();
  }

      //COLLITION CHECKER
      if (gameStarted) {
        console.log(road[53].o)
        //Collides with the road
        const carLeft = this.x;
        const carRight = this.x + 100;
        const roadLeftBound = road[53].o - 50;
        const roadRightBound = road[53].o + 450;
        if (carLeft < roadLeftBound || carRight > roadRightBound) {
            gameOver();
            crashSound.play();
        }
        //Collides with an obstacle
        if (road[53].e) {
            let dif = Math.abs((this.x + 75) - road[53].e);
            const obstacleWidth = 60; 
                if (dif < obstacleWidth) {
                    gameOver();
                    crashSound.play();
                }
        }
      }
  }
}

//add controller
window.addEventListener("keydown", function (e) {
  if (gameStarted) {
    e.preventDefault();
    if (e.keyCode == 37) {
        turnLeft = true;
        turnRight = false;
    } else if (e.keyCode == 39) {
        turnRight = true;
        turnLeft = false;
    }
  }
});
window.addEventListener("keyup", function (e) {
  if (e.keyCode == 37) {
      turnLeft = false;
      turnRight = false;
  } else if (e.keyCode == 39) {
      turnRight = false;
      turnLeft = false;
  }
});

//car init
let carImage = new Image();
carImage.src = "assets/images/car.png"
let car = new Car();

//Create Road Array Map
function createRoad() {
  let total = canvas.height / 10;
  for (let i = 1; i < total + 1; i++) {
      createObstacle(250, i);
  }
}
// Create obstacle Map
function createObstacle(offset, i) {
  totalBlocks++;
  let element = false;
  let rn = Math.random();
  if (gameStarted && totalBlocks % 30 == 0 && Math.random() > 0.7) {
      let x = (rn * 300) + offset + 50;
      element = x;
  }
  road.unshift({ o: offset, w: 400, e: element });
}

// Drawing the Road and Obstacle
function showRoad() {
  for (let i = 0; i < road.length; i++) {
    if (i > 0) {
      //draw road
        ctx.beginPath();
        ctx.moveTo(road[i].o, i * speed);
        ctx.lineWidth = 10;
        ctx.lineTo(road[i - 1].o, (i * speed) + speed);
        ctx.strokeStyle = "#fdfffe";
        ctx.stroke();

        ctx.beginPath();
        ctx.moveTo(road[i].o + 400, i * speed);
        ctx.lineWidth = 10;
        ctx.lineTo(road[i - 1].o + 400, (i * speed) + speed);
        ctx.strokeStyle = "#fdfffe";
        ctx.stroke();
    }
    if (road[i].e != false) {
      var enemycar = new Image(); 
      enemycar.src = 'assets/images/car_ood.svg';
      ctx.drawImage(enemycar, road[i].e, i * speed, 60, 120);
    }
  }
}

//Update Road Turn and Obstacle
function updateRoad() {
  let r = Math.random();
  switch (roadCurve) {
    case 0:
        if (straightBlocks < 5) {
            createObstacle(road[0].o, straightBlocks);
            road.pop();
            straightBlocks++;
        } else {
            straightBlocks = 0;
            if (r > 0.5 && road[0].o < canvas.width - 500) {
                roadCurve = 1;
            } else if (road[0].o >= 100) {
                roadCurve = -1;
            }
        }
        break;
    case 1:
        if (turnBlocks < 80 && road[0].o < (canvas.width - 500)) {
            let offset = road[0].o;
            offset = offset + (turnBlocks / 20);
            createObstacle(offset, turnBlocks);
            road.pop();
            turnBlocks++;
        } else {
            turnBlocks = 0;
            roadCurve = 0;
        }
        break;
    case -1:
        if (turnBlocks < 80 && road[0].o > 100) {
            let offset = road[0].o;
            offset = offset - (turnBlocks / 20);
            createObstacle(offset, turnBlocks);
            road.pop();
            turnBlocks++;
        } else {
            turnBlocks = 0;
            roadCurve = 0;
        }
        break;
  }
}

//submit listener
form.addEventListener('submit', function(event) {
  event.preventDefault() //prevent load default

   //Update player name and level display
  var playerName = playerNameInput.value;
  document.getElementById('player-name').innerText = playerName;
  selectedLevel = document.getElementById('level').value; 
  document.getElementById('selected-level').innerText = selectedLevel;

  //update speed
  speed = getSpeed(selectedLevel);

  //check log
  console.log(`playing for ${playerName} on level ${selectedLevel} speed ${speed}`);

  //Show top panel
  topPanel.style.display = 'grid';

  //Hide game form
  startOverlay.style.display = "none"

  //start game
  startGame()
})

function getSpeed(level){
  switch(level) {
    case "easy":
      speed = 10;
      break;
    case "medium":
      speed = 20;
      break;
    case "hard":
      speed = 30;
      break;
    case "brutal":
      speed = 40;
      break;
    default:
      speed = 10;   
  }
  return speed;
}

function showCountDown(){
  let countdown = 3;
  //Display countdown overlay
  const countdownInterval = setInterval(() => {
    countdownOverlay.textContent = `Starting game in ${countdown}...`;
    //update sound
    countSound.play()

    canvasOverlay.style.display = "flex"
    countdownOverlay.style.display = "flex"
    countdown--;
    if (countdown < 0) {
      clearInterval(countdownInterval);
      //Hide countdown
      countdownOverlay.style.display = 'none';
      //hide overlay
      canvasOverlay.style.display = "none";
    }
  }, 1000);
}

function startGame(){
  //show Sountdown
  showCountDown()

  //Show canvas with delay for countdown
  setTimeout(() => {
    //hide countdown
    countdownOverlay.style.display = 'none';
    canvas.style.display = 'flex';

    createRoad();
    gameStarted = true;
    playSound.play();
  }, 4000);

}

draw()
function draw(){
  ctx.globalCompositeOperation = 'destination-over';

  //Clear canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  //Draw Car
  car.show();
  car.move();

  //Draw Road
  if(gameStarted){
    updateRoad();
  }
  else {
    showStart();
  }

  showRoad();

  //Scoring
  if (gameStarted) {
    // Update Display
    scoreBoard.innerText = score;
    score++;
  }
  window.requestAnimationFrame(draw);
}

function showStart() {
  ctx.beginPath();
  ctx.font = '300 62px "Font Awesome 5 Pro"';
  ctx.fillStyle = "#858585";
  ctx.textAlign = 'center';
  ctx.fillText("\uf04c", 450, 350);
}

function gameOver() {
  console.log("GAME OVER!")
  gameStarted = false;

  //update sound
  playSound.pause();
  gameoverSound.play();
  playSound.currentTime = 0;

  //show gameover panel
  const gameoverOverlay = document.getElementById("canvas-overlay-gameover");
  const resetButton = document.getElementById("reset-btn");
  canvasOverlay.style.display = "flex"
  gameoverOverlay.style.display = "block"

  //reset game button
  resetButton.addEventListener('click', function(event) {
    gameoverOverlay.style.display = "none"
    resetGame()
  })

}

function resetGame() {
    score = 0;
    road = [];
    speed = getSpeed(selectedLevel);
    scoreBoard.innerText = score;
    totalBlocks = 0;
    car = new Car();
    createRoad();
    startGame();
    gameoverSound.pause();
}