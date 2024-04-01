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
const selectedLevel = document.getElementById('level').value;

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
let isLooping = false;

//Document Opened
topPanel.style.display = 'none';
countdownOverlay.style.display = 'none';
canvas.style.display = 'none';

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
            gameOver();
          }
          if (road[53].e != false) {
              let dif = Math.abs((this.x + 100) - road[53].e);
              if (dif < 80) {
                gameOver();
              }
          }
      }
  }
}

//car init
let carImage = new Image();
carImage.src = "assets/images/car.png"
let car = new Car();

//create road and obstacle
createRoad()

//submit listener
form.addEventListener('submit', function(event) {
  event.preventDefault() //prevent load default

   //Update player name and level display
  var playerName = playerNameInput.value;
  document.getElementById('player-name').innerText = playerName;
  document.getElementById('selected-level').innerText = selectedLevel;
  console.log(`playing for ${playerName} on level ${selectedLevel}`)

  //update speed
  speed = getSpeed(selectedLevel);

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
      speed = 15;
      break;
    case "hard":
      speed = 20;
      break;
    case "brutal":
      speed = 25;
      break;
    default:
      speed = 10; 
  }
}

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
  let tree = false;
  let element = false;
  let rn = Math.random();
  if (totalBlocks % 15 == 0) {
      if (rn > 0.5) {
          tree = (rn * (500 - offset)) + offset + 400;
      } else {
          tree = (rn * (offset) - 30);
      }
  }
  if (gameStarted && totalBlocks % 30 == 0 && Math.random() > 0.7) {
      let x = (rn * 350) + offset + 50;
      element = x;
  }
  road.unshift({ o: offset, w: 400, b: tree, e: element });
}


// Drawing the Road and Obstacle
function showRoad() {
  for (let i = 0; i < road.length; i++) {
    if (i > 0) {
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
    if (road[i].b != false) {
        ctx.beginPath();
        ctx.font = '300 52px "Press Start 2P"';
        ctx.fillStyle = "#fdfffe";
        ctx.textAlign = 'center';
        ctx.fillText("\uf400", road[i].b, i * speed);
    }
    if (road[i].e != false) {
        ctx.beginPath();
        ctx.font = '300 52px "Press Start 2P"';
        ctx.fillStyle = "#fdfffe";
        ctx.textAlign = 'center';
        ctx.fillText("\uf2fc", road[i].e, i * speed);
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


function showCountDown(){
  //Display countdown overlay
  canvasOverlay.style.display = "flex"
  countdownOverlay.style.display = "flex"

  let timeLeft = 3;
  const countdownInterval = setInterval(() => {
    if (timeLeft > 0) {
      countdownOverlay.textContent = `Starting game in ${timeLeft}...`;
    }
    timeLeft--;
    if (timeLeft < 0) {
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
    canvas.style.display = 'flex';
    //run game
    gameStarted = true;
    gamePlay();
  }, 3000);
}

function gamePlay(){
  ctx.globalCompositeOperation = 'destination-over';

  //Clear canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  //Draw Car
  car.show();
  car.move();

  //Draw Road
  if(isLooping){
    updateRoad();
  }
  else{
    isLooping = true;
  }

  showRoad();

  //Scoring
  if (gameStarted) {
    // Update Display
    scoreBoard.innerText = score;
    score++;
  }
  window.requestAnimationFrame(gamePlay);
}

function gameOver() {
  console.log("GAME OVER!")
  gameStarted = false;

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
    gameStarted = false;
    totalBlocks = 0;
    car = new Car();
    createRoad();
    showCountDown();
    startGame();
}