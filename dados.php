<?php
    require_once 'validaCep.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>RESULTADO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/bg-01.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="POST" >
					<span class="contact3-form-title">
                        RESULTADO
					</span>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text" name="rua" disabled placeholder="rua" value='<?php echo $endereco->logradouro;?>'>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text"  name="bairro" disabled placeholder="bairro" value='<?php echo $endereco->bairro;?>'>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<input class="input3" type="text"  name="cidade" disabled placeholder="cidade" value='<?php echo $endereco->localidade;?>'>
						<span class="focus-input3"></span>
					</div>
                    
					<div class="wrap-input3 validate-input">
						<input class="input3" type="text"  name="uf" disabled placeholder="uf" value='<?php echo $endereco->uf;?>'>
						<span class="focus-input3"></span>
					</div>
                    
					<div class="wrap-input3 validate-input">
						<input class="input3" type="text"   name="ddd" disabled placeholder="ddd" value='<?php echo $endereco->ddd;?>'>
						<span class="focus-input3"></span>
					</div>
				
					<div class="container-contact3-form-btn">
                            <button class="contact3-form-btn" name="btnVoltar">
                                VOLTAR
                            </button>   
					</div>
                    <div>
                        <?php
                            if(isset($_POST['btnVoltar'])){
                                header("LOCATION:index.php");
                            }
                        ?>
                    </div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
