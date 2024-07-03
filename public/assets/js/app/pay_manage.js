document.addEventListener("DOMContentLoaded", function () {
    submitData();
});

function submitData() {
    document
        .getElementById("payForm")
        .addEventListener("submit", function (event) {
            event.preventDefault(); // Empêcher le formulaire de se soumettre normalement
            var formData = new FormData(this);
            // Récupérer le bouton et le loader
            var submitBtn = document.getElementById("submitBtn");
            var loader = document.getElementById("btn-loader");

            // Désactiver le bouton et afficher le loader
            submitBtn.disabled = true;
            loader.classList.remove("d-none"); // Optionnel : changer le texte du bouton

            // Récupérer le jeton CSRF depuis la balise meta
            var csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            // Utiliser fetch pour envoyer les données du formulaire
            fetch(this.getAttribute("action"), {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": csrfToken, // Ajouter le jeton CSRF dans les en-têtes
                },
            })
                .then((response) => {
                    if (!response.ok) {
                        return response.json().then((errorData) => {
                            throw new Error(JSON.stringify(errorData));
                        });
                    }
                    return response.json(); // Convertir la réponse en JSON
                })
                .then((data) => {
                    submitBtn.disabled = false;
                    loader.classList.add("d-none");
                    if (data.errors !== undefined) {
                        var errorAlert = `
                                <div class="alert alert-danger overflow-hidden p-0" role="alert">
                                    <div class="p-3 bg-danger text-fixed-white d-flex justify-content-between">
                                        <h6 class="alert-heading mb-0 text-fixed-white">Echec de traitement de la requête.</h6> <button type="button"
                                            class="btn-close p-0 text-fixed-white" data-bs-dismiss="alert" aria-label="Close"><i
                                                class="bi bi-x"></i></button>
                                    </div>
                                    <hr class="my-0">
                                    <div class="p-3">
                                        <p class="mb-0">${data.errors.toString()}</p>
                                    </div>
                                </div>
                    `;
                        document.getElementById("errors-section").innerHTML =
                            errorAlert;
                    } else {
                        // Afficher un message de succès similaire à celui de Blade
                        var successAlert = `
                                <div class="alert alert-success overflow-hidden p-0" role="alert">
                                    <div class="p-3 bg-success text-fixed-white d-flex justify-content-between">
                                        <h6 class="alert-heading mb-0 text-fixed-white">Opération effectuée .</h6> <button type="button"
                                            class="btn-close p-0 text-fixed-white" data-bs-dismiss="alert" aria-label="Close"><i
                                                class="bi bi-x"></i></button>
                                    </div>
                                    <hr class="my-0">
                                    <div class="p-3">
                                        <p class="mb-0">Opération effectuée avec succès! <a href="javascript:void(0);" class="fw-semibold text-decoration-underline">Visitez mosala.site pour plus d'infos !</a></p>
                                    </div>
                                </div>
                    `;
                        document.getElementById("errors-section").innerHTML =
                            successAlert;
                    }

                    // Gérer la réponse JSON

                    // Réactiver le bouton et cacher le loader après la réponse
                })
                .catch((error) => {
                    console.log(error);
                    submitBtn.disabled = false;
                    loader.classList.add("d-none");
                    var errorAlert = `
                                <div class="alert alert-danger overflow-hidden p-0" role="alert">
                                    <div class="p-3 bg-danger text-fixed-white d-flex justify-content-between">
                                        <h6 class="alert-heading mb-0 text-fixed-white">Thank you for reporting this.</h6> <button type="button"
                                            class="btn-close p-0 text-fixed-white" data-bs-dismiss="alert" aria-label="Close"><i
                                                class="bi bi-x"></i></button>
                                    </div>
                                    <hr class="my-0">
                                    <div class="p-3">
                                        <p class="mb-0">Echec de traitement du paiement ! <a href="javascript:void(0);" class="fw-semibold text-decoration-underline">Visitez mosala.site pour plus d'infos !</a></p>
                                    </div>
                                </div>
                    `;
                    document.getElementById("errors-section").innerHTML =
                        errorAlert;
                    // Réactiver le bouton et cacher le loader en cas d'erreur
                });
        });
}
