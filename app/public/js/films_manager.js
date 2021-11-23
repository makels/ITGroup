let FilmsManager = function() {

    this.init = function() {
        this.initComponents();
        this.initEvents();
    }

    this.initComponents = function() {
        let _this = this;
        let scrf = $("#scrf_token").val();
        $('#films_table').DataTable({
            "ordering": false,
            "bPaginate": true,
            "bFilter": true,
            "bProcessing": true,
            "bServerSide": true,
            "ajax": {
                "url": "/films/list",
                "type": "POST",
                "data": {
                    "_token": scrf
                }
            }
        });

        $('#genres_table').DataTable({
            "ordering": false,
            "bPaginate": true,
            "bFilter": true,
            "bProcessing": true,
            "bServerSide": true,
            "ajax": {
                "url": "/genres/list",
                "type": "POST",
                "data": {
                    "_token": scrf
                }
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
