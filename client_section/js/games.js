//create team
document.querySelector('#create-team').addEventListener('submit', function (e) {
    e.preventDefault();

    // name and age values from the form
    const teamName = document.querySelector('#teamName').value;

    console.log(teamName);
    // new FormData object to send data endpoint
    const formData = new FormData();
    formData.append('teamName', teamName);

    // AJAX request to the PHP endpoint
    fetch('http://localhost/MarcGames/api/classes/create_team.contr.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {

            document.querySelector('#result').innerHTML = data;
            window.location.href = 'create_league.html';
            console.log(data)
        })
        .catch(error => console.error(error));
});

