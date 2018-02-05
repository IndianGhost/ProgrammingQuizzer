$(document).ready(function() {
  function getData(language, link){
    $.getJSON(link, function(results){
      var dom = "#"+language;
      var quizz = "";
      $.each(results, function(i, field){
        //html tags will be removed and written in the html document
        quizz += "<h3>"+field.question+"</h3>";
        $.each(field.choix, function(j, choix){
          quizz += "<p>"+choix.contenu+"</p>";
        });
        /*
          * We'll use to variables for doms and quizz content :
          * ->variable for questions
          * ->variable for choices
          */
        $(dom).html(quizz);
      });
    });
  }
  function url(language){
    return "database/"+language+"_quizz.json";
  }
  var language = {
    "html" : url('html'),
    "css" : url('css'),
    "javascript" : url('javascript'),
    "php": url('php'),
    "python" : url('python'),
    "sql" : url('sql'),
    "c" : url('c')
  };
  $.each(language, function(languageName, link){
    getData(languageName, link);
  });
});