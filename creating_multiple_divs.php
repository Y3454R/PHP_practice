<!DOCTYPE html>
<html>
<head>
<style>
div {
  border: 1px solid black;
  //padding: 25px 50px 75px;
  background-color: lightblue;
  text-align: center;
}
p {
  padding: 25px;
}
</style>
</head>
<body>

<?php for($i = 0; $i < 5; ++$i) { ?>
	<div>
    	<p> <?php echo "This is div no. $i <br>" ?> </p>
    </div>
<?php } ?>

</body>
</html>
