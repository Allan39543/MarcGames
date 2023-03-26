// create game

document.querySelector('#create-game').addEventListener('submit', function (e) {
    e.preventDefault();

    const teamOneId = document.querySelector('#team1Id').value;
    const teamTwoId = document.querySelector('#team2Id').value;
    const leagueId = document.querySelector('#leagueId').value;

    console.log(teamOneId, teamTwoId, leagueId)

    // FormData object to send the data to the endpoint
    const formData = new FormData();
    formData.append('teamOneId', teamOneId);
    formData.append('teamTwoId', teamTwoId);
    formData.append('leagueId', leagueId);

    // AJAX request to the endpoint
    fetch('http://localhost/MarcGames/api/classes/create_game.contr.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.querySelector('#result').innerHTML = data;
            window.location.href = 'play_game.html';
            console.log(data)
        })
        .catch(error => console.error(error));

})