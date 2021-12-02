<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php

$text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Corporis amet blanditiis quidem dolorem unde delectus voluptates possimus sed consequatur sequi nihil tempora, 
illum vero eius animi nisi laudantium, porro similique eveniet! Facere cumque a, error aut iusto asperiores illum 
quaerat temporibus ad eveniet id quam ipsum, ducimus fugit officiis consectetur omnis nam. Adipisci vel nihil, 
veritatis neque, vitae saepe praesentium nam quis non laudantium velit, provident expedita explicabo asperiores! 
Excepturi non culpa tempore molestias, nesciunt ipsum at velit officiis, assumenda cupiditate ratione atque quod fugiat 
dolore dolor reiciendis dolorum reprehenderit voluptates deleniti? Non esse quisquam exercitationem voluptatibus aspernatur
 modi repellat, dignissimos in tenetur ut quae, error quia, placeat voluptatum pariatur totam ad architecto illum nulla sit? Itaque, 
 emo pariatur? Porro asperiores quaerat, deleniti ab adipisci incidunt odio, voluptatum laborum cumque architecto assumenda ex laudantium quas, 
 a nemo alias amet sit nihil autem. Veritatis qui aut cupiditate a perspiciatis omnis aperiam laborum nihil, nemo vel tenetur. Alias, iure doloremque
  earum sunt error beatae ipsum quia neque nostrum impedit assumenda ipsa fugit. Deserunt corporis amet consectetur laborum voluptas tenetur ex quaerat
   aliquid veritatis ipsum. Incidunt eligendi placeat, explicabo, vero nihil cumque odit dolorem molestiae magni hic temporibus magnam aut. Repellendus,
    blanditiis iste. Lorem ipsum dolor sit, amet consectetur adipisicing elit';

$textArray = explode('.', $text);

?>

<h2>Very long text:</h2>
<p><?php echo $text?></p>
<?php for ($i=0; $i < count($textArray); $i++) { ?>
    <h2>Paragraph <?php echo $i+1?></h2>
    <p><?php echo $textArray[$i]?></p>
<?php } ?>

