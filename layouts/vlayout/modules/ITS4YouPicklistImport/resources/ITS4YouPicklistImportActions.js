jQuery.Class("ITS4YouPicklistImport_AddButton_Js",{
    getInstance : function(){
        var thisInstance = this;

        var moduleName = app.getModuleName();
        var viewName = app.getViewName();

        if (moduleName == "Picklist" && viewName == "Index") {

            thisInstance.addImportButton();

            thisInstance.regisetChangePickListModules();

            jQuery('#pickListModules').change(function(){

                setTimeout( function() {

                    thisInstance.regisetChangePickListModules();
                    thisInstance.addImportButton();
                }, 1000 );
            });
        }
    },
    regisetChangePickListModules : function() {
        var thisInstance = this;
        jQuery('#modulePickList').on('change',function(e){
            setTimeout( function() {
                thisInstance.addImportButton();
            }, 1000 );
        });
    },
    getImportButton : function() {
          var ImportButton = jQuery('<button class="btn span10 marginLeftZero btn-info" id="importPicklistValues">' + app.vtranslate("Import") + '</button>');
          ImportButton.on('click',function(){
              var params = {
                  module : "ITS4YouPicklistImport",
                  parent : app.getParentModuleName(),
                  source_module : jQuery('#pickListModules').val(),
                  view : 'IndexAjax',
                  mode : 'showImportValuesToRoleView',
                  pickListFieldId : jQuery('#modulePickList').val()
              }
              AppConnector.request(params).then(function(data) {
                  app.showModalWindow(data);
              });
          });

          return ImportButton;
    },
    addImportButton : function() {
        var thisInstance = this;

        var nElement = jQuery('#allValuesLayout');

        var addOnElementExist = nElement.find('#addItem');

        if (addOnElementExist.length > 0) {
            addOnElementExist2 = nElement.find("#importPicklistValues");
            if (addOnElementExist2.length == 0) {
                var ImportButton = thisInstance.getImportButton();
                //addOnElementExist.closest('.row-fluid').append('<br><br>');
                addOnElementExist.closest('.row-fluid').append(ImportButton);
            }
        } else {
            setTimeout( function() {
                thisInstance.addImportButton();
            }, 1000 );
        }
    }
},{
});

jQuery(document).ready(function() {
    ITS4YouPicklistImport_AddButton_Js.getInstance();
})
