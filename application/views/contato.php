<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
  <?php $this->load->view('template/topo');
?>
    <?php  $this->load->view('template/menu');?> 
<main class="container">
   <?php  //$this->load->view('template/destaque');?> 

    <br>
    <center>
 <h3 class="pb-4 mb-4 fst-italic border-bottom">
        CONTATO
      </h3>
        
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Entre em contato conosco</h2>
				<h4>Gostaríamos muito de ouvir você!</h4>
                                <br> <br>
                                <h5> Instagram:<h5>
                                <a href="https://instagram.com/sol.academia?utm_medium=copy_link" class="stretched-link">@sol.academia</a>
                                <h6> Telefone:<h6>
                                 <a href="" class="">(91)3729-0763</a>
                                 <br> <br>
                                 <h7> Endereço:<h7>
                                 <a href="" class="">Rua do Contorno, Nº 546
                                 - Paragominas - PA</a> 
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nome:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname"> Sobrenome:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Mensagem:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

        
  </center>
     <?php // $this->load->view('template/coluna-direita');
?>
 
  <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br><br><br> <br> <br> <br> <br>
</main>

                <?php $this->load->view('template/rodape');
?>


<header>
    
    <style>
        
        body{
		background-color: #ffffff;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ffc107;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #292f35;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #ffc107;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
        .h6, h6 {
    font-size: 1.25rem;
}
.contact-form label {
    font-weight: 600;
    color: white;
}
  

    </style>
    
</header>