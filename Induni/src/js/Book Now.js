document.getElementById('booking-form').onsubmit = function(event) {
            event.preventDefault(); // Prevent form submission for validation

            // Get form values
            const name = document.getElementById('field1').value;
            const email = document.getElementById('field2').value;
            const checkIn = new Date(document.getElementById('field3').value);
            const checkOut = new Date(document.getElementById('field4').value);

            // Basic validation
            if (name && email && checkIn && checkOut) {
                if (checkOut <= checkIn) {
                    alert("Check-out date must be after Check-in date.");
                    return;
                }
                // If valid, show success alert
                alert("Booking successful!");
                // You can submit the form here if needed
                // this.submit(); // Uncomment to submit the form
            } else {
                // Alert user to fill all fields
                alert("Please fill out all fields.");
            }
        };
    