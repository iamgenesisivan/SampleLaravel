$('document').ready(function(){
 	$('#')
 	.formValidation({
	        framework: 'bootstrap',
	        // Only disabled elements are excluded
	        // The invisible elements belonging to inactive tabs must be validated
	        // excluded: [':disabled'],
	        excluded: [':hidden'],
	        icon: {
	            // valid: 'glyphicon glyphicon-ok',
	            // invalid: 'glyphicon glyphicon-remove',
	            // validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            laptopId: {
	              validators: {
	                notEmpty: {
	                  message: "The laptop id is required"
	                },
	                numeric: {
	                  message: 'This is not a valid number'
	                }
	              }
	            },
	            rfid: {
	              validators: {
	                notEmpty: {
	                  message: "The RFID is required"
	                },
	                numeric: {
	                  message: 'This is not a valid number'
	                }
	              }
	            },
	            brand: {
	              validators: {
	                notEmpty: {
	                  message: "The brand is required"
	                 }
	              }
	            },
	            model: {
	              validators: {
	                notEmpty: {
	                  message: "The model is required"
	                 }
	              }
	            },


	        }
	})
	// .on('success.form.fv', function(e, data) {
	// 	e.preventDefault();
 //            // $(e.target)  --> The field element
 //            // data.fv      --> The FormValidation instance
 //            // data.field   --> The field name
 //            // data.element --> The field element

 //             var $form = $(e.target),
 //                fv    = $form.data('formValidation');
 //            data.fv.disableSubmitButtons(false);
	 // $('#laptopButton').focus(function(e){
	 //        e.preventDefault();
	 //        swal({
	 //          title: "Are you sure?",
	 //            text: "You are trying to save the event.",
	 //            type: "warning",
	 //            showCancelButton: true,
	 //            confirmButtonColor: "#DD6B55",
	 //            confirmButtonText: "Yes",
	 //            closeOnConfirm: false,
	 //            closeOnCancel: false
	 //        },
	 //        function(isConfirm){
	 //          var transfer = $("#laptopForm");
	 //          var dataString = transfer.serialize();
	 //          if(isConfirm){
	 //            $.ajax({
	 //              method: 'POST',
	 //              url: "{{URL::Route('addLaptopDetails')}}",
	 //              headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
	 //              dataType: 'JSON',
	 //              processData : false,
	 //              data: dataString,
	 //              success: function(data){
	 //                if(data.success == "yes"){
	 //                  swal("Saved!", "Laptop has been saved!", "success");
	 //                  $("#laptopForm")[0].reset();
	 //                }else if(data.error == "Laptop ID Exists!"){
		// 				swal("Error!", "Laptop Already Exists", "error");
		// 			}else if(data.error == "RFID Exists!"){
		// 				swal("Error!", "RFID Already Exists", "error");
		// 			}
	 //              },error: function(data){
	 //                  swal("Error!", "Something went wrong", "error");
	 //                }
	 //            });
	 //          }
	 //          else {
	 //            swal("Cancelled", "Something went wrong!", "error");
	 //          }
	 //        });
	 //      })  
	
	
});