/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    var duong_dan = 'http://localhost/learn_lavarel/laravel1.1/public/js/';
    config.filebrowserBrowseUrl = duong_dan + 'ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = duong_dan + 'ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = duong_dan + 'ckfinder/ckfinder.html?type=Flash';
    config.filebrowserUploadUrl = duong_dan + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = duong_dan + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = duong_dan + '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    config.skin = 'office2013';
    config.height='400';
    config.extraPlugins = 'video';

};
