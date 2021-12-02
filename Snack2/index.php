<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->







<form action="index.php" method="get">

<label for="name">NAME:</label>
<input type="text" name="name" id="name">

<label for="mail">EMAIL:</label>
<input type="text" name="mail" id="mail">

<label for="age">AGE:</label>
<input type="text" name="age" id="age">

<input type="submit" value="SUBMIT">


</form>