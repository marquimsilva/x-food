<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tela-Cadastro</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url('IMG/login.jpg');
			box-sizing: border-box;
			background-repeat: no-repeat;
			background-position: center;
			background-size:100%;
			width:100%;
			height:100%;
		}
		.login{
			background-color:#FFFFFF;
			width: 450px;
			right: 400px;
			position: absolute;
			padding: 10px;
			margin-top: 25px;
			left:800px;
			border-radius: 30px;
			display: inline-block;
			font-family: 'Calibri', cursive;

			

		}
		
		
		.login input{
			width: 100%;
			margin-top: 10px;
			border:2px solid orange;
			border-radius: 10px ;
			padding: 10px 0px 10px;

		}
		.a[type="button"]{
			width: 90%;

	        height: 50px;
			background-color:#ffffff;
			border: 0;
			color:#1c1c1c;
			letter-spacing: 1px;
			font-size: 18px;
			font-family: 'arial', cursive; 
			margin-top: 20px;


		}
		.logo1{
			width: -100px;
			height: 100px;
			transform: translate(-200%);
			margin-top: 2%
		}
		.logo{
			font-size: 30px;
			margin-left:90px;
			}

		.img{
			width: 6%;
			float: left;

			}

		.a:hover{

				background-color: #dbdbdb;
			}


		.imgButton{
			height:100%;
            width:400px;
			margin-left:14px;
			margin-top:30px;
			border-radius: 10px ;}
		
		h4{
			margin-left:150px;
		}
		
	</style>


 </head>
 <body>
  <form>

 <div class="login">
		<div class="logo">
			<p><b>FAÇA SEU CADASTRO</b></p>
		</div>
				<form>
					<h3>Nome Completo</h3>
					<input type="text" placeholder="   NOME COMPLETO"></input>
					<h3>E-mail</h3>
					<input type="email" placeholder="   Exemplo@gmail.com"></input>
					<h3>Senha</h3>
					<input type="password" placeholder="   Senha"></input>
					<h4><a href="login.html">Já sou cadastrado</a></h4>

					<input type="submit" value="ENTRAR"></input>
				</form>
		</form>
	
		  </div>
  
 </body>
</html>