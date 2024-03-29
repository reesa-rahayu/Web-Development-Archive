const form = document.querySelector('form');
    form.addEventListener('submit', startGame);

    function startGame(event) {
      event.preventDefault();
      const nameInput = document.querySelector('#name');
      const levelSelect = document.querySelector('#level');
      const playerName = nameInput.value;
      const selectedLevel = levelSelect.value;
      
      console.log(`Starting game for player: ${playerName}`);
      console.log(`Selected level: ${selectedLevel}`);
      
      // Add your game logic here
    }