<?php
?>
   <main >
   <h1 class="companytitle">Update Company</h1>
        <div class="containercompany">
          <div class="container1company">
	         <form action="" method="post">
		         <div class="companyname">
			        <label for="companyname">Company Name :</label>
			        <br>
			        <input class="input" id="companyname" type="text" name="companyname" value="<?= isset($company->name) ? $company->name : '' ?>" placeholder="Company name..." autocomplete="off" required autofocus>
		         </div>	

		         <div class="tva">
			        <label for="tvanumber">TVA Number :</label>
			        <br>
			        <input class="input" id="tvanumber" type="text" name="tvanumber" value="<?= isset($company->vatnumber) ? $company->vatnumber : '' ?>" placeholder="BEXXXXXXXX..." autocomplete="off" required>
		         </div>

		         <div class="country">
			        <label for="country">Country :</label>
			        <br>
			        <input class="input" id="country" type="text" value="<?= isset($company->country) ? $company->country : '' ?>" name="country" placeholder="Country" required>
		         </div>

		         <div class="companytype">
		            <label for="companytype">Company Type :</label>
		            <br>
		            <select class="input"  id="companytype" name="companytype" required>
                        <div class="input">
                        <option value="">--Please choose a type of Company--</option>
                        	<?php foreach ($companytypes as $companytype) { ?>
            			<option <?php if(isset($company->company_type_id) && $company->company_type_id == $companytype->company_type_id) { ?>selected<?php } ?> value="<?= $companytype->company_type_id; ?>"><?= $companytype->type; ?></option>
        					<?php } ?>
                        </div>
                    </select>
		         </div>
		         <br>
		         <div class="button">
		            <input  type="hidden" name="token" value="<">
		            <button class="submit" type="submit" name="submit">Submit</button>
		         </div>
	         </form>
        </div>
       </div>
   </main>
