document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var department = document.getElementById('department').value;
    var year = document.getElementById('year').value;
    var topic = document.getElementById('topic').value;

    if (!name || !department || !year || !topic) {
        alert('All fields are required!');
        event.preventDefault();
    }
});
