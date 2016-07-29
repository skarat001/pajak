var waitingDialog = waitingDialog || (function ($) {
	'use strict';

	// Creating modal dialog's DOM
	var $dialog = $(
		'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
		'<div class="modal-dialog modal-m">' +
		'<div class="modal-content">' +
		'<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
		'<div class="modal-body">' +
		'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
		'</div>' +
		'</div></div></div>');

	return {
		/**
		 * Opens our dialog
		 * @param message Custom message
		 * @param options Custom options:
		 * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
		 * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
		 */
		 show: function (message, options) {
			// Assigning defaults
			if (typeof options === 'undefined') {
				options = {};
			}
			if (typeof message === 'undefined') {
				message = 'Loading';
			}
			var settings = $.extend({
				dialogSize: 'm',
				progressType: '',
				onHide: null // This callback runs after the dialog was hidden
			}, options);

			// Configuring dialog
			$dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
			$dialog.find('.progress-bar').attr('class', 'progress-bar');
			if (settings.progressType) {
				$dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
			}
			$dialog.find('h3').text(message);
			// Adding callbacks
			if (typeof settings.onHide === 'function') {
				$dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
					settings.onHide.call($dialog);
				});
			}
			// Opening dialog
			$dialog.modal();
		},
		/**
		 * Closes dialog
		 */
		 hide: function () {
		 	$dialog.modal('hide');
		 }
		};

	})(jQuery);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

	Dropzone.options.uploadPhoto = {
  paramName: "foto", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  maxFiles:1,
  acceptedFiles: "image/jpeg,image/png,image/gif",
  init: function() {
  	this.on('complete', function () {
  		location.reload();
  	});
  }

};
Dropzone.options.uploadDocument = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  addRemoveLinks: true,
    maxFiles:12,
  init: function() {
  	this.on("success", function (file,rep) {

  		file.id=rep;



  	});
  },
  removedfile: function(file) {
  	var id = file.id;    
  
  	$.ajax({
  		type: 'POST',
  		url: config.deletefile,
  		data: "id="+id,
  		dataType: 'html'
  	});
  	var _ref;
  	return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;        
  }
};

Dropzone.options.pAnggota  = { // The camelized version of the ID of the form element
 paramName: "file",
  // The configuration we've talked about above
  //autoProcessQueue: false,
  url:routes.documents,
  uploadMultiple: false,
 maxFiles:12,
  clickable:'#filePreview',
previewsContainer: '#filePreview',
  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;

    // First change the button to actually tell Dropzone to process the queue.
    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      // Make sure that the form isn't actually being sent.
     
    });

    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
    // of the sending event because uploadMultiple is set to true.
    this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
    this.on("successmultiple", function(files, response) {
      // Gets triggered when the files have successfully been sent.
      // Redirect user or notify of success.
    });
    this.on("errormultiple", function(files, response) {
      // Gets triggered when there was an error sending the files.
      // Maybe show form again, and notify user of error
    });
  }

}
