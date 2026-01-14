$(document).ready(function() {
    $('.tombolTambahDataInstruktur').on('click', function() {
        $('#judulModalLabel').html('Tambah Instruktur');
        $('#tombolData').html('Tambah Instruktur');
        $('#tombolData').removeClass('btn btn-warning').addClass('btn btn-primary');
        $('.modal-body form').attr('action', 'http://localhost/shidokan-web/admin/public/instruktur/tambah');

    });
    $('.tombolUbahDataInstruktur').on('click', function(e) {
        e.preventDefault(); // Tambahkan ini
        e.stopPropagation(); // Dan ini

        console.log("Tombol sudah di Klik!");

        const id = $(this).data('instruktur-id');
        console.log('Clicked ID: ', id);

        // Hentikan jika sudah ada modal terbuka
        if ($('#formModalInstruktur').hasClass('show')) {
            console.log('Modal sudah terbuka');
            return;
        }

        $('#judulModalLabel').html('Ubah Instruktur');
        $('#tombolData').html('Ubah Instruktur');
        $('#tombolData').removeClass('btn btn-primary').addClass('btn btn-warning');
        $('.modal-body form').attr('action', 'http://localhost/shidokan-web/admin/public/instruktur/ubah');

        // Bisa klik kanan > inspect > console, klik 'ubah' setiap row, akan menampilkan nomor row sesuai:
        const idInstruktur = $(this).data('instruktur-id'); // idInstruktur
        console.log('Clicked ID: ', idInstruktur);

        $.ajax({
            url: 'http://localhost/shidokan-web/admin/public/instruktur/getUbahInstruktur',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log('Data recieved from server: ', data);
                console.log('id: ', data.id); // ini id yang diatas, dari instruktur-id.
                console.log('idInstruktur: ', data.idInstruktur); // Menyesuaikan id #idInstruktur pada form Instruktur View Page
                console.log('namaDepan: ', data.namaDepan); // Menyesuaikan id #namaDepan pada form Instruktur View page
                console.log('namaBelakang: ', data.namaBelakang); // Menyesuaikan id #namaBelakang
                console.log('prestasi: ', data.prestasi); // Menyesuaikan id #prestasi
                console.log('emailAddress: ', data.emailAddress); // Menyesuaikan id #emailAddress
                console.log('noTelp: ', data.noTelp); // Menyesuaikan id #noTelp
                console.log('foto: ', data.foto); // Menyesuaikan id #foto
                console.log('pesanTambahan: ', data.pesanTambahan); // Menyesuaikan id #pesanTambahan
                console.log('idBranch_fkInstruktur', data.idBranch_fkInstruktur); // Menyesuaikan id #idBranch_fkInstruktur
                console.log('idStatus_fkInstruktur', data.idStatus_fkInstruktur); // Menyesuaikan id #idStatus_fkInstruktur

                // Set form values
                // panggil id dari masing2 form di index.php instruktur bagian Modal, ke sini
                $('#id').val(data.idInstruktur);
                $('#namaDepan').val(data.namaDepan);
                $('#namaBelakang').val(data.namaBelakang);
                $('#prestasi').val(data.prestasi);
                $('#emailAddress').val(data.emailAddress);
                $('#noTelp').val(data.noTelp);
                $('#foto').val(data.foto);
                $('#pesanTambahan').val(data.pesanTambahan);
                $('#idBranch_fkInstruktur').val(data.idBranch_fkInstruktur);
                $('#idStatus_fkInstruktur').val(data.idStatus_fkInstruktur);
            
                // Coba berbagai kemungkinan field ID
                if(data.id) {
                    $('#id').val(data.id);
                    console.log('Set ID from data.id: ', data.id);
                } else if(data.idInstruktur) {
                    $('#id').val(data.idInstruktur);
                    console.log('Set ID from data.idInstruktur: ', data.idInstruktur);
                } else {
                    console.log('No ID field found in data!');
                }

                // Verify form values (UPDATE: cek ID kosongan)
                console.log('Hidden ID values after set: ', $('#id').val());
                console.log("All form values:");
                console.log("ID: ", $('#id').val());
                console.log("Nama Depan: ", $('#namaDepan').val());
                console.log("Nama Belakang: ", $('#namaBelakang').val());
                console.log("Prestasi: ", $('#prestasi').val());
                console.log("Email: ", $('#emailAddress').val());
                console.log("No Telp: ", $('#noTelp').val());
                console.log("Foto: ", $('#foto').val());
                console.log("Pesan Tambahan: ", $('#pesanTambahan').val());
                // Final verify on the hidden ID value:
                console.log("");
                console.log("Final hidden ID value: ", $('#id').val());
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error:');
                console.log('Status: ', status);
                console.log('Error: ', error);
                console.log('Response: ', xhr.responseText);
            }
        });
    });
});