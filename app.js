var boutons = Array.from(document.getElementsByTagName("button"));
var screen = document.getElementById("screen");
var historique = document.getElementById("historique");
// Récupération de la variable local historique qui contient la class display à associer.
var dChoice = localStorage.getItem("historique");
historique.setAttribute("class", dChoice);


boutons.map((btn) => {
  btn.addEventListener("click", () => {
    switch (btn.value) {
      default:
        //affichage du calcul saisi par l'utilisateur
        screen.value += btn.value;
        break;
      // Si l'utilisateur clique sur la touche C, clear l'affichage de l'écran
      case "clear":
        screen.value = "";
        break;
      // Au clique sur la touche =
      case "=":
        // Je test si la fonction eval ne detecte pas d'erreur
        try {
          //Si tout est bon
          var result = eval(screen.value);
          var calculeStr = screen.value + "=" + result;
          screen.value = result;
          document.getElementById('calcule').value = calculeStr;
        } catch {
          // Si une erreure est détectée.
          btn.disabled = "true";
          screen.value = "Fatal error..";
          setTimeout(() => {
            location.reload();
          }, 1000);
        }
        break;
      //Affichage de l'historique (localstorage pour garder le choix d'affichage)
      case "historique":
        // récupération des class possédées par la div historique
        var state = historique.getAttribute("class");
        // deux choix possible
        switch (state) {
          case "d-none":
            localStorage.setItem("historique", "d-block");
            historique.setAttribute("class", "d-block");
            break;
          case "d-block":
            localStorage.setItem("historique", "d-none");
            historique.setAttribute("class", "d-none");
            break;
        }
        break;
    }
  });
});
