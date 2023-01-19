<form method="post" action="appointment.php">

        <label for="Patient_ID">NIC*</label>
        <input type="text" id="fname" name="Patient_ID" placeholder="Your ID.." >
        
        <label for="name">Name*</label>
        <input type="text" id="name" name="name" placeholder="Your  name..">

        <label for="Pnumber">Phone Number*</label>
        <input type="text" id="Pnumber" name="Pnumber" placeholder="07XXXXXXXX">

        <label for="Session">Session</label>
        <select id="Session" name="Session">
                <option value=""></option>
                <option value="Morning">Morning</option>
                <option value="Evening">Evening</option>								
        </select>

        <label for="Bokking_day">Bokking day:</label>
        <input type="date" id="Bokk" name="book_apoienment">

        <br><br><br>

        <button class="button" name="Bookname" default value ="<?=$row['d_id'];?>">Book Now</button>
</form>