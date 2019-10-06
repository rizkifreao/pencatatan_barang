<?php defined('BASEPATH') or exit('No direct script access allowed');

if (! function_exists('success')) {
	function success($text) {
		$alert = "
		<script type='text/javascript'>
		 const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			})
			Toast.fire({
				type: 'success',
				title: '".$text."'
			})
		</script>
		";
		return $alert;
	}
}

if (! function_exists('error')) {
	function error($text) {
		$alert = "
		<script type='text/javascript'>
    		const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			})
			Toast.fire({
				type: 'error',
				title: '".$text."'
			})
    	</script>
		";

		return $alert;
	}
}
