<?php session_start();
$uid = $_SESSION['uid'];
include "header.php"; ?>
<style type="text/css">
	tr {border: 0;}

	tr:hover {
		background-color: #fddfdf;
		border: 0;
		color: black;

	}
</style>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto;">
	<center> <img src="cart.jpg" width="6%"> </center>
	<center>
		<p style="font-size: 2.4em; color: #306c74">Your Cart</p>
	</center>
	<div style="width: 90%; padding: 20px; text-align: right;">
		<!-- <a href="checkout.php"><img src="images/chcekout.png" width="40"></a> -->
		<!-- <a href="checkout.php">Check Out</a> -->
	</div>
	<br>
	<div>
		<?php include "connect.php";
		$s = mysqli_query($con, "SELECT addcart.price, addcart.qty, addcart.total,addcart.id, menu.image
FROM addcart
INNER JOIN menu ON addcart.p_id=menu.id where addcart.u_id='$uid'");
		?>
		<table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
			<tr>
				<th>Image </th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total</th>
				<th>Remove</th>
			</tr>

			<?php
			while ($r = mysqli_fetch_array($s)) {
			?>
				<tr>
					<td align="left"><img src="admin/<?php echo $r['image']; ?>" width=150 height=100></td>
					<td><?php echo $r['price']; ?>/-</td>
					<td><?php echo $r['qty']; ?></td>
					<td><?php echo $r['total']; ?>/-</td>
					<td><a href="deletecart.php?id=<?php echo $r['id']; ?>">Delete</a></td>

				</tr>


			<?php
			}
			?>
		</table>
		<div style="width: 90%; padding: 20px; padding-bottom: 150px; text-align: right;">
			<a href="checkout.php"><img src="images/chcekout.png" width="40"></a>
			<a href="checkout.php">Check Out</a>
		</div>
	</div>


</div>
<?php
include "footer.php";
?>