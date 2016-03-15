//Chargement du DOM
$function() {
  //chargement du doc masquer les div
  $("#liste-caract").hide();
  $("#video").hide();

//Cliquer sur les liens pour les ouvrir
  $("#caract-lien").click(funtion() {
      $("#liste-caract").fadeToggle(1000, "linear");
      });

  $("#video-lien").click(funtion() {
      $("#video").fadeToggle(1000, "linear");
  });

  });
}
