<script>
    var table = $('#data').DataTable({
        // scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/mediaSosial/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var res = JSON.parse(response);
                var no = 1;
                console.log(response, 'aa');

                var dataRows = res.body.map(element => {
                    const maxLength = 30;

                    let displayLink = element.linkUrl && element.linkUrl.length > maxLength ?
                        element.linkUrl.substring(0, maxLength) + "..." :
                        element.linkUrl;

                    return [
                        no++,
                        element.name ? element.name : "-",
                        element.linkUrl ? `<a href="${element.linkUrl}" target="_blank">${displayLink}</a>` : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/mediaSosial/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Event"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a onclick="DetailMedia('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail"> <i class="ri-list-check-2 text-primary"></i></a> </label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeleteMedia(${element.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Event"> <i class="ri-delete-bin-line text-primary"></i></a></label>
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

    function DeleteMedia(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Media Sosial ini akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: `${baseUrl}/admin/mediaSosial/delete/${id}`,
                    success: function(response) {
                        console.log(response, 'aa');
                        Data();
                    },
                    error: function(err) {
                        // Handle error
                        console.error('Error:', err);
                    }
                });
            }
        });
    }

    Data();

    async function CreateMedia() {
        var data = new FormData();

        var name = $("#name").val();
        var link = $("#link").val();
        var imageMedia = $('#imageMedia')[0].files[0];

        data.append('name', name);
        data.append('link', link);
        data.append('imageMedia', imageMedia);

        $("#createMedia").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/mediaSosial/post`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create media sosial success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/mediaSosial`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#createMedia").text('Submit');
        }
    }

    async function EditMedia() {
        var data = new FormData();

        var mediaId = $("#mediaId").val();
        var imageOld = $("#imageOld").val();
        var name = $("#name").val();
        var link = $("#link").val();
        var imageMedia = $('#imageMedia')[0].files[0];

        data.append('mediaId', mediaId);
        data.append('imageOld', imageOld);
        data.append('name', name);
        data.append('link', link);
        data.append('imageMedia', imageMedia);

        $("#editMedia").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/mediaSosial/update`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Edit media sosial success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/mediaSosial`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#editMedia").text('Submit');
        }
    }

    DetailMedia = async (mediaId) => {
        $("#image").removeAttr("src");
        $('#detailMedia').modal('show');
        await $.ajax({
            type: "GET",
            url: `${baseUrl}/admin/mediaSosial/detail/${mediaId}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                var body = JSON.parse(response);
                console.log(body, 'aa');

                $("#image").attr('src', body.data.imgUrl);
                $("#name").text(body.data.name);
                // $("#message").text(body.data.linkUrl);
                $("#link").attr('href', body.data.linkUrl).attr('target', '_blank').text(body.data.linkUrl);
            },
            error: function(err) {
                toastr.error('something went wrong');
            }
        });
    }
</script>