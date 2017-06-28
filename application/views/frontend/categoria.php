
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    <?php echo $titulo_pagina ?>
                    <small> > 
                        <?php 
                        if($subtitulo_pagina != ''){
                        echo $subtitulo_pagina;
                        }else{
                            foreach ($subtitulo_paginadb as $dbtitulo){
                                echo $dbtitulo->titulo;
                            }
                        }      
                        ?>
                    </small>
                </h1>
                    <?php 
                    foreach ($publicacoes_destaque as $pubdestaque){
                        
                    ?>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="<?php echo base_url('postagem/'.$pubdestaque->id.'/'.limpar($pubdestaque->titulo)) ?>"><?php echo $pubdestaque->titulo ?></a>
                </h2>
                <p class="lead">
                    por <a href="<?php echo base_url('autor/'.$pubdestaque->idautor.'/'.limpar($pubdestaque->nome)) ?>"><?php echo $pubdestaque->nome ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($pubdestaque->data) ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $pubdestaque->subtitulo ?></p>
                <a class="btn btn-primary" href="<?php echo base_url('postagem/'.$pubdestaque->id.'/'.limpar($pubdestaque->titulo)) ?>">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                
                <?php
                }
                ?>

                

            </div>