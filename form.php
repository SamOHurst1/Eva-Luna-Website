<!-- header -->
<?php include "include/head.php"; ?>

<body>
    <!-- navigation -->
 <?php include "include/nav.php"; ?>
    <!-- nav end  -->
    
<main>
  
    <form class="form" action="process_form.php" method="post">
        <div class="form__title">Book Your Dream Trip!</div>
        <p class="form__desc">We are focused on tailor-made sailing trips for groups of up to 8 people in size. 
            Let us know of anything you would like to include in your trip and we can make it happen! weather it be a swimming, snorkelling or fishing from the yacht to 
            sunset dining in a picturesque portugese harbour, we will do our best to accomodate all your needs.</p>


        <div class="form__item">
            <label for="givenname" class="form__label">First Name</label>
            <input type="text" class="form__input" name="givenname" id="givenname" placeholder="Enter your first name"> 
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="givenname2" class="form__label">Surname</label>
            <input type="text" class="form__input" name="givenname2" id="givenname2" placeholder="Enter your surname"> 
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="emailAddress" class="form__label">Email Address</label>
            <input type="text" class="form__input" name="emailAddress" id="emailAddress" placeholder="Enter your email address"> 
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">

            <label for="contactNumber" class="form__label">Contact Number</label>

            <select id="country" class="form__input form__input--xsmall" onchange="country_code()">
                <option value="select country">Select Country</option>
                <option value="br">BR</option>
                <option value="be">BE</option>
                <option value="es">ES</option>
                <option value="pt">PT</option>
                <option value="us">US</option>
                <option value="uk">UK</option> 
            </select>

            <input type="tel" class="form__input form__input--small" name="contactNumber" id="contactNumber" placeholder="Enter your contact number"> 
            <span class="form__error">A sample error message</span>
        </div>
        
        <div class="form__item">
            <label for="pax" class="form__label">Group Size</label>
            <input type="number" class="form__input form__input--small" name="pax" id="pax" min="1" max="8" placeholder="Group size (Max. 8)"> 
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="date" class="form__label">Trip Dates </label>
            <input type="date" class="form__input form__input--small" name="date" id="date" placeholder="Trip Dates"> 
            <span class="form__error">A sample error message</span>
        </div>

        <div class="form__item">
            <label for="location" class="form__label">Sailing Location</label>
            <select name="location" id="location" class="form__input">
                <option value="">--Please select a sailing location--</option>
                <option value="Lisbon">River Teijo (Lisbon)</option>
                <option value="Cascais">Cascais</option>
                <option value="Sesimbra">Sesimbra</option>
            </select>
            <span class="form__error">A sample error message</span>
        </div>

        <div class="form__item">
            <label for="message" class="form__label">Tell us about your sailing trip</label>
            <textarea maxlength="500" class="form__input" name="message" id="message" placeholder="Any specific requests or questions for your sailing trip (Max. 500 chrs"></textarea>
            <span class="form__error">A sample error message</span>
        </div>

        <div class="form__item">
            <button class="form__btn" type="submit">Submit</button>
        </div>



    </form>

</main>


<script src="main.js"></script>


</body>

</html>