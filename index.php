<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title></title>
</head>
<body style="">
	<?php
		$con = mysqli_connect('127.0.0.1', 'root', "", "market");
		$q = mysqli_query($con, "SELECT * FROM products");
		$result = $q->fetch_assoc();
		$result2 = $q->fetch_assoc();
		$result3 = $q->fetch_assoc();
		$result4 = $q->fetch_assoc();
		$result5 = $q->fetch_assoc();
		$result6 = $q->fetch_assoc();
	?>
	<div class="col-12" style="height: 75px; background: linear-gradient(to right, #f7c081, #f5870a);">
		<img src="icon4.svg" class="h-100">
		<img src="icon.svg" class="h-100" style="margin-left: 55%;">
		<img src="icon2.svg" class="h-100 ml-5">
		<img src="icon3.svg" class="h-100 ml-5">
		<a href="admin.php" class="text-danger" style="font-size: 25px; font-weight: bold; margin-left: 3%; font-family: Arial;">Добавить товар</a>
	</div>
	<!-- 1 колонна (вывод через админ панель)-->
	<div class="mt-2 d-flex" style="height: 800px;">
		<div class="col-3" style="height: 800px;">
			<div class="border-warning" style="border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<p style=""></p>
				<?php
				$class = "class='";
					echo "<img src='" . $result4["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result4["title"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $resul4["price"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;'>". $result4["info"] . "</p>";
					echo "<button class='btn mt-2 bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
					?>
			</div>
			<div class="border-warning" style="margin-top: 100px; border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<?php
					echo "<img src='" . $result5["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result5["title"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result5["price"] . "</p>";
					echo "<p class='' style='font-size: 20px;;'>". "К" .$result5["info"] . "</p>";
					echo "<button class='btn mt-2 bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
				?>				
			</div>
			<div class="border-warning" style="margin-top: 100px; border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<?php
					echo "<img src='" . $result6["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result6["title"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result6["price"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result6["info"] . "</p>";
					if($result6["info"]!=null){
						echo "<button class='btn bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
					}
				?>				
			</div>
		</div>
		<!-- 2 колонна (баннер) -->
		<img src="bn.jpg" class="mx-auto w-50 h-70">
		<!-- 3 колонна (самовывод) -->
		<div class="col-3" style="">
			<div class="border-warning" style="border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<p style=""></p>
				<?php
				$class = "class='";
					echo "<img src='" . $result["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result["title"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;'>". $result["info"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result["price"] . "</p>";
					echo "<button class='btn mt-2 bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
				?>
			</div>
			<div class="border-warning" style="margin-top: 100px; border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<?php
					echo "<img src='" . $result2["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result2["title"] . "</p>";
					echo "<p class='' style='font-size: 20px;;'>". $result2["info"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result2["price"] . "</p>";
					echo "<button class='btn mt-2 bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
				?>				
			</div>
			<div class="border-warning" style="margin-top: 100px; border-width: 5px 5px 5px 5px; border: solid; outline: solid red;">
				<?php
					echo "<img src='" . $result3["img"] . "'" . $class . "ml-5'" . ">";
					echo "<p class='text-center' style='font-weight: bold; font-size: 25px;'>". $result3["title"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result3["info"] . "</p>";
					echo "<p class='text-center' style='font-size: 20px;;'>". $result3["price"] . "руб" . "</p>";
					echo "<button class='btn mt-2 bg-danger text-white' style='position: absolute; left: 180px;'>Купить</button>";
				?>				
			</div>
		</div>
	</div>
</body>
</html>