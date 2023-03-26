//process league

document.querySelector('#create-league').addEventListener('submit', function (e) {
    e.preventDefault();

    const league = document.querySelector('#league').value;

    console.log(league);
    const formData = new FormData();
    formData.append('league', league);

    fetch('http://localhost/MarcGames/api/classes/create_league.contr.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.querySelector('#result').innerHTML = data;
            window.location.href = 'create_game.html';
            console.log(data)
        })
        .catch(error => console.error(error));
});