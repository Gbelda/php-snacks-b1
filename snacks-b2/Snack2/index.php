<!-- Snack 2
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. 
Il form avrà un input di testo in cui inserire il nome di un invitato. 
Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. -->

<form action="./index2.php" method="get">
    <label for="name">INSERT NAME</label>
    <input type="text" name="name" id="name">
    <button type="submit">SUBMIT</button>
</form>