import { get, post } from "./http.js";
new Vue({
    el: "#App",
    data() {
        return {
            error: null,
            result: null,
            isLoading: false,
            fonctions: [],
            nature_jobs: [],
            jobs: [],
            phases: [],
            roles: [],
        };
    },
    //le hook pour effectuer une operation lorsque la page se lance
    async mounted() {
        await this.loadFonctions();
        await this.loadNatureJob();
        await this.loadJob();
        await this.loadPhase();
        await this.loadRoles();
    },
    methods: {
        //Chargements des roles
        loadRoles() {
            get("/roles")
                .then((res) => {
                    this.roles = res.data.roles;
                })
                .catch((err) => console.log("error"));
        },

        //Create new role
        createRole(event) {
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
                        this.loadRoles();
                        event.target.reset();
                        setTimeout(() => {
                            $("#add_role").modal("hide");
                        }, 500);
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },

        //create User
        createUser(event) {
            const password = event.target["password"].value;
            const confirm = event.target["confirm"].value;
            console.log(event.target["role_id"].value);
            if (password !== confirm) {
                this.error = "Echec de confirmation du mot de passe !";
                return;
            }
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
                        event.target.reset();
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },

        //charge la liste de toutes les natures jobs
        loadNatureJob() {
            get("/nature_jobs")
                .then((res) => {
                    this.nature_jobs = res.data.nature_jobs;
                })
                .catch((err) => console.log("error"));
        },

        //Creation de la nature job
        createNatureJob(event) {
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
                        this.loadNatureJob();
                        event.target.reset();
                        setTimeout(() => {
                            $("#naturejob_modal").modal("hide");
                        }, 500);
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },

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
                            $("#fonction_modal").modal("hide");
                        }, 500);
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },
        //charge la liste de tous les jobs
        loadJob() {
            get("/jobs")
                .then((res) => {
                    this.jobs = res.data.jobs;
                    console.log(JSON.stringify(res.data.jobs));
                })
                .catch((err) => console.log("error"));
        },
        //cree un job dans la base de données de maniere asynchrone et recharge la liste des fonctions
        createJob(event) {
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
                        this.loadJob();
                        event.target.reset();
                        /*
                        setTimeout(() => {
                            $('#job_modal').modal('hide');
                        }, 500)*/
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },
        //charge la liste de toutes les phases
        loadPhase() {
            get("/phases")
                .then((res) => {
                    // console.log(JSON.stringify(res.data.phases));
                    this.phases = res.data.phases;
                })
                .catch((err) => console.log("error"));
        },
        //cree les phases dans la base de données de maniere asynchrone et recharge la liste des fonctions
        createPhase(event) {
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
                        this.loadPhase();
                        event.target.reset();
                        /*
                        setTimeout(() => {
                            $('#job_modal').modal('hide');
                        }, 500)*/
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },
    },
});
