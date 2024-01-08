let table = new DataTable('#tabel', {
    info: false,
    ordering: false,
    language: {
                search: "Cari :",
                searchPlaceholder: "Kata Kunci..." 
            }
});

function loadStrukContent(id) {
        $.ajax({
            url: 'get_struk_content.php?id=' + id, // Gantilah dengan skrip PHP Anda
            success: function (data) {
                $('#cetakModal .modal-body').html(data);
                printStruk(); // Panggil fungsi printStruk setelah konten diambil
            }
        });
    }

    function printStruk() {
        window.print();
    }

    function printStrukTable() {
        var printContents = document.getElementById('struk').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }