function hapusMenu() {

    Swal.fire({
        title: 'are you sure?',
            text: "yakin ingin hapus menu?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
      if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusRole() {

    Swal.fire({
        title: 'are you sure?',
            text: "yakin ingin hapus role?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
      if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusSubMenu() {

    Swal.fire({
        title: 'are you sure?',
            text: "yakin ingin hapus sub menu?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ya, hapus!'
    }).then((result) => {
      if (result.value) {
            document.location.href = url;
        }
    })
}