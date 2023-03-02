<?php session_start();
include "header.php";
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">
		
<?php include  "connect.php"; ?>

	<form action="order.php" method="post">

		<table class="checkOut" align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h3 align="center" style="font-size: 1.3em;">Provide the delivery informations. <br> </h3> </th>

		<br>
            </tr>
			    <tr align="center">
			    	<td style="color: dark-grey">   Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name" style="border:0; width: 100%; padding: 10px; color: orange; background-color: #fddfdf"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: dark-grey">   Enter Mobile no <br>
			        <input type="no" name="mo" placeholder="Enter Mobile no" style="border:0; width: 100%; padding: 10px; color: orange; background-color: #fddfdf"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: dark-grey">   Enter Email address <br>
			        <input type="Email" name="em" placeholder="Enter email address" style="border:0; width: 100%; padding: 10px; color: orange; background-color: #fddfdf"></td>
			    </tr>

                <tr align="center">
                	<td style="color: dark-grey"> Enter address <br>
                 <input type="text" name="ad" placeholder="enter your address" style="border:0; width: 100%; padding: 50px; color: orange; background-color: #fddfdf">
                </tr>	

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Confirm Order" style="color:white; border:0ch; background: #306c74; font-size: 1.1em;"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>