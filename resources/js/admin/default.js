$(function(){

	$('.btn-delete').click(function (e) {
	    let btn = $(this);
	    e.preventDefault();
	    Swal.fire({
	        title: "Sure to delete?",
	        text: "Please confirm",
	        type: "warning",
	        showCancelButton: true,
  			confirmButtonText: 'Yes, delete',
  			cancelButtonText: 'No, cancel',
	    }).then(function (result) {
	    	if (result.value) {
	    		btn.closest("form.delete").submit();
	    	}
	    });
	});
})