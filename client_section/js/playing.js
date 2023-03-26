// create game
let teamOneId,teamTwoId,leagueId,gameId
let teamOneScore=0
let teamTwoScore=0
let count=0;
let randomNumber=Math.floor(Math.random() * 6 )

document.querySelector('#play-game').addEventListener('submit', function (e) {
    e.preventDefault(); 

    gameId = document.querySelector('#gameId').value;
    teamOneId = document.querySelector('#team1Id').value;
    teamTwoId = document.querySelector('#team2Id').value;
    leagueId = document.querySelector('#leagueId').value;

    document.querySelector('.container').style.display='none'
    document.querySelector('.game-play').style.display='block'

    const playBtn = document.getElementById('play-btn');
    const playerObj = document.getElementById('player');
    const soccerObj = document.getElementById('soccer-object');

    function jumpAndHit() {
        playerObj.style.transition = 'transform 0.5s ease-in-out';
        playerObj.style.transform = 'translateY(-100px)'; // Move player up
        setTimeout(function() {
            playerObj.style.transition = 'transform 0.5s ease-in-out';
            playerObj.style.transform = 'translateY(0)'; // Move player back down
        }, 500); // Wait 0.5s before moving player back down
    }
    

    playBtn.addEventListener('click', function() {
        // Move the player object towards the soccer object
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
    });





    document.querySelector('.close-game').addEventListener('click',function(){
        document.querySelector('.game-play').style.display='none'
        document.querySelector('.container').style.display='block'
        console.log(gameId,teamOneId,teamTwoId,leagueId)

    })

    console.log(gameId,teamOneId,teamTwoId,leagueId)

    
    // Create a new FormData object to send the data to the PHP endpoint
    // const formData = new FormData();
    // formData.append('teamOneId', teamOneId);
    // formData.append('teamTwoId', teamTwoId);
    // formData.append('leagueId', leagueId);



    //  Send an AJAX request to the PHP endpoint
    // fetch('http://localhost/MarcGames/api/classes/create_game.contr.php', {
    //     method: 'POST',
    //     body: formData
    // })
    //     .then(response => response.text())
    //     .then(data => {
    //         // Display the result on the page
    //         document.querySelector('#result').innerHTML = data;
    //         console.log(data)
    //     })
    //     .catch(error => console.error(error));

})