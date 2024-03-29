//getElement
const form = document.getElementById('game-form');
const nameInput = document.getElementById('name');
const levelSelect = document.getElementById('level');
const canvasContainer = document.getElementById('canvas-container');
const startOverlay = document.getElementById('canvas-overlay-container-start');
const countdownOverlay = document.getElementById('canvas-overlay-countdown');
const topPanel =  document.getElementById('top-panel-container')
const playerName = document.getElementById("player-name")
const score = document.getElementById("score")
const selectedLevel = document.getElementById("selected-level")

form.addEventListener('submit', startGame);

function startGame(event) {
  event.preventDefault();
  canvasContainer.style.display = 'block';
  startOverlay.style.display = 'none';
  topPanel.style.display = 'grid';
  showCountdown()

  const nameInputValue = nameInput.value;
  const levelSelectValue = levelSelect.value;
  playerName.innerText = nameInputValue
  selectedLevel.innerText = levelSelectValue

  console.log(`Starting game for player: ${nameInputValue}`);
  console.log(`Selected level: ${levelSelectValue}`);
  loadGame(selectedLevel)
}

const canvas = document.getElementById('game')
const ctx = canvas.getContext('2d')

function createImage(src){
  const image = new Image()
  image.src = src
  return image
}

function showCountdown() {
  countdownOverlay.style.display = 'block';
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
    }, 1000);
  }, 4000);
}

function loadGame(level){

}

