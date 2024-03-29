const form = document.getElementById('game-form');
const nameInput = document.getElementById('name');
const levelSelect = document.getElementById('level');
const canvasContainer = document.getElementById('canvas-container');
const overlayContainer = document.getElementById('canvas-overlay-container');
const topPanel =  document.getElementById('top-panel-container')
const playerName = document.getElementById("player-name")
const score = document.getElementById("score")
const selectedLevel = document.getElementById("selected-level")

form.addEventListener('submit', startGame);

function startGame(event) {
  event.preventDefault();

  canvasContainer.style.display = 'block';
  overlayContainer.style.display = 'none';
  topPanel.style.display = 'grid';

  const nameInputValue = nameInput.value;
  const levelSelectValue = levelSelect.value;
  playerName.innerText = nameInputValue
  selectedLevel.innerText = levelSelectValue

  

  // Use the name and level in your game logic
  console.log(`Starting game for player: ${nameInputValue}`);
  console.log(`Selected level: ${levelSelectValue}`);
}