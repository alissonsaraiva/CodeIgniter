
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                
                    <?php 
                    foreach ($publicacoes_destaque as $pubdestaque){
                        
                    ?>
                </h1>

                <!-- First Blog Post -->
                <h1>
                    <?php echo $pubdestaque->titulo ?>
                </h1>
                <p class="lead">
                    por <a href="<?php echo base_url('autor/'.$pubdestaque->idautor.'/'.limpar($pubdestaque->nome)) ?>"><?php echo $pubdestaque->nome ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($pubdestaque->data) ?></p>
                <hr>
                <p><?php echo $pubdestaque->subtitulo ?></p>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><i><?php echo $pubdestaque->conteudo ?></i></p>
                
                <hr>
                
                <?php
                }
                ?>

                

            </div>