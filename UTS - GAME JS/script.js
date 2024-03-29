//getElement
const form = document.getElementById("game-form");
const nameInput = document.getElementById("name");
const levelSelect = document.getElementById("level");
const canvasContainer = document.getElementById("canvas-container");
const canvasOverlay = document.getElementById("canvas-overlay-container");
const startOverlay = document.getElementById("canvas-overlay-container-start");
const countdownOverlay = document.getElementById("canvas-overlay-countdown");
const gameOverOverlay = document.getElementById("canvas-overlay-gameover");
const topPanel = document.getElementById("top-panel-container");
const playerName = document.getElementById("player-name");
const scoreBoard = document.getElementById("score");
const selectedLevel = document.getElementById("selected-level");

var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
let road = [];
let roadCurve = 0;
let straightBlocks = 0;
let turnBlocks = 0;
let turnLeft = false;
let turnRight = false;
let count = 0;
let icons = ["\uf1bb", "\uf82b", "\uf400", "\uf724"];
let gameStarted = false;
let maxDistance = 0;
let totalBlocks = 0;
let base_speed = getSpeed(selectedLevel);
let speed = base_speed;

form.addEventListener("submit", startGame);

function startGame(event) {
  event.preventDefault()
  canvasContainer.style.display = 'block';
  startOverlay.style.display = 'none';
  topPanel.style.display = 'grid';
  showCountdown();

  const nameInputValue = nameInput.value;
  const levelSelectValue = levelSelect.value;
  playerName.innerText = nameInputValue;
  selectedLevel.innerText = levelSelectValue;

  console.log(`Starting game for player: ${nameInputValue}`);
  console.log(`Selected level: ${levelSelectValue}`);

  createRoad();

  gameStarted = true;
  draw();
}

function getSpeed(level) {
  var speed = 10;
  switch(level){
    case 'Easy':
      speed = 10;
      break;
    case 'Medium':
      speed = 15;
      break;
    case 'Hard':
      speed = 20;
      break;
    case 'Brutal':
      speed = 30;
      break;
  }
  return speed;
}

function showCountdown() {
  countdownOverlay.style.display = "flex";
  countdownOverlay.textContent = '3';
  setTimeout(() => {
    countdownOverlay.textContent = '2';
  }, 1000);
  setTimeout(() => {
    countdownOverlay.textContent = '1';
  }, 2000);
  setTimeout(() => {
    countdownOverlay.textContent = 'Ready';
  }, 3000);
  setTimeout(() => {
    countdownOverlay.textContent = 'Go!';
    setTimeout(() => {
      countdownOverlay.style.display = 'none';
      canvasOverlay.style.display = 'none'
    }, 1000);
  }, 4000);
}

// Car object defined.
class Car {
  constructor() {
      this.x = 350;
      this.y = 500;
  }

  // shows car on canvas.
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
    if (gameStarted) {
        // Check if car is within road boundaries
        if (this.x < 0 || this.x + 200 > canvas.width) {
            gameOver(); // Handle car going off-screen (optional)
            return; // Exit the function if car is off-screen
        }

        // Check for valid road index before accessing properties
        if (road.length > 0 && road[0]) { // Check if road has elements
            if (this.x < road[0].o - 50 || this.x + 200 > road[0].o + 450) {
                gameOver();
            }
            if (road[0].e != false) {
                let dif = Math.abs((this.x + 100) - road[0].e);
                if (dif < 80) {
                    gameOver();
                }
            }
        } else {
            console.error("Road array is empty or undefined. Check road creation!");
        }
    }
  }
}

window.addEventListener("keydown", function (e) {
  if (e.keyCode == 38) {
    if (gameStarted == true && speed < (base_speed + 10)) {
      speed += 5;
    }
    gameStarted = true;
  }
  if (e.keyCode == 40) {
    if (gameStarted == true && speed > base_speed) {
      speed -= 5;
    }
  }
  if (gameStarted) {
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

// Create road function.
function createRoad() {
  let total = canvas.height / 10;
  for (let i = 1; i < total + 1; i++) {
      createRoadBlock(250, i);
  }
}

// Create road block.
function createRoadBlock(offset, i) {
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

// Show road function shows road.
function showRoad() {
  for (let i = 0; i < road.length; i++) {
      if (i > 0) {
          ctx.beginPath();
          ctx.moveTo(road[i].o, i * speed);
          ctx.lineWidth = 10;
          ctx.lineTo(road[i - 1].o, (i * speed) + speed);
          ctx.strokeStyle = "#666666";
          ctx.stroke();
          ctx.beginPath();
          ctx.moveTo(road[i].o + 400, i * speed);
          ctx.lineWidth = 10;
          ctx.lineTo(road[i - 1].o + 400, (i * speed) + speed);
          ctx.strokeStyle = "#666666";
          ctx.stroke();
      }
      if (road[i].b != false) {
          ctx.beginPath();
          ctx.font = '"Press Start 2P"';
          ctx.fillStyle = "#666666";
          ctx.textAlign = 'center';
          ctx.fillText("\uf400", road[i].b, i * speed);
      }
      if (road[i].e != false) {
          ctx.beginPath();
          ctx.font = '"Press Start 2P"';
          ctx.fillStyle = "#666666";
          ctx.textAlign = 'center';
          ctx.fillText("\uf2fc", road[i].e, i * speed);
      }
  }
}
// Update road function update road.
function updateRoad() {
  let r = Math.random();
  switch (roadCurve) {
      case 0:
          if (straightBlocks < 5) {
              createRoadBlock(road[0].o, straightBlocks);
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
              createRoadBlock(offset, turnBlocks);
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
              createRoadBlock(offset, turnBlocks);
              road.pop();
              turnBlocks++;
          } else {
              turnBlocks = 0;
              roadCurve = 0;
          }
          break;
  }
}

function draw() {
  ctx.globalCompositeOperation = 'destination-over';
  ctx.clearRect(0, 0, canvas.width, canvas.height); // clear canvas
  car.show();
  car.move();
  if (gameStarted) {
      updateRoad();
  } else {
      startOver();
  }
  showRoad();
  if (gameStarted) {
      scoreBoard.innerText = count;
      count++;
  }
  window.requestAnimationFrame(draw);
}

function gameOver() {
  const gameOverText = document.getElementById("game-over-text");
  gameOverText.textContent = "GAME OVER!"
  gameOverOverlay.style.display = "flex"
  gameOverOverlay.style.position = "absolute"
}
function restartGame() {
  startOver();
  startGame();
}

const resetButton = document.getElementById("game-over-text");
resetButton.addEventListener("click", restartGame);

function startOver() {
  canvasContainer.style.display = "none"
  //reset game
  count = 0;
  road = [];
  speed = base_speed;
  scoreBoard.innerText = count;
  gameStarted = false;
  totalBlocks = 0;
  createRoad();
  car = new Car();
}

let carImage = new Image();
let car = new Car();
carImage.src = "./assets/images/car_ood.svg";


