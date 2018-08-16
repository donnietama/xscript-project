
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Import jQuery globally.
 */
import $ from 'jquery'

window.$ = $
window.jQuery = $

/**
 * Import TinyMCE.
 */

import tinymce from 'tinymce/tinymce'
import 'tinymce/themes/modern/theme'

// Plugins
import 'tinymce/plugins/paste/plugin'
import 'tinymce/plugins/link/plugin'
import 'tinymce/plugins/autoresize/plugin'
import 'tinymce/plugins/advlist/plugin'
import 'tinymce/plugins/autolink'
import 'tinymce/plugins/lists/plugin'
import 'tinymce/plugins/link/plugin'
import 'tinymce/plugins/image/plugin'
import 'tinymce/plugins/charmap/plugin'
import 'tinymce/plugins/print/plugin'
import 'tinymce/plugins/preview/plugin'
import 'tinymce/plugins/hr/plugin'
import 'tinymce/plugins/anchor/plugin'
import 'tinymce/plugins/pagebreak/plugin'
import 'tinymce/plugins/searchreplace/plugin'
import 'tinymce/plugins/wordcount/plugin'
import 'tinymce/plugins/visualblocks/plugin'
import 'tinymce/plugins/visualchars/plugin'
import 'tinymce/plugins/code/plugin'
import 'tinymce/plugins/fullscreen/plugin'
import 'tinymce/plugins/insertdatetime/plugin'
import 'tinymce/plugins/media/plugin'
import 'tinymce/plugins/nonbreaking/plugin'
import 'tinymce/plugins/save/plugin'
import 'tinymce/plugins/table/plugin'
import 'tinymce/plugins/contextmenu/plugin'
import 'tinymce/plugins/directionality/plugin'
import 'tinymce/plugins/emoticons/plugin'
import 'tinymce/plugins/template/plugin'
import 'tinymce/plugins/paste/plugin'
import 'tinymce/plugins/textcolor/plugin'
import 'tinymce/plugins/colorpicker/plugin'
import 'tinymce/plugins/textpattern/plugin'
import 'tinymce/plugins/codesample/plugin'



// Initialize
var editor_config = {
  path_absolute : "/",
  selector: "textarea#tinymce-editor",
  branding: false,
  plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code codesample fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern autoresize"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen codesample",
  relative_urls: false,
  file_browser_callback : function(field_name, url, type, win) {
    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name
    if (type == 'image') {
      cmsURL = cmsURL + "&type=Images"
    } else {
      cmsURL = cmsURL + "&type=Files"
    }

    tinyMCE.activeEditor.windowManager.open({
      file : cmsURL,
      title : 'Filemanager',
      width : x * 0.8,
      height : y * 0.8,
      resizable : "yes",
      close_previous : "no"
    })
  },
  image_dimensions: false,
  image_class_list: [
    {title: 'Responsive', value: 'img-fluid'}
  ]
}

tinymce.init(editor_config)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'))

const app = new Vue({
    el: '#app'
})
