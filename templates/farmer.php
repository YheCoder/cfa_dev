 <form action = "populate.php" method = "post">
	<div class="col-sm-6">

		 <b>Are you looking to...</b>
			<br />
			<input type="checkbox" name="to_rent" value="Rent"> Lease or Rent?
			<br />
			<input type="checkbox" name="to_sell" value="Sell"> Sell
			<br />
			<input type="checkbox" name="to_intern" value="Intern"> Farm Intern of Apprentice? 
			<br />
			<input type="checkbox" name="to_other" value="Other"> Other: <input type="text" name="terms_other"/>
		
		<br/>
		<br/>
	<b>Land Type and Amount</b>
		<br>
			Pasture: 
			<br />
			<input type="text" name="pasture">
			<br />
			Tillable: 
			<br />
			<input type="text" name="tillable">
			<br>
			<br>
			<input type="checkbox" name="organic" value="Organic"> Certified Organic?
		</p>
		<p>
		<b>Housing Needed</b>
		<br>
		<input type="checkbox" name="housing" value="housing"> Yes. Describe: <input type="text" name="describe_housing" />
		<br>
		<p>
		<b>Infastructure Needed</b>
			<br>
			<input type="checkbox" name="infastructure_storage" value="Equipment_Storage"> Equipment Storage
			<br>
			<input type="checkbox" name="infastructure_barn" value="Livestock_Barn"> Livestock Barn
			<br>
			<input type="checkbox" name="infastructure_stables" value="Stables"> Stables
			<br>
			<input type="checkbox" name="infastructure_greenhouse" value="Greenhouse"> Greenhouse/High Tunnel
			<br>
			<input type="checkbox" name="infastructure_goats" value="Goats"> Goats
			<br>
			<input type="checkbox" name="infastructure_sheep" value="Sheep"> Sheep
			<br>
			<input type="checkbox" name="infastructure_horses" value="Horses"> Horses
		</p>
		<b>Equipment Needed</b>
		<br />
		<input type="checkbox" name="equipment" value="Other"> 
		Yes. Describe: <input type="text" name="equipment_other" />
		<br>
		<br />
		<input type="checkbox" name="irrigation" value="Bike"> Irrigation Needed?

	</div>
	<div class="col-sm-6">
		
		<br />
		<b>Current or Past Farming Endeavors</b>
		<br />
		(Check all that apply)
		<br />
		<input type="checkbox" name="horticulture" value="Bike"> Vegetables/Horticulture
		<br />
		Livestock:
		<ul >
			<li> <input type="checkbox" name="livestock_cattle_beef" value="Beef"> Cattle-Beef </li>
			<li><input type="checkbox" name="livestock_cattle_dairy" value="Dairy"> Cattle-Dairy</li>
			<li><input type="checkbox" name="livestock_poultry" value="Poultry"> Poultry</li>
			<li><input type="checkbox" name="livestock_hogs" value="Hogs"> Hogs</li>
			<li><input type="checkbox" name="livestock_goats" value="Goats"> Goats</li>
			<li><input type="checkbox" name="livestock_sheep" value="Sheep"> Sheep</li>
			<li><input type="checkbox" name="livestock_horses" value="Horses"> Horses</li>
		</ul>
		<input type="checkbox" name="aquaculture" value="Aquaculture"> Aquaculture
		<br />
		<input type="checkbox" name="tobacco" value="Tobacco"> Tobacco
		<br />
		<input type="checkbox" name="rowcrops" value="Crops"> Row Crops
		<br >
		<br />
		Rent Lease Agreement
		<select name="lease_agreement">
		  <option value="short">Short Term (Less than 2 years)</option>
		  <option value="Long">Long Term (More than 5 years)</option>
		</select>
		<br>
		<p>
		Purchase Arangement
		<select name="purchase_agreement">
		  <option value="lease">Lease to own</option>
		  <option value="Sale">For Sale Only</option>
		  <option value="contract">Land Contrat</option>
		  <option value="other">Other</option>
		</select>
		<br>

		<p>
			<b>Education</b>
			<br>
			<input type="checkbox" name="highschool" value="Highschool"> Highschool Graduate
			<br>
			<input type="checkbox" name="some_college" value="Some_College"> Some College
			<br>
			<input type="checkbox" name="college_graduate" value="College"> College Graduate
			<br>
			<input type="checkbox" name="other_education" value="education"> Other
			<br>
			<br>
			<b>Where are you willing to farm?</b>
			<br>
			<input type="checkbox" name="northern" value="Northern"> Northern Kentucky
			<br>
			<input type="checkbox" name="central" value="Central"> Central Kentucky
			<br>
			<input type="checkbox" name="eastern" value="Eastern"> Eastern Kentucky
			<br>
			<input type="checkbox" name="western" value="Western">  Western Kentucky
		</p>

	</div>

	<div class="col-sm-12">
		

	<div id = "footer">
	<br>
		<p>
		<b>Please describe your longterm goals farming (100 words or less open ended)</b>
		<br>
		 <textarea name="goals" class="form-control"></textarea>
		<br>
		<br>
		<b>Where are you currently farming?</b>
		<br>
		 <textarea name="currently_farming" class="form-control"></textarea>
		<br>
		<br>
		<b>How do you sell your products?</b>
		<br>
		 <textarea name="sell_produce" class="form-control"></textarea>
	</p>
	<br>
	<button type="button" class="btn btn-primary btn-lg">Submit</button>
	</div>
</form>