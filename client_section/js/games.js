document.querySelector('#create-team').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent the form from submitting normally

    // Get the name and age values from the form
    const teamName = document.querySelector('#teamName').value;

    console.log(teamName);
    // Create a new FormData object to send the data to the PHP endpoint
    const formData = new FormData();
    formData.append('teamName', teamName);



    //  Send an AJAX request to the PHP endpoint
    fetch('http://localhost/MarcGames/api/classes/create_team.contr.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            // Display the result on the page
            document.querySelector('#result').innerHTML = data;
            console.log(data)
        })
        .catch(error => console.error(error));
});