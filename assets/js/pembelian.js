var id = 0 // Untuk menampung ID yang kaan di ubah / hapus

$(document).ready(function () {

	$('#btn-simpan').click(function () { // Ketika tombol simpan di klik

		$.ajax({
			url: base_url + 'pembelian/addMaterial', // URL tujuan
			type: 'POST', // Tentukan type nya POST atau GET
			data: $("#createModal form").serialize(), // Ambil semua data yang ada didalam tag form
			dataType: 'json',
			beforeSend: function (e) {
				if (e && e.overrideMimeType) {
					e.overrideMimeType('application/jsoncharset=UTF-8')
				}
			},
			success: function (response) { // Ketika proses pengiriman berhasil

				if (response.status == 'success') { // Jika Statusnya = sukses
					// Ganti isi dari div tampil dengan tampil yang diambil dari proses_simpan.php
					$('#tampil_tabel').html(response.html)

					/*
					 * Ambil pesan suksesnya dan set ke div pesan-sukses
					 * Lalu munculkan div pesan-sukes nya
					 * Setelah 10 detik, sembunyikan kembali pesan suksesnya
					 */
					const Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
					Toast.fire({
						type: 'success',
						title: response.pesan
					})

					$('#createModal').modal('hide') // Close / Tutup Modal Dialog
				} else { // Jika statusnya = gagal
					/*
					 * Ambil pesan errornya dan set ke div pesan-error
					 * Lalu munculkan div pesan-error nya
					 */
					$('#pesan-error').html(response.pesan).show()
				}
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
				console.log(xhr.responseText) // munculkan alert
			}
		})

		// console.log("klicked");

	})

	$('#createModal').on('hidden.bs.modal', function (e) { // Ketika Modal Dialog di Close / tertutup
		$('#createModal #jumlah, #createModal #Material').val('') // Clear inputan menjadi kosong
	})
})
