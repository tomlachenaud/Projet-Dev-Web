document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        var isValid = true;

        // Validation de la date du contrat
        var dateContratInput = document.querySelector("input[name='Date_du_contrat']");
        if (!dateContratInput.value) {
            dateContratInput.style.borderColor = "red";
            isValid = false;
        } else {
            dateContratInput.style.borderColor = "";
        }

        // Validation du nom
        var nomInput = document.querySelector("input[name='Nom']");
        if (!nomInput.value) {
            nomInput.style.borderColor = "red";
            isValid = false;
        } else {
            nomInput.style.borderColor = "";
        }

        // Validation du prénom
        var prenomInput = document.querySelector("input[name='Prenom']");
        if (!prenomInput.value) {
            prenomInput.style.borderColor = "red";
            isValid = false;
        } else {
            prenomInput.style.borderColor = "";
        }

        // Validation de l'email
        var emailInput = document.querySelector("input[name='Email']");
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            emailInput.style.borderColor = "red";
            isValid = false;
        } else {
            emailInput.style.borderColor = "";
        }

        // Validation du genre
        var sexInputs = document.querySelectorAll("input[name='Sex']");
        var sexSelected = false;
        sexInputs.forEach(function(input) {
            if (input.checked) {
                sexSelected = true;
            }
        });
        if (!sexSelected) {
            document.querySelector(".sex").style.borderColor = "red";
            isValid = false;
        } else {
            document.querySelector(".sex").style.borderColor = "";
        }

        // Validation de la date de naissance
        var dateNaissanceInput = document.querySelector("input[name='Date_de_naissance']");
        if (!dateNaissanceInput.value) {
            dateNaissanceInput.style.borderColor = "red";
            isValid = false;
        } else {
            dateNaissanceInput.style.borderColor = "";
        }

        // Validation de la fonction
        var fonctionInput = document.querySelector("select[name='Fonction']");
        if (fonctionInput.value === "-- Veuillez choisir une option --") {
            fonctionInput.style.borderColor = "red";
            isValid = false;
        } else {
            fonctionInput.style.borderColor = "";
        }

        // Validation du sujet
        var sujetInput = document.querySelector("input[name='Sujet']");
        if (!sujetInput.value) {
            sujetInput.style.borderColor = "red";
            isValid = false;
        } else {
            sujetInput.style.borderColor = "";
        }

        // Validation du contenu
        var contenuInput = document.querySelector("input[name='Contenu']");
        if (!contenuInput.value) {
            contenuInput.style.borderColor = "red";
            isValid = false;
        } else {
            contenuInput.style.borderColor = "";
        }

        // Empêcher l'envoi du formulaire si les données ne sont pas valides
        if (!isValid) {
            event.preventDefault();
            document.getElementById("erreur").innerHTML = "* Informations obligatoires";

        }
    });
});
