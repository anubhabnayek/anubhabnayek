$(document).ready(function() {
    $('#booking_type').change(function() {
        var booking_type = $(this).val();

        if (booking_type === 'half-day') {
            $('#slot-label').show();
            $('#slot').show();
        } else {
            $('#slot-label').hide();
            $('#slot').hide();
        }
    });

    $('#submit-button').click(function() {
        var booking_type = $('#booking_type').val();
        var checkinDate = $('#checkindate').val();
        var checkoutDate = $('#checkoutdate').val();

        var slot = $('#slot').val();

        // Perform client-side validation
        if (!checkinDate) {
            alert('Please select a check-in date.');
            return;
        }
        if (!checkoutDate) {
            alert('Please select a check-out date.');
            return;
        }
        if (booking_type === 'half-day' && !slot) {
            alert('Please select a slot.');
            return;
        }

        // Create booking object
        var booking = {
            booking_type: booking_type,
            checkinDate: checkinDate,
            checkoutDate: checkoutDate,

            slot: slot
        };

        // Send booking data to the server
        $.ajax({
            url: 'process_booking.php',
            type: 'POST',
            data: booking,
            success: function(response) {
                // console.log(data)
                if (response === 'success') {
                    alert('Room booked successfully!');
                } else {
                    alert('Failed to book the room. Please try again.');
                }
            },
            error: function() {
                alert('An error occurred. Please try again later.');
            }
        });
    });
});