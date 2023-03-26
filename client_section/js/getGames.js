
// Fetch the data from the PHP endpoint
fetch('http://localhost/MarcGames/api/classes/game.view.php')
    .then(response => response.json())
    .then(data => {

        const tableBody = document.querySelector('#gamesTable tbody');

        data.forEach(item => {
            const row = tableBody.insertRow();

            // cells for the name property of the item
            const idCell = row.insertCell();
            idCell.textContent = item.id;

            const teamOne = row.insertCell();
            teamOne.textContent = item.team1_id;

            const teamTwo = row.insertCell();
            teamTwo.textContent = item.team2_id;

            const leagueId = row.insertCell();
            leagueId.textContent = item.league_id;
        });
    })
    .catch(error => console.error(error));
