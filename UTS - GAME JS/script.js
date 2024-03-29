//getElement
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

function drawMap(level){
  let map = []
  switch(level){
    case "Easy":
      map = ['1', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2'],
            ['|', '', '.', '.', '.', '.', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '7', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', 'p', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '+', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '5', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '.', '.', '.', '.', 'p', '|'],
            ['4', '-', '-', '-', '-', '-', '-', '-', '-', '-', '3']
    case "Medium":
      map = ['1', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2'],
            ['|', '', '.', '.', '.', '.', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '7', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', 'p', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '+', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '5', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '.', '.', '.', '.', 'p', '|'],
            ['4', '-', '-', '-', '-', '-', '-', '-', '-', '-', '3']
    case "Hard":
      map = ['1', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2'],
            ['|', '', '.', '.', '.', '.', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '7', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', 'p', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '+', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '_', '.', '.', '.', '.', '|'],
            ['|', '.', '[', ']', '.', '.', '.', '[', ']', '.', '|'],
            ['|', '.', '.', '.', '.', '^', '.', '.', '.', '.', '|'],
            ['|', '.', 'b', '.', '[', '5', ']', '.', 'b', '.', '|'],
            ['|', '.', '.', '.', '.', '.', '.', '.', '.', 'p', '|'],
            ['4', '-', '-', '-', '-', '-', '-', '-', '-', '-', '3']
  }
  
  return map
}

function drawBoundary(){
  const map = drawMap()
  const boundaries = []

  // Push in boundary
  map.forEach((row, rowIndex) => {
      row.forEach((symbol, colIndex) => {
          switch(symbol){
              case '-':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeHorizontal.png')
                  }))
                  break;
              case '|':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeVertical.png')
                  }))
                  break;
              case '1':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeCorner1.png')
                  }))
                  break;
              case '2':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeCorner2.png')
                  }))
                  break;
              case '3':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeCorner3.png')
                  }))
                  break;
              case '4':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeCorner4.png')
                  }))
                  break;
              case '5':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeConnectorTop.png')
                  }))
                  break;
              case '7':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeConnectorBottom.png')
                  }))
                  break;
              case 'b':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/block.png')
                  }))
                  break;
              case '[':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/capLeft.png')
                  }))
                  break;
              case ']':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/capRight.png')
                  }))
                  break;
              case '^':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/capTop.png')
                  }))
                  break;
              case '+':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/pipeCross.png')
                  }))
                  break;
              case '_':
                  boundaries.push(new Boundary({
                      position: {
                          x: Boundary.width * colIndex,
                          y: Boundary.height * rowIndex
                      },
                      image: createImage('./assets/images/capBottom.png')
                  }))
                  break;
              default:
                  break;
          }
      })
  })

  return boundaries
}

function loadGame(level){
  drawMap(level)

}


//Points
const FINAL_LEVEL = 10;
const PILL_POINTS = 10;
const POWERPILL_POINTS = 50;
const GHOST_POINTS = 100;
