(function() {

    if (typeof tinymce === 'undefined') {
        console.warn('TinyMCE non chargé, les boutons personnalisés ne seront pas ajoutés.');
        return; // On sort proprement sans planter
    }

    // button_shortcode()
    tinymce.PluginManager.add('add_mce_shortcode_button', function( editor, url ) {
        editor.addButton('add_mce_shortcode_button', {
            tooltip: 'Insérer/modifier un bouton',
            title: '',
            icon: 'mce-ico mce-i-wp-button',
            onclick: function() {
                var wptExtLinkGetSelection = tinyMCE.activeEditor.selection;
                var wptExtLinkSelectedText = wptExtLinkGetSelection.getContent( { format: "text" } );
                var wptExtLinkGetHref = wptExtLinkGetSelection.getNode().getAttribute('href');
                var wptExtLinkGetTarget = wptExtLinkGetSelection.getNode().getAttribute('target');
                var wptExtLinkGetDownload = wptExtLinkGetSelection.getNode().getAttribute('download');
                if( wptExtLinkGetTarget ){
                    var wptexl_TargetChecked = true;
                }else{
                    var wptexl_TargetChecked = false;
                }
                if( wptExtLinkGetDownload ){
                    var wptexl_DownloadChecked = true;
                }else{
                    var wptexl_DownloadChecked = false;
                }
                editor.windowManager.open( {
                    title: 'Insérer un bouton',
                    body: [
                        {
                            type: 'listbox',
                            name: 'wptexl_ButtonType',
                            label: 'Style',
                            disabled: false,
                            values: [
                                {"text":"Jaune","value":"primary"},
                                {"text":"Noir","value":"black"},
                                {"text":"Transparent","value":"outline-black"},
                            ]
                        },
                        {
                            type: 'textbox',
                            name: 'wptexl_LinkText',
                            label: 'Texte',
                            value: wptExtLinkSelectedText,
                            minWidth: 600
                        },
                        {
                            type: 'textbox',
                            name: 'wptexl_URL',
                            label: 'URL',
                            value: wptExtLinkGetHref,
                            minWidth: 600
                        },
                        {
                            type: 'checkbox',
                            name: 'wptexl_Target',
                            label: 'Ouvrir dans un nouvel onglet',
                            maxWidth: 30,
                            checked: wptexl_TargetChecked
                        },
                        {
                            type: 'checkbox',
                            name: 'wptexl_Download',
                            label: 'Proposer le téléchargement',
                            maxWidth: 30,
                            tooltip: 'Téléchargement direct si le lien est un fichier',
                            checked: wptexl_DownloadChecked
                        }
                    ],
                    onsubmit: function(e) {
                        if( e.data.wptexl_Target === true){
                            var wptexlAttrTarget = 'new_tab="true"';
                        }else{
                            var wptexlAttrTarget = '';
                        }
                        if( e.data.wptexl_Download === true){
                            var wptexlAttrDownload = 'download="true"';
                        }else{
                            var wptexlAttrDownload = '';
                        }
                        editor.insertContent('[button class="'+e.data.wptexl_ButtonType+'" text="'+e.data.wptexl_LinkText+'" href="'+e.data.wptexl_URL+'" '+wptexlAttrDownload+' '+wptexlAttrTarget+']');
                    }
                })
            }
        });
    });

    // video_shortcode()
    tinymce.PluginManager.add('add_mce_shortcode_video', function( editor, url ) {
        editor.addButton( 'add_mce_shortcode_video', {
            tooltip: 'Insérer une vidéo',
            title: '',
            icon: 'mce-ico mce-i-wp-embed',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Insérer une vidéo',
                    body: [
                        {
                            type: 'textbox',
                            name: 'wptexl_UrlVideo',
                            label: 'URL de la vidéo',
                            minWidth: 600
                        },{
                            type: 'textbox',
                            name: 'wptexl_Image',
                            label: 'URL de l\'image de couverture',
                            minWidth: 600
                        }
                    ],
                    onsubmit: function(e) {
                        editor.insertContent('[modal_video url="'+e.data.wptexl_UrlVideo+'" image="'+e.data.wptexl_Image+'"]');
                    }
                })
            }
        });
    });

    tinymce.PluginManager.add('add_mce_shortcode_list_check', function(editor, url) {
        editor.addButton('add_mce_shortcode_list_check', {
            tooltip: 'Liste check',
            icon: 'mce-ico mce-i-wp-checklist',
            onclick: function() {
                var selectedContent = editor.selection.getContent();
                if (selectedContent.indexOf('<ul') !== -1) {
                    var shortcode = '[list_check]' + selectedContent + '[/list_check]';
                    editor.insertContent(shortcode);
                } else {
                    alert('Veuillez sélectionner une liste non ordonnée avec un saut de ligne avant et après avant d\'utiliser ce bouton.');
                }
            }
        });
    });

})();

jQuery(document).ready(function($) {

    $('#acf-group_653a695dbbce2 > .acf-fields').addClass('loaded');

    var selectors = [
        {
            select: '.acf-field-6825ad39f2fd3churchill .acf-input > select',
            fields: '.acf-field-68249e193c057churchill .acf-table'
        },
    ];
    selectors.forEach(function(item) {
        $(item.select).change(function() {
            $(item.fields).addClass('columns');
            if ($(this).val() == 2) {
                $(item.fields).css('--col-width', '50%');
            } else if ($(this).val() == 3) {
                $(item.fields).css('--col-width', '33.33%');
            } else if ($(this).val() == 4) {
                $(item.fields).css('--col-width', '25%');
            } else {
                $(item.fields).css('--col-width', '50%');
            }
        }).change();
    });

});