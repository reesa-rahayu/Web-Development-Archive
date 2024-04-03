//getElement
const form = document.getElementById("game-form");
const canvasContainer = document.getElementById("canvas-container");
const canvasOverlay = document.getElementById("canvas-overlay-container");
const startOverlay = document.getElementById("canvas-overlay-container-start");
const countdownOverlay = document.getElementById("canvas-overlay-countdown");
const topPanel = document.getElementById("top-panel-container");
const scoreBoard = document.getElementById("score");
const highScoreText = document.getElementById("high-score-text");
const highScoreBoard = document.getElementById("high-score");
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
var highScore = 0;
var submitAudio = new Audio('sounds/game-start.mp3');
var startSound = new Audio('sounds/arcade.mp3');
var countSound = new Audio('sounds/count.mp3');
var playSound = new Audio('sounds/Manual.mp3');
var moveSound = new Audio('sounds/Kanan-kiri.mp3');
var crashSound = new Audio('sounds/Nabrak.mp3');
var gameoverSound = new Audio('sounds/Gwenchanayo2.mp3');

//Document Opened
topPanel.style.display = 'none';
countdownOverlay.style.display = 'none';
//canvas dimension
canvas.width = 1000;
canvas.height = canvasContainer.clientHeight;

//car Object
class Car {
  constructor() {
      this.x = 425; //carLeft
      this.y = canvas.height - 150;
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
          window.moveSound.play();
      }
      if (turnRight == true) {
          this.x += 5;
          window.moveSound.play();
      }

      //COLLITION CHECKER
      if (gameStarted) {
        const carLeft = this.x;
        const carRight = this.x + 150;

        //Collides with the road
        const roadLeftBound = road[53].o - 75;
        const roadRightBound = road[53].o + 675;
        if (carLeft < roadLeftBound || carRight > roadRightBound) {
          console.log('Road Collotion')  
          gameOver();
        }

        //Collides with an obstacle
        if (road[53].e != false) {
          const obstacleLeft = road[53].e
          const obstacleRight = road[53].e + 60
          const carCenter = this.x + 75
          let distanceLeft = Math.abs(carCenter - obstacleRight)
          let distanceRight = Math.abs(carCenter - obstacleLeft)
          console.log(`obstacleLeft: ${obstacleLeft} obstaccleRight ${obstacleRight} carCenter: ${carCenter} distanceLeft: ${distanceLeft} distanceRight: ${distanceRight}`)
          if (distanceLeft < 30 || distanceRight < 30) {
             gameOver();
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
  //create obstacle
  for (let i = 1; i < total + 1; i++) {
      createObstacle(200, i);
  }
}
// Create obstacle and White Strip Map
function createObstacle(offset, i) {
  //obstacle
  totalBlocks++;
  let element = false;
  let rn = Math.random();
  if (gameStarted && totalBlocks % 30 == 0 && Math.random() > 0.7) {
      let x = (rn * 300) + offset;
      element = x;
  }
  //whitestrip
  let whiteStripeCount = i % 20;
  let whiteStrip = whiteStripeCount < 10;
  road.unshift({ o: offset, w: 600, e: element, s: whiteStrip});
}

// Drawing the Road and Obstacle
function showRoad() {
  for (let i = 0; i < road.length; i++) {
    if (i > 0) {
      //draw whitestrip
      if (road[i].s){
        ctx.beginPath();
        ctx.moveTo(road[i].o + 300, i * speed);
        ctx.lineWidth = 5;
        ctx.lineTo(road[i - 1].o + 300, (i * speed) + speed);
        ctx.strokeStyle = "#fdfffe";
        ctx.stroke();
      }

      //draw road border left
      ctx.beginPath();
      ctx.moveTo(road[i].o, i * speed);
      ctx.lineWidth = 10;
      ctx.lineTo(road[i - 1].o, (i * speed) + speed);
      ctx.strokeStyle = "#fdfffe";
      ctx.stroke();
      //draw road border right
      ctx.beginPath();
      ctx.moveTo(road[i].o + road[i].w, i * speed);
      ctx.lineWidth = 10;
      ctx.lineTo(road[i - 1].o + road[i].w, (i * speed) + speed);
      ctx.strokeStyle = "#fdfffe";
      ctx.stroke();

      //draw road fill
      ctx.beginPath();
      ctx.moveTo(road[i].o, i * speed);
      ctx.lineTo(road[i - 1].o, (i * speed) + speed);
      ctx.lineTo(road[i - 1].o + road[i].w, (i * speed) + speed);
      ctx.lineTo(road[i].o + road[i].w, i * speed);
      ctx.closePath();
      ctx.fillStyle = "#000"; // Change this color for the road
      ctx.fill();
    }
    //draw enemy
    if (road[i].e != false) {
      var obstacle = new Image(); 
      obstacle.src = 'assets/images/cone.png';
      ctx.drawImage(obstacle, road[i].e, i * speed, 60, 100);
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
            if (r > 0.5 && road[0].o < canvas.width - 700) { //changed
                roadCurve = 1;
            } else if (road[0].o >= 100) {
                roadCurve = -1;
            }
        }
        break;
    case 1:
        if (turnBlocks < 80 && road[0].o < (canvas.width - 700)) { //changed
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

  // Play submit audio
  let submitAudioVolume = 1.0; 
  // Set the volume and play
  const submitAudio = new Audio('sounds/game_start.mp3');
  submitAudio.volume = submitAudioVolume;
  submitAudio.play();

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
    canvasContainer.style.display = 'flex';

    //run game
    gameStarted = true;

    //sound play
    playSound.loop = true
    playSound.play();
  }, 4000);

}

createRoad();
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

  showRoad();
  
  //Scoring
  if (gameStarted) {
    // Update Display
    scoreBoard.innerText = score;
    score++;
    //highscore update
    if (score >= highScore){
      highScore = score
      highScoreBoard.innerText = highScore;
    }
  }
  window.requestAnimationFrame(draw);
}

function gameOver() {
  crashSound.play();
  console.log(`GAME OVER! Score: ${score}`)
  gameStarted = false;
  window.cancelAnimationFrame(draw);
  gameOverPanel()
}

function gameOverPanel() {  
  //update sound
  playSound.pause();
  gameoverSound.play();
  playSound.currentTime = 0;

  //show gameover panel
  const gameoverOverlay = document.getElementById("canvas-overlay-gameover");
  canvasOverlay.style.display = "flex"
  gameoverOverlay.style.display = "block"

  //show score
  scoreBoard.innerText = score;

  //isHighScore?
  if (score >= highScore){
    document.getElementById("win-highscore").style.display = "block"
  } else{
    document.getElementById("win-highscore").style.display = "none"
  }

  //reset game button
  const resetButton = document.getElementById("reset-btn");
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