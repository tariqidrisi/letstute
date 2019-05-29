<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LetsTute a modern educational">
    <meta name="author" content="LetsTute">
    <title>LetsTute</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <?php include 'style.php'; ?>
</head>

<body>

	<div id="page">

    <?php include 'header.php'; ?>

	<!-- /header -->

	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Your cart</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="cart-1" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Payment</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="cart-2" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Finish!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
					<div id="confirm">
						<h4>Order completed!</h4>
						<p>You'll receive a confirmation email at mail@example.com</p>
					</div>
				</div>
			</div>
		</section>
		<!--/hero_in-->
	</main>
	<!--/main-->
  <?php include 'footer.php'; ?>
