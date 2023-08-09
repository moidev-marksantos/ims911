Vtiger_List_Js("HelpDesk_List_Js", {
    lastId: false,
	
}, {
    registerUpdateHelpDeskEvent: function () {
        var self = this;
        var params = {
            module: 'HelpDesk',
            action: 'LiveUpdateAjax',
            mode: 'getLastId'
        }
        
        app.request.post({data: params}).then(
            function(err,data) {
                if (err === null) {
                    HelpDesk_List_Js.lastId = data.id;
                    setInterval(self.runUpdate, 10000);
                }
            }
        )
    },

    runUpdate: function() {

        var params = {
            module: 'HelpDesk',
            action: 'LiveUpdateAjax',
            mode: 'getHelpDesk',
            record: HelpDesk_List_Js.lastId
        }

        app.request.post({data: params}).then(
            function(err,data) {
                data.forEach(function(entity) {
                    HelpDesk_List_Js.lastId = entity.id;
                });

                if(data.length > 0) {
                    var listInstance = new Vtiger_List_Js();                    
                    listInstance.loadListViewRecords();
                }
            }
        );
    },

    registerEvents : function() {

        this._super();
        this.registerUpdateHelpDeskEvent();

    }

});

