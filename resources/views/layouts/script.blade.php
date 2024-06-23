<script>
    window.addEventListener('show-delete-confirmation', event=>{
      Swal.fire({
        title: 'Kamu Yakin ?',
        text: "Tindakan ini akan menghapus data secara permanen",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#228B22',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Hapus',
      }).then((result) => {
        if (result.isConfirmed) {
          Livewire.dispatch('deleteConfirmed')
        }
      })
    });
    window.addEventListener('success', event => {
      Swal.fire({
          title: "Sukses!",
          text: event.detail[0].message,
          icon: "success"
      });
    });
    window.addEventListener('error', event => {
      Swal.fire({
          title: "Gagal!",
          text: event.detail.message,
          icon: "error"
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      window.addEventListener('updated', event => {
          Swal.fire({
              title: 'Sukses!',
              text: event.detail.message,
              icon: 'success',
              confirmButtonColor: '#228B22',
              confirmButtonText: 'Kembali',
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = "{{ route('dashboard.index') }}";
              }
          });
      });
     });
</script>