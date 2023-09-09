<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
    .con{height: px;
      width: px;
     margin-left:50px ;
    }
  </style>
</head>
<body>
<div class="con">

<form action="" method="post" enctype="multipart/form-data">
<h2 style="color: blue; text-align: center;">
Hotel Room Booking System</h2>
    <div id="booking-form">
        <label><span style="color: red">*</span>Booking Type:</label>
        <select id="booking_type" class="form-control">
            <option value="full-day">Full Day</option>
            <option value="half-day">Half Day</option>
            <option value="custom">Custom</option>
        </select>
        <div class="form-group">
        <label>Check-in Date:</label>
        <input type="date" id="checkindate"class="form-control">
        </div>
        <div class="form-group">
        <label>Check-out Date:</label>
        <input type="date" id="checkoutdate"class="form-control">
        </div>
        <div class="form-group">
        <label id="slot-label" style="display: none;">Slot:</label>
        <select id="slot" class="form-control" style="display: none;">
            <option value="morning">Morning (8AM to 12PM)</option>
            <option value="afternoon">Aternoon (12PM to 4PM)</option>
            <option value="evening">Evening (4PM to 8PM)</option>
            <option value="night">Night (8PM to 12AM)</option>


        </select>
   </div>
       <br>
        <button id="submit-button" class="btn btn-primary">Book Room</button>
      
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>