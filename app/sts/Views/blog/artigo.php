<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>
<main role="main">

    <div class="jumbotron blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">

                    <?php
                    if (!empty($this->Dados['sts_artigos'][0])) {
                        extract($this->Dados['sts_artigos'][0]);
                        
                        ?>
                        <div class="blog-post">								
                            <h2 class="blog-post-title"><?php echo $titulo ?></h2>
                            <img src="<?php echo URL . 'assets/imagens/artigo/' . $id . '/' . $imagem; ?>" class="img-fluid" alt="<?php echo $titulo ?>" style="margin-bottom: 20px;">

                            <p><?php echo $conteudo ?></p>
                        </div>

                        <?php
                    }
                    ?>


                    <div class="p-3">
                        <h4 class="font-italic">Recentes</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Artigo 1</a></li>
                            <li><a href="#">Artigo 2</a></li>
                            <li><a href="#">Artigo 3</a></li>
                            <li><a href="#">Artigo 4</a></li>
                            <li><a href="#">Artigo 5</a></li>
                            <li><a href="#">Artigo 6</a></li>
                            <li><a href="#">Artigo 7</a></li>
                            <li><a href="#">Artigo 8</a></li>
                            <li><a href="#">Artigo 9</a></li>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Destaque</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Artigo 7</a></li>
                            <li><a href="#">Artigo 3</a></li>
                            <li><a href="#">Artigo 8</a></li>
                        </ol>
                    </div>
                    </aside>
                </div>
            </div>
        </div>					

</main>

