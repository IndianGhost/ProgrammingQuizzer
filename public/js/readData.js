$(document).ready(function() {
  function getData(language, link){
    $.getJSON(link, function(results){
      //code
    });
  }
});

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

// $.each(language, function(languageName, link){
//   getData(languageName, link);
// });