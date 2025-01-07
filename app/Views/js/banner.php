<script>
    var table = $('#data').DataTable({
        // scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/banner/getData`,
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
                        // element.banner_link ? `<img src='${element.banner_link}'>` : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/banner/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Event"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a onclick="DetailBanner('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail"> <i class="ri-list-check-2 text-primary"></i></a> </label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeleteBanner(${element.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Event"> <i class="ri-delete-bin-line text-primary"></i></a></label>
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

    function DeleteBanner(id) {
        $.ajax({
            type: "DELETE",
            url: `${baseUrl}/admin/banner/delete/${id}`,
            success: function(response) {
                // Handle respon sukses
                // Misalnya, refresh data setelah hapus
                Data();
            },
            error: function(err) {
                // Handle error
                console.error('Error:', err);
            }
        });
    }

    Data();

    CreateBanner = async () => {
        var data = new FormData();

        var name = $("#name").val();
        var post_link = $("#post_link").val();
        var image = $('#imageBanner')[0].files[0];

        if (!name) {
            return Swal.fire({
                title: 'Error!',
                text: 'Name harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!image) {
            return Swal.fire({
                title: 'Error!',
                text: 'Image harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        // data.append("bannerId", uuidv4())
        data.append('name', name);
        data.append('image', image);
        data.append('post_link', post_link);

        $("#createBanner").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/banner/post`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('create banner success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/banner`;
                }, 1500);
            },
            error: function(err) {
                console.log(err)
                toastr.error('something went wrong');
                $("#createBanner").text('Submit');
            }
        });
    }

    UpdateBanner = async () => {
        var data = new FormData();
        var bannerId = $("#bannerId").val();
        var bannerOld = $("#bannerOldImage").val();
        var name = $("#name").val();
        var postLink = $("#post_link").val();
        var image = $('#imageBanner')[0].files[0];

        if (!name) {
            return Swal.fire({
                title: 'Error!',
                text: 'Name harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        data.append('bannerId', bannerId);
        data.append('bannerOld', bannerOld);
        data.append('name', name);
        data.append('postLink', postLink);
        data.append('image', image);

        $("#updateBanner").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/banner/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('update banner success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/banner`;
                }, 1500);
            },
            error: function(err) {
                toastr.error('something went wrong');
                $("#updateNews").text('Update');
            }
        });
    }

    DetailBanner = async (bannerId) => {
        $("#imageBanner").removeAttr("src");
        $('#detailBanner').modal('show');
        await $.ajax({
            type: "GET",
            url: `${baseUrl}/admin/banner/detail/${bannerId}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                var data = JSON.parse(response);
                console.log(response);

                $("#imageBanner").attr('src', data.data.bannerLink);
            },
            error: function(err) {
                toastr.error('something went wrong');
            }
        });
    }
</script>