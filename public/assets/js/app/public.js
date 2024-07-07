import { get, post } from "./http.js";
new Vue({
    el: "#App",

    data() {
        return {
            steps: 3,
            initialStep: 1,
            collaborateurs: [],
            managers: [],
            jobs: [],
            clients: [],
            events: [],
            phases: [],
            form_mission: {
                libelle: "",
                date_debut: "",
                date_fin: "",
                client_id: "",
                job_id: "",
                manager_id: "",
                collaborateur_id: "",
            },
            error: null,
            result: null,
            isLoading: false,
        };
    },

    async mounted() {
        const self = this;
        let myModal = document.getElementById("mission_modal");
        myModal.addEventListener("hidden.bs.modal", function () {
            self.cleanField();
        });
        await this.loadJobs();
        await this.loadManagers();
        await this.loadCollaborateurs();
    },

    methods: {
        loadJobs() {
            get("/jobs")
                .then((res) => {
                    this.jobs = res.data.jobs;
                })
                .catch((err) => console.log("error"));
        },

        loadClients() {
            get("/clients")
                .then((res) => {
                    this.clients = res.data.clients;
                })
                .catch((err) => console.log("error"));
        },
        loadManagers() {
            get("/users")
                .then((res) => {
                    this.managers = res.data.users;
                })
                .catch((err) => console.log("error"));
        },
        onChangeJob(event) {
            let jobId = parseInt(event.target.value);
            this.phases = [];
            this.jobs.forEach((job) => {
                if (job.id === jobId) {
                    this.phases = job.phases;
                }
            });
        },
        cleanField() {
            this.form_mission.libelle = "";
            this.form_mission.date_debut = "";
            this.form_mission.date_fin = "";
            this.form_mission.client_id = "";
            this.form_mission.job_id = "";
            this.form_mission.manager_id = "";
            this.form_mission.collaborateur_id = "";
            this.initialStep = 1;
            this.error = null;
            this.result = null;
        },
        initCalendar() {
            const self = this;
            var CalendarApp = function () {
                this.$body = $("body");
                (this.$calendar = $("#calendar")),
                    (this.$event = "#calendar-events div.calendar-events"),
                    (this.$categoryForm = $("#add_new_event form")),
                    (this.$extEvents = $("#calendar-events")),
                    (this.$modal = $("#my_event")),
                    (this.$saveCategoryBtn = $(".save-category")),
                    (this.$calendarObj = null);
            };

            /* lors du dépôt */
            CalendarApp.prototype.onDrop = function (eventObj, date) {
                var $this = this;
                var originalEventObject = eventObj.data("eventObject");
                var $categoryClass = eventObj.attr("data-class");
                var copiedEventObject = $.extend({}, originalEventObject);
                copiedEventObject.start = date;
                if ($categoryClass)
                    copiedEventObject.className = [$categoryClass];
                $this.$calendar.fullCalendar(
                    "renderEvent",
                    copiedEventObject,
                    true
                );
                if ($("#drop-remove").is(":checked")) {
                    eventObj.remove();
                }
            };

            /* lors du clic sur un événement */
            CalendarApp.prototype.onEventClick = function (
                calEvent,
                jsEvent,
                view
            ) {
                var $this = this;
                var form = $("<form></form>");
                form.append("<label>Modifier le nom de l'événement</label>");
                form.append(
                    "<div class='input-group'><input class='form-control' type=text value='" +
                        calEvent.title +
                        "' /><span class='input-group-addon'><button type='submit' class='btn btn-success'><i class='fas fa-check'></i> Sauvegarder</button></span></div>"
                );
                $this.$modal.modal({ backdrop: "statique" });
                $this.$modal
                    .find(".delete-event")
                    .show()
                    .end()
                    .find(".save-event")
                    .hide()
                    .end()
                    .find(".modal-body")
                    .empty()
                    .prepend(form)
                    .end()
                    .find(".delete-event")
                    .unbind("click")
                    .click(function () {
                        $this.$calendarObj.fullCalendar(
                            "removeEvents",
                            function (ev) {
                                return ev._id == calEvent._id;
                            }
                        );
                        $this.$modal.modal("hide");
                    });
                $this.$modal.find("form").on("submit", function () {
                    calEvent.title = form.find("input[type=text]").val();
                    $this.$calendarObj.fullCalendar("updateEvent", calEvent);
                    $this.$modal.modal("hide");
                    return false;
                });
            };

            /* lors de la sélection */
            CalendarApp.prototype.onSelect = function (start, end, allDay) {
                var $this = this;
                $this.$modal.modal({ backdrop: "statique" });

                // Aller à la date de début de sélection
                $this.$calendarObj.fullCalendar("gotoDate", start);

                var form = $("<form></form>");
                form.append("<div class='event-inputs'></div>");
                form.find(".event-inputs")
                    .append(
                        "<div class='form-group'><label class='control-label'>Nom de l'événement</label><input class='form-control' placeholder='Insérer le nom de l'événement' type='text' name='title'/></div>"
                    )
                    .append(
                        "<div class='form-group'><label class='control-label'>Catégorie</label><select class='form-control' name='category'></select></div>"
                    )
                    .find("select[name='category']")
                    .append("<option value='bg-danger'>Danger</option>")
                    .append("<option value='bg-success'>Succès</option>")
                    .append("<option value='bg-purple'>Violet</option>")
                    .append("<option value='bg-primary'>Primaire</option>")
                    .append("<option value='bg-info'>Info</option>")
                    .append(
                        "<option value='bg-warning'>Avertissement</option>"
                    );
                $this.$modal
                    .find(".delete-event")
                    .hide()
                    .end()
                    .find(".save-event")
                    .show()
                    .end()
                    .find(".modal-body")
                    .empty()
                    .prepend(form)
                    .end()
                    .find(".save-event")
                    .unbind("click")
                    .click(function () {
                        form.submit();
                    });
                $this.$modal.find("form").on("submit", function () {
                    var title = form.find("input[name='title']").val();
                    var categoryClass = form
                        .find("select[name='category'] option:checked")
                        .val();
                    if (title !== null && title.length != 0) {
                        $this.$calendarObj.fullCalendar(
                            "renderEvent",
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: false,
                                className: categoryClass,
                            },
                            true
                        );
                        $this.$modal.modal("hide");
                    } else {
                        alert("Vous devez donner un titre à votre événement");
                    }
                    return false;
                });
                $this.$calendarObj.fullCalendar("unselect");
            };

            CalendarApp.prototype.enableDrag = function () {
                $(this.$event).each(function () {
                    var eventObject = {
                        title: $.trim($(this).text()),
                    };
                    $(this).data("eventObject", eventObject);
                    $(this).draggable({
                        zIndex: 999,
                        revert: true,
                        revertDuration: 0,
                    });
                });
            };

            /* Initialisation */
            CalendarApp.prototype.init = function () {
                this.enableDrag();
                var $this = this;
                var defaultEvents = self.events.map(function (event) {
                    var randomClass = [
                        "bg-purple",
                        "bg-success",
                        "bg-info",
                        "bg-warning",
                        "bg-primary",
                    ][Math.floor(Math.random() * 5)];
                    return {
                        title: event.libelle,
                        start: new Date(event.date_debut),
                        end: new Date(event.date_fin),
                        className: randomClass, // Example class based on event status
                        id: event.id, // Optional: event ID
                    };
                });
                $this.$calendarObj = $this.$calendar.fullCalendar({
                    locale: "fr",
                    slotDuration: "00:15:00",
                    minTime: "08:00:00",
                    maxTime: "19:00:00",
                    defaultView: "month",
                    handleWindowResize: true,
                    dayRender: function (date, cell) {
                        var startAt = new Date(self.form_mission.date_debut); // Remplacez par votre date de début
                        var endAt = new Date(self.form_mission.date_fin); // Remplacez par votre date de fin

                        // Vérifie si la date est dans la plage spécifiée
                        if (date >= startAt && date <= endAt) {
                            $(cell).addClass("bg-primary-light"); // Ajoute une classe pour appliquer le style
                        }
                    },
                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month,agendaWeek,agendaDay",
                    },
                    buttonText: {
                        today: "Aujourd'hui",
                        month: "Mois",
                        week: "Semaine",
                        day: "Jour",
                    },
                    events: defaultEvents,
                    editable: true,
                    droppable: true,
                    eventLimit: true,
                    selectable: true,
                    drop: function (date) {
                        $this.onDrop($(this), date);
                    },
                    select: function (start, end, allDay) {
                        $this.onSelect(start, end, allDay);
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        $this.onEventClick(calEvent, jsEvent, view);
                    },
                });

                // Aller à la date de début lors de l'initialisation
                $this.$calendarObj.fullCalendar(
                    "gotoDate",
                    new Date(self.form_mission.date_debut)
                );

                this.$saveCategoryBtn.on("click", function () {
                    var categoryName = $this.$categoryForm
                        .find("input[name='category-name']")
                        .val();
                    var categoryColor = $this.$categoryForm
                        .find("select[name='category-color']")
                        .val();
                    if (categoryName !== null && categoryName.length != 0) {
                        $this.$extEvents.append(
                            '<div class="calendar-events" data-class="bg-' +
                                categoryColor +
                                '" style="position: relative;"><i class="fas fa-circle text-' +
                                categoryColor +
                                '"></i>' +
                                categoryName +
                                "</div>"
                        );
                        $this.enableDrag();
                    }
                });
            };

            // initier CalendarApp
            $.CalendarApp = new CalendarApp();
            $.CalendarApp.Constructor = CalendarApp;
            $.CalendarApp.init();
        },

        loadCollaborateurs() {
            get("/collaborateurs")
                .then((res) => {
                    this.collaborateurs = res.data.collaborateurs;
                })
                .catch((err) => console.log("error"));
        },

        goToNext() {
            if (this.initialStep < this.steps) {
                if (
                    this.initialStep === 1 &&
                    this.form_mission.date_debut === "" &&
                    this.form_mission.date_fin === ""
                ) {
                    this.error =
                        "Veuillez entrer la date début et la date fin pour continuer !";
                    return;
                }
                this.error = null;
                this.initialStep++;
                if (this.initialStep === 2) {
                    setTimeout(() => {
                        this.initCalendar();
                    }, 100);
                }
            }
        },
        goToPrev() {
            if (this.initialStep <= this.steps && this.initialStep !== 1) {
                this.initialStep--;
                if (this.initialStep === 2) {
                    setTimeout(() => {
                        this.initCalendar();
                    }, 100);
                }
            }
        },

        submitData(event) {
            const formData = new FormData();
            formData.append("libelle", this.form_mission.libelle);
            formData.append("date_debut", this.form_mission.date_debut);
            formData.append("date_fin", this.form_mission.date_fin);
            formData.append("client_id", this.form_mission.client_id);
            formData.append("job_id", this.form_mission.job_id);
            formData.append("manager_id", this.form_mission.manager_id);
            formData.append(
                "collaborateur_id",
                this.form_mission.collaborateur_id
            );
            const url = event.target.getAttribute("action");
            post(url, formData)
                .then(({ data, status }) => {
                    this.isLoading = false;
                    if (data.error !== undefined) {
                        this.error = data.error;
                    }
                    if (data.result !== undefined) {
                        this.error = null;
                        this.result = data.result;
                        event.target.reset();
                        this.loadCollaborateurs();
                        setTimeout(() => {
                            $("#mission_modal").modal("hide");
                        }, 1000);
                    }
                })
                .catch((err) => {
                    this.isLoading = false;
                    this.error = err;
                });
        },
    },

    computed: {
        stepInfo() {
            if (this.initialStep === 1) {
                return "Informations de la mission";
            } else if (this.initialStep === 2) {
                return "Disponibilité collaborateur";
            } else {
                return "Informations du manager & clients(optionnel)";
            }
        },
    },
});
