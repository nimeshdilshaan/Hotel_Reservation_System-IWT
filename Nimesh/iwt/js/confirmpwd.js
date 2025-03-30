
const form = document.querySelector('form');

form.addEventListener('submit', function (event)
{
    const pwd = document.getElementById('pwd').value;

    const cnfmpwd = document.getElementById('cnfmpwd').value;

        if (pwd !== cnfmpwd)
            {
                alert("Passwords do not match.");
                event.preventDefault();
            }
});