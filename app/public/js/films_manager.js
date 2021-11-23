let FilmsManager = function() {

    this.init = function() {
        this.initComponents();
        this.initEvents();
    }

    this.initComponents = function() {
        let _this = this;
        $('#films_table').DataTable({
            "ordering": true,
            "bPaginate": true,
            "bFilter": true,
            "ajax": {
                "url": "/api/getFilms",
                "type": "POST"
            }
        });
    }

    this.initEvents = function() {
        let _this = this;
    }

}

let filmsManager = new FilmsManager();

$(function() {
    filmsManager.init();
});
