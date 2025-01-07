<script>
    var table = $('#data').DataTable({
        // scrollX: true,
        // order: [[1, 'desc']],
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/mapel/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var res = JSON.parse(response);
                var no = 1;

                var dataRows = res.body.map(element => {
                    return [
                        no++,
                        element.name ? element.name : "-",
                        // element.createdAt ? moment(element.createdAt).format('d MMMM Y HH:ss') : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/mapel/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Mapel"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeleteMapel(${element.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Mapel"> <i class="ri-delete-bin-line text-primary"></i></a></label>
                            </div>`
                    ]
                });

                table.rows.add(dataRows).draw();
            },
            error: function(err) {
                $(".loader-table").css({
                    "display": "none"
                });
                console.log(err);
            }
        });
    }
    // <label class="ml-2 mb-0 iq-bg-primary rounded"><a onclick="DetailMapel('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail"> <i class="ri-list-check-2 text-primary"></i></a> </label>&nbsp;

    // function DeleteMapel(id) {
    //     $.ajax({
    //         type: "DELETE",
    //         url: `${baseUrl}/admin/mapel/delete/${id}`,
    //         success: function(response) {
    //             // Handle respon sukses
    //             // Misalnya, refresh data setelah hapus
    //             Data();
    //         },
    //         error: function(err) {
    //             // Handle error
    //             console.error('Error:', err);
    //         }
    //     });
    // }

    function DeleteMapel(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Mata Pelajaran ini akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, setujui!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: `${baseUrl}/admin/mapel/delete/${id}`,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Mata Pelajaran dihapus.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        }).then(() => {
                            window.location.reload();
                            Data()
                        });
                    },
                    error: function(err) {
                        // Handle error
                        console.error('Error:', err);
                        Swal.fire({
                            icon: 'error',
                            title: 'Hapus mata pelajaran Gagal!',
                            text: 'Ada masalah saat hapus. Silakan coba lagi nanti.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        });
                    }
                });
            }
        });
    }

    Data();

    CreateMapel = async () => {
        var data = new FormData();

        var name = $("#name").val();
        var description = $("#description").val();

        if (!name) {
            return Swal.fire({
                title: 'Error!',
                text: 'Name harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        // if (!image) {
        //     return Swal.fire({
        //         title: 'Error!',
        //         text: 'Image harus diisi!',
        //         icon: 'error',
        //         confirmButtonText: 'OK'
        //     });
        // }

        // data.append("bannerId", uuidv4())
        data.append('name', name);
        data.append('description', description);

        $("#createMapel").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/mapel/post`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('create mata pelajaran success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/mapel`;
                }, 1500);
            },
            error: function(err) {
                console.log(err)
                toastr.error('something went wrong');
                $("#createMapel").text('Submit');
            }
        });
    }

    UpdateMapel = async () => {
        var data = new FormData();
        var mapelId = $("#mapelId").val();
        var name = $("#name").val();
        var description = $("#description").val();

        if (!name) {
            return Swal.fire({
                title: 'Error!',
                text: 'Name harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        data.append('mapelId', mapelId);
        data.append('name', name);
        data.append('description', description);

        $("#updateMapel").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/mapel/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('update mata pelajaran success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/mapel`;
                }, 1500);
            },
            error: function(err) {
                toastr.error('something went wrong');
                $("#updateMapel").text('Update');
            }
        });
    }

    DetailMapel = async (id) => {
        $("#imageBanner").removeAttr("src");
        $('#detailBanner').modal('show');
        await $.ajax({
            type: "GET",
            url: `${baseUrl}/admin/mapel/detail/${id}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                var data = JSON.parse(response);
                console.log(response, 'detail');

                $("#imageBanner").attr('src', data.data.bannerLink);
            },
            error: function(err) {
                toastr.error('something went wrong');
            }
        });
    }
</script>