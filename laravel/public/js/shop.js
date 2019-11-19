$('#rmButton').one('click', function(){
    //document.append("<input class='form-control margin-top-bo' type='text' placeholder='jj/mois'>".
   
    $( ".addRmButtons" ).after( "<a href='shop/{$nom}'><button name='singlebutton' class='btn btn-danger btn-rounded'>Ajouter</button></a>" );
    
    $nom =  $( ".addRmButtons" ).after( "<input class='form-control margin-top-bot' id='exampleFormControlTextarea1' placeholder='numero de l article' rows='3'></input>" );
  

    /*document"<input class='form-control margin-top-bot' type='text' placeholder='Titre de l évenement'>"
    
    "<p class='margin-top-bot'>Description</p>"
    "<textarea class='form-control margin-top-bot' id='exampleFormControlTextarea1' placeholder='En une ligne...(svp)' rows='3'></textarea>"
*/
});