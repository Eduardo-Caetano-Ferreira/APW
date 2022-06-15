    
<?php get_header(); ?>

<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">               
                <b><h1>Anfitrião</h1></b>
         
                 <p>O Anfitrião é o nome dado ao portador da Relíquia de Energia. Ele é uma entidade que procura apenas se divertir com o caos, causando dor e agonia, distorcendo as regras da realidade.</p>
              
                <p>Essa entidade é cultuada pela Produção do Anfitrião, pessoas que foram manipuladas pelo Ocultismo, convencidas a "abraçar o caos", e que construíram diversas salas de tortura com base em enigmas para satisfazer a tal entidade, fazendo suas vítimas passarem por diversos jogos sádicos. O Anfitrião possuí vínculo direto com o Coliseu, sendo que determinados Governantes do local já portaram a Relíquia no passado.</p>           
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Amphitruos</h1></b>
               
                <p>Amphitruo possui uma máscara com uma feição de sorriso e olhos pequenos. Além disso a máscara apresenta três mãos que saem das extremidades e tocam no rosto, se fundindo a ele, tendo algo similar a dedos saindo da parte superior. </p>
          
                <p>Ele possui a fisionomia de Gaius, vestindo a mesma roupa que ele usava antes de ser consumido pela Relíquia, uma armadura com ombreiras pontudas que cobrem até seu pescoço, além de leves detalhes roxos nas laterais dessa proteção. Por cima de tudo, possui um pano no seu peitoral com o símbolo da Calamidade usando uma grande capa roxa com capuz, que segue de seus ombros até seus pés, derramando-se sobre o chão. Quando visto em combate, brilhava em roxo, com chamas da mesma cor passando por todo o seu corpo.</p>
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Plaustos</h1></b>
              
                <p>Plautus possui uma máscara tribal com uma feição de sorriso forçado e olhos apertados. Além disso, a máscara apresenta marcas tribais, formas que imitam folhas em seu topo e grandes adornos nas orelhas. Plautus tinha os cabelos presos em um rabo de cavalo curto e o formato de seu corpo era bem definido, ele atacava utilizando uma lança na sua mão direita e uma adaga na sua mão esquerda. Quando visto em combate, brilhava em rosa, com chamas da mesma cor que o circulam.</p>
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Silenus</h1></b>
              
                <p>Silenus possui uma máscara com uma feição de uma grande boca que forma um sorriso dentado e olhos apertados. Além disso, a máscara apresenta diversas rugas e estruturas tortas em zigue-zague arredondadas que se projetam da face tanto superiormente quanto inferiormente. Silenus tinha os cabelos castanhos e penteados para trás, vestindo uma longa túnica branca sem mangas que deixa seus braços adornados por pulseiras azuis à mostra. Quando visto em combate, brilhava em azul, tendo um aspecto que se assemelha à água, evaporando e retornando de seu corpo constantemente.</p>
            </div>
        </div>
    </div>
</fieldset>
<div class="row">
<?php
    $cont = 0;
    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            $cont++;
            if($cont <= 3){

?>

                <div class="col-md-4">
                    <h3><?php the_title(); ?></h3>
                    <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-primary" href="<?php the_permalink();?>">Leia mais</a>
                </div>

<?php

            }
        }
    }
?>
</div>
<?php get_footer(); ?> 

