	<h1>Edit client</h1>
	<form action="<?= URL ?>clients/editSave" method="post">
	
		<input type="text" name="firstname" placeholder="john">
		<input type="text" name="lastname" placeholder="doe">
		<input type="text" name="email">
		<input type="text" name="phone">

		<input type="hidden" name="id" value="">
		<input type="submit" value="Verzenden">
	
	</form>