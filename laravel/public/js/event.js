(function($) {
    $.fn.datepicker.dates['fr'] = {
        days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
        daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
        daysMin: ["d", "l", "ma", "me", "j", "v", "s"],
        months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
        monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
        today: "Aujourd'hui",
        monthsTitle: "Mois",
        clear: "Effacer",
        weekStart: 1,
        format: "dd/mm/yyyy"
    };
} (jQuery));


$('.datepicker ').datepicker({
    language: 'fr',
    autoclose: true,
    todayHighlight: true
});

var id_event = event_id;
var id_event_filtered = id_event.substr(13, 2);


/*function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
 
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
 
$('#addButton' + id_event_filtered).click(function(){
    document.getElementById("addButton" + id_event_filtered).style.display="none";
    $('#addButton' + id_event_filtered).after( "<button id ='#addButton + id_event_filtered' class='btn btn-success participate' type='submit'>Participé</button>" );
    $('#addButton' + id_event_filtered).attr('disabled',true);
    setCookie('DisableBtn', true, null);
});
if(getCookie('DisableBtn'))
    $('#addButton' + id_event_filtered).attr('disabled',true);
 
 */


$(document).ready(function () {
    $('.delete_form').on('submit', function () {
        if (confirm("Etes-vous sûr de vouloir supprimer cet évenement ?")) {
            return true;
        }
        else {
            return false;
        }
    });
});

$(document).ready(function () {
    $('.create_form').on('submit', function () {
        if (confirm("Etes-vous sûr de vouloir ajouter cet évenement ?")) {
            return true;
        }
        else {
            return false;
        }
    });
});


$('#addButton' + id_event_filtered).on('click', function(){ 
alert('Vous avez été iscrit à cet évenement');
});
