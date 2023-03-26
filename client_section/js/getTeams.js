
// Fetch the data from the PHP endpoint
fetch('http://localhost/MarcGames/api/classes/team.view.php')
    .then(response => response.json())
    .then(data => {

        console.log(data);
        const tableBody = document.querySelector('#teamTable tbody');

        data.forEach(item => {
            const row = tableBody.insertRow();

            const idCell = row.insertCell();
            idCell.textContent = item.id;

            const nameCell = row.insertCell();
            nameCell.textContent = item.name;
        });
    })
    .catch(error => console.error(error));
