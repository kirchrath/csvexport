Ext.application({
    name: 'csvexport',

    launch: function () {
        Ext.create('Ext.window.Window', {
            title: 'CSV-Export',
            autoShow: true,
            closable: false,
            width: 500,
            height: 250,
            modal: true,
            border: false,
            layout: 'fit',
            items: {
                xtype: 'form',
                bodyPadding: 5,
                layout: 'column',
                defaults: {
                    anchor: 0.5,
                    padding: 10,
                    value: new Date(),
                    allowBlank: false,
                    format: 'd.m.Y',
                    submitFormat: 'Y-m-d'
                },

                defaultType: 'datefield',
                items: [{
                    fieldLabel: 'From',
                    name: 'from'
                },{
                    fieldLabel: 'To',
                    name: 'to'
                }],

                buttons: [{
                    text: 'Reset',
                    handler: function() {
                        this.up('form').getForm().reset();
                    }
                }, {
                    text: 'Download CSV',
                    formBind: true, //only enabled once the form is valid
                    disabled: true,
                    handler: function() {
                        var form = this.up('form').getForm();
                        if (form.isValid()) {
                            var from = form.findField('from').getSubmitValue();
                            var to = form.findField('to').getSubmitValue();
                            window.location.href = Ext.String.format('/export/{0}/{1}', from, to);
                        }
                    }
                }]
            }
        }).show();
    }
});
