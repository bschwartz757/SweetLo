
<?php include('includes/header.php'); ?>

<body id="order">

<?php include('includes/navigation.php'); ?>

<section class="grid2">
	<div class="col">
        <h3>Stock h3 Text</h3>
        <p>Raspberry vanilla, raspberry ice chocolate chip, cake ice ice maple vanilla orange, sorbet. Cone mint cup chunky popsicle snow cones almond. White chocolate shortcake froyo popsicle peppermint chocolate chip chocolate chip sorbet cake blueberry dessert cookies and cream, caramel.</p>

<p>Butterscotch white chocolate coffee caramel froyo shortcake sorbet. Shortcake maple orange sundae cake sherbet froyo chocolate chip cherry cup toppings sorbet. Ice shortcake sorbet, banana sundae popsicle, sorbet shortcake sundae.</p>          
    </div>
	<div class="col">
		<img src="images/order2_460.jpg" alt="order ice cream pic 460" />    
    </div>    
</section>

<section class="grid2">

          <h2>Ready to Order?</h2>
 
<div class="col">
<fieldset>
<legend>Choose your ice cream</legend>
<p>
<label><input type="radio" /> Sweet Cream</label>
<label><input type="radio" /> Chocolate</label>
<label><input type="radio" /> Berry</label>
</p>
</fieldset>

<fieldset>
<p>
<legend>Choose your add-ins</legend>
<label><input type="checkbox" /> Peanut butter cups</label>
<label><input type="checkbox" /> Fudge</label>
<label><input type="checkbox" /> Milk duds</label>
<label><input type="checkbox" /> Red velvet cake</label>
<label><input type="checkbox" /> Seasonal fruit</label>
</p>
</fieldset>


</div>          
 
<div class="col">
<fieldset>
<legend>Please Enter Your Contact Information</legend>        
<p><label for="first-name">First Name </label>
<input type="text" name="first-name" id="first-name" maxlength="40" /></p>

<p><label for="last-name">Last Name </label>
<input type="text" name="last-name" id="last-name" maxlength="40" /></p>

<p><label for="email">Please enter your email address </label>
<input type="email" name="email" maxlength="40" /></p>

<p><label for="comments">Additional info:</label>
<textarea name="comments" id="comments" rows="5" cols="30"></textarea></p>

<p class="button"><input type="submit" value="Submit">
</p>
</fieldset>
</div>

</section>


</div>	<!--Close middle-->

<?php include('includes/footer.php'); ?>

</body>
</html>
