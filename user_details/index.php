
<!DOCTYPE html>
<html lang="en">
    <style>
      body{
        background-image: url("vidyasagar university.png"); 
        width: 100%;

      }     
           .center{
         margin: auto;
         width: 40%;
         padding: 10px;
}
      
        h2{
          text-align: center; 
          color: #e52c0f;
 
        }
        input[type=text], select {
      
          width: 100%;
          padding: 12px 20px ;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=email], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=tel], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=number],select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        textarea{
          width: 100%;
          padding: 8px 15px;
          margin: 5px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
       /*input[type=submit] {
          width: 50%;
          text-align="center";
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        */.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
        .button5 {border-radius: 50%;}

        #para1{
            color:red;
        }
        div {
          
          height: 920px;
          width: 100px;
          border: 5px solid #a2d0d8;
          border-radius: 6px;
          background-color:rgb(51, 107, 186);
          padding: 20px;
          margin: 0;
        }
        </style>
       <body>
      <div class="center">
      <h2>User Details</h2>
      <form action="" method="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="First and last name" required size="100">
      
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@domain.com" required size="100">

        <label for="phone">Phone:</label>
        <input type="tel"  name="phone" placeholder="Eg. +454543000000" required size="100">

        <label for="address">Address</label>
        <textarea name="address" id="address" row="4" cols="50"></textarea>
        
        <label for="postcode">Post code</label>
        <input type="number" name="postcode" required size="10"><br><br>

        <label for="country">Country</label>
        <select id="name" name="country" required>
            <option>India</option>
            <option>USA</option>
            <option>Canada</option>
            <option>Bangladesh</option>
        </select>

        <label for="card_typr">Card Type</label>
        <input type="radio" name="card_type" value="visa"><b id="para1">VISA</b>
        <input type="radio" name="card_type" value="AmEx"><b id="para1">AmEx</b>
        <input type="radio" name="card_type" value="Mastercard"><b id="para1">Mastercard</b><br><br>

        <label for="Card_number">Card number</lable>
        <input type="number" name="card_number" >

        <label for="Card_number">Card number</lable>
        <input type="number" name="card_number">

        <label for="Security_code">Security code</lable>
        <input type="number" name="Security_code">

        <label for="name_on_card">Name on card</lable>
        <input type="number" name="name_on_card">

        <button type="submit" class="button button5" value="submit">BUY IT!</button>

    </form>
    </div>
</body>
</html>