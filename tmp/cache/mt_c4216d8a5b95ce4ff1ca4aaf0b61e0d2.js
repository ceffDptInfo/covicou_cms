// define cmsms_tiny object
var cmsms_tiny = {};

// this is the actual tinymce initialization
tinymce.init({
    selector: 'textarea.MicroTiny',
    language: 'fr_FR',
    cmsms_tiny: cmsms_tiny = {
        schema: 'html5',
        base_url : 'https://www.covicou.ch/',
        resize : true,
        statusbar : true,
        menubar : true,
        filepicker_title : 'Fichiers CMSMS',
        filepicker_url : 'https://www.covicou.ch/admin/moduleinterface.php?mact=MicroTiny,m1_,filepicker,0&_sk_=949a78499bf17e7b&showtemplate=false&field=',
        filebrowser_title : 'Sélectionner un fichier',
        linker_text : 'Lien vers une page CMSMS',
        linker_title : 'Créer un lien vers une page de contenu CMSMS',
        linker_image : 'https://www.covicou.ch/modules/MicroTiny/lib/images/cmsmslink.gif',
        linker_url : 'https://www.covicou.ch/admin/moduleinterface.php?mact=MicroTiny,m1_,linker,0&_sk_=949a78499bf17e7b&showtemplate=false',
        linker_autocomplete_url : 'https://www.covicou.ch/admin/moduleinterface.php?mact=MicroTiny,m1_,ajax_getpages,0&_sk_=949a78499bf17e7b&showtemplate=false',
        prompt_page : 'Entrer le titre de la page',
        prompt_page_info : 'Commencez par taper quelques caractères de la page alias, texte du menu ou titre désiré. Tous les noms correspondantes seront affichés dans une liste.',
        prompt_alias : 'Alias de page sélectionné',
        prompt_alias_info : 'Ce champ est en lecture seule',
        prompt_text : 'Texte à afficher',
        prompt_class : 'Attribut de classe',
        prompt_rel : 'Attribut rel (type de relation)',
        prompt_target : 'Cible',
        tab_general : 'Général',
        tab_advanced : 'Avancé',
        target_none : 'Aucun',
        target_new_window : 'Nouvelle fenêtre',
        loading_info : 'Chargement ...'
    },
    document_base_url: cmsms_tiny.base_url,
    relative_urls: true,
    mysamplesetting: 'foobar',
    menubar: cmsms_tiny.menubar,
    statusbar: cmsms_tiny.statusbar,
    resize: cmsms_tiny.resize,
    removed_menuitems: 'newdocument',
    browser_spellcheck: true,
    // smarty logic stuff
    image_advtab: true,
    toolbar: 'undo redo | cut copy paste | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify indent outdent | bullist numlist | anchor link unlink cmsms_linker | image cmsms_filebrowser',
    plugins: ['paste autolink link cmsms_linker charmap anchor searchreplace wordcount code fullscreen insertdatetime  media image cmsms_filepicker cmsms_filebrowser'],
    // callback functions
    urlconverter_callback: function(url, elm, onsave, name) {
        var self = this;
        var settings = self.settings;

        if (!settings.convert_urls || ( elm && elm.nodeName == 'LINK' ) || url.indexOf('file:') === 0 || url.length === 0) {
            return url;
        }

        // fix entities in cms_selflink urls.
        if (url.indexOf('cms_selflink') != -1) {
            decodeURI(url);
            url = url.replace('%20', ' ');
            return url;
        }
        // Convert to relative
        if (settings.relative_urls) {
            return self.documentBaseURI.toRelative(url);
        }
        // Convert to absolute
        url = self.documentBaseURI.toAbsolute(url, settings.remove_script_host);

        return url;
    },
    setup: function(editor) {
        editor.on('change', function(e) {
            $(document).trigger('cmsms_formchange');
        });
    },
    paste_as_text: true,
});
