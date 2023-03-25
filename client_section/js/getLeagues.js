
   // Fetch the data from the PHP endpoint
   fetch('http://localhost/MarcGames/api/classes/league.view.php')
   .then(response => response.json())
   .then(data => {
       // Get a reference to the table body
       const tableBody = document.querySelector('#leagueTable tbody');

       // Loop through the data and create a table row for each item
       data.forEach(item => {
           const row = tableBody.insertRow();

           // Create a cell for the name property of the item
           const idCell = row.insertCell();
           idCell.textContent = item.id;

           const nameCell = row.insertCell();
           nameCell.textContent = item.name;
       });
   })
   .catch(error => console.error(error));
  