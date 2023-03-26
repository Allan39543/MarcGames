// create game
let gameId
let teamOneScore=0
let teamTwoScore=0
let count=0;
let randomNumber=Math.floor(Math.random() * 6 )

document.querySelector('#play-game').addEventListener('submit', function (e) {
    e.preventDefault(); 

    gameId = document.querySelector('#gameId').value;
    document.querySelector('.container').style.display='none'
    document.querySelector('.game-play').style.display='block'

    const playBtn = document.getElementById('play-btn');
    const playerObj = document.getElementById('player');
    const soccerObj = document.getElementById('soccer-object');

    function jumpAndHit() {
        playerObj.style.transition = 'transform 0.5s ease-in-out';
        playerObj.style.transform = 'translateY(-100px)'; 
        setTimeout(function() {
            playerObj.style.transition = 'transform 0.5s ease-in-out';
            playerObj.style.transform = 'translateY(0)'; 
        }, 500); 
    }
    

    playBtn.addEventListener('click', function() {
       
        jumpAndHit();

        if(count<5){
            teamOneScore+=randomNumber
            document.querySelector('.score').textContent=teamOneScore
            document.querySelector('.player-name').textContent="Team One"
            count+=1
            console.log(teamOneScore)
        }

        else if(count>=5 && count <10){
            teamTwoScore+=randomNumber
            document.querySelector('.score').textContent=teamTwoScore
            document.querySelector('.player-name').textContent="Team Two"
            count+=1  
            console.log(count) 
        }
        else     if(count==10){
            console.log("Count==10")
        const formData = new FormData();
        formData.append('gameId', gameId);
        formData.append('teamOneScore', teamOneScore);
        formData.append('teamTwoScore', teamTwoScore);
    
        // Send an AJAX request to the PHP endpoint
        fetch('http://localhost/MarcGames/api/classes/scores_game.contr.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                document.querySelector('#game-result').innerHTML = data;
                console.log(data)
            })
            .catch(error => console.error(error));


            fetch('http://localhost/MarcGames/api/classes/scores.view.php')
            .then(response => response.json())
            .then(data => {
         
             console.log(data);
            })
            .catch(error => console.error(error));

        }
   
    });

    document.querySelector('.close-game').addEventListener('click',function(){
        document.querySelector('.game-play').style.display='none'
        document.querySelector('.container').style.display='block'
        console.log(gameId,teamOneId,teamTwoId,leagueId)

    })

})