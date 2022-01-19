

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Postagens
      </h3>

          <?php foreach ($postagens as $post) {
            //echo $post ->id;
          ?>
 
        
      <article class="blog-post">
           <div class="row">
    <div class="col-6">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
            
  
            <img width="340" height="200" class="width-100" 
src="assets/uploads/files/<?=  $post->url_imagem ?>" alt="Boat" />

            

            
            
            
            
          <a href="<?php echo base_url().'index.php/pagina/post/'.$post ->id ;?>">
          
        <h2 class="blog-post-title"><?php echo $post->titulo;?> </h2>
          </a>
            
        <p class="blog-post-meta"> <?php echo $post->data_post;?> by <a href="#"><?php echo $post->nome_autor ?> </a></p>

        <p>
        <?php echo $post->previa ?>
        </p></div></div></div></div>
        </article>
       <?php 
       
        }  ?>
        <br>
        
     
<div class="container">
<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
</div>
                            
                                    <br>

                            <header>

            <style>
                .pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
                .col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 100%;
    max-width: 100%;
}.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffc107;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: black;
}
.width-100 {
 width: 100%;
}
.width-height-100 {
  width: 100%;
  height: 100%;
}
.width-height-100 {
  width: 100%;
  height: auto;
}

            </style>
        </header>