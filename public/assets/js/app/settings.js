import {get, post } from "./http.js";
new Vue({
    el: "#App",
    data() {
        return {
            error: null,
            result: null,
            isLoading: false,
            fonctions: [],
        };
    },
    //le hook pour effectuer une operation lorsque la page se lance
    async mounted() {
        await this.loadFonctions();
    },

    methods: {
        //charge la liste de toutes les fonctions
        loadFonctions() {
            get("/fonctions")
                .then((res) => {
                    this.fonctions = res.data.fonctions;
                })
                .catch((err) => console.log("error"));
        },
        //cree une fonction dans la base de données de maniere asynchrone et recharge la liste des fonctions
        createFonction(event) {
            const formData = new FormData(event.target);
            const url = event.target.getAttribute("action");
            this.isLoading = true;
            post(url, formData)
                .then(({ data, status }) => {
                    this.isLoading = false;
                    if (data.error !== undefined) {
                        this.error = data.error;
                    }
                    if (data.result !== undefined) {
                        this.result = data.result;
                        this.loadFonctions();
                        event.target.reset();
                        setTimeout(() => {
                            $('#fonction_modal').modal('hide');
                        }, 500)
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },
    },
});