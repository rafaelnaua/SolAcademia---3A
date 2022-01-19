<body>
    
<!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/menu.css" rel="stylesheet">



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
  <?php $this->load->view('template/topo');
?>
    <?php  $this->load->view('template/menu');?> 
<main class="container">
   <?php  //$this->load->view('template/destaque');?> 

    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      
<div class="container"> 
<div class="row"> 
 <div class="how-section1">
   <div class="row">
                        <div class="col-md-6">
                             
                            
                            <h4>Sobre Nós</h4>
                                        
                      <p class="text-muted" style="font-size:19px">Em 2016, a Sol Academia alugou um ponto no centro da cidade, 
                      ali ela ficou durante um ano até que o espaço já não
                      era suficiente para o tanto de clientes que existiam. 
                      Então, foi comprado um novo ponto em outro endereço,ela fica localizada na avenida do contorno.
                      Temos várias modalidades, entre elas: jump, aula de spinning e musculação. Nosso objetivo é
                      oferecer tudo que o cliente está procurando.
                      </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="data:image/png;base64,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" alt=""/>
                        </div>
                    </div>
   
 </div>
</div>
</div>
 
    
     <?php // $this->load->view('template/coluna-direita');
?>
  </div>

</main>
<br> <br> <br> 
                <?php $this->load->view('template/rodape');
?>

<header>
    
            
<style>
   
 .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffc107;
    font-weight: bold;
    font-size: 40px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 100%;
    margin-top: 10%;
}  
img {
    vertical-align: middle;
    border-style: none;
    color: yellow;
}


        
    </style>
    
</header>