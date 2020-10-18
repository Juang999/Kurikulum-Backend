$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#judulModalLabel').html('Tambah Data Santri');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function() {
        $('#judulModalLabel').html('Ubah Data Santri');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvc/public/Data_Santri/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvc/public/Data_Santri/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#Nama').val(data.Nama);
                $('#Divisi').val(data.Divisi);
                $('#Asal').val(data.Asal);
                $('#id').val(data.id);
            }

        });
    });

});