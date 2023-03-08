
//ici je veux ajouter en avec un appel ajax +1Semaine à la Personnes selectionner dans la base avec userContoller->setNbSemaines


//ici je veux changer la couleur de la case en fonction de la personne selectionné et de sa couleur en base 


//ici je veux mettre a jour la collection "Planning.stats" avec {Person :  "nom", nbDeSemainesTotal :  "nbSemaines"}


//ici je veux récupèrer en ajax la liste de mes personnes depuis arrayController->returnAllNom() 
//pour renseigner les nom selectionnable dans le planning
$(document).ready(function(){
    var len = 5;
    var nb_sel = 52;
    for(var sel_i = 0 ; sel_i<nb_sel; sel_i++){
        //$('#sel_user_'+sel_i).empty();
        for( var i = 1; i<len; i++){
            var name = 'name-'+i;
            $('#sel_user_'+sel_i).append('<option value='+i+'>'+name+'</option>');
        }
    }
    $('.sel_field').change(function(){
        var el = document.getElementsByClassName('sel_field');
        var name = el[0].getAttribute("name");
        var parent = el[0].parentNode;
        var id_current = "sel_user_"+name;
        //var id_to_class = id_current.children("option:selected").text();
        //var id_to_class = $('sel_user_0').find(":selected").text();
        //parent.className = $.trim(el.children("option:selected").text());
        //parent.className = $.trim($('sel_user_0').children("option:selected").text());
        //console.log(parent.className);
    });
});
//change la couleur du fond de la td avec class="personne" par class="*nomSelectionner*" par celle enregistrer en base


$(function(){ 
    // add rest = true and jsonp = true to /etc/mongodb.conf, 
    // then restart mongodb
         $.ajax({
                url: "mongodb+srv://Mathieu:MmhD5OLApcFvYoVB@cluster0.n9u83qq.mongodb.net/test",
                type: 'get',
                dataType: 'jsonp',
                jsonp: 'jsonp', // mongodb is expecting that                                                                                     
            })
            .done(function(data) {
                d=JSON.stringify(data,undefined,1);
                $("code").text(d).css("color","green");
            })
            .fail(function(request,status,error) {
                $("code").text("get failed: "+error).css("color","red");
            })
            .always(function() {
                console.log("finished")
            })

  });

