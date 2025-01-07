<script>
    var table = $('#data').DataTable({
        // scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/testimoni/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var res = JSON.parse(response);
                var no = 1;

                var filteredData = res.body.filter(element => element.status && element.status !== false);

                var dataRows = filteredData.map(element => {
                    const maxLength = 30;

                    let displayLink = element.message && element.message.length > maxLength ?
                        element.message.substring(0, maxLength) + "..." :
                        element.message;

                    let statusText;
                    if (element.Student === null) {
                        statusText = "Admin";
                    } else {
                        statusText = "User";
                    }

                    return [
                        no++,
                        element.name ? element.name : (element.Student ? element.Student.fullname : '-'),
                        // element.caption ? element.caption : "-",
                        element.message ? displayLink : "-",
                        statusText,
                        `<div class="send-panel"> 
                        ${statusText === "Admin" ?
                            `<label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/testimoni/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Event"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;`
                        : ''}
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a onclick="DetailBanner('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail"> <i class="ri-list-check-2 text-primary"></i></a> </label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeleteTestimoni(${element.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Event"> <i class="ri-delete-bin-line text-primary"></i></a></label>
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

    function DeleteTestimoni(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Testimoni ini akan dihapus!',
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
                    url: `${baseUrl}/admin/testimoni/delete/${id}`,
                    success: function(response) {
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

    async function CreateTestimoni() {
        var data = new FormData();

        var name = $("#name").val();
        var caption = $("#caption").val();
        var message = $("#message").val();
        var imageTestimoni = $('#imageTestimoni')[0].files[0];

        data.append('name', name);
        data.append('caption', caption);
        data.append('message', message);
        data.append('imageTestimoni', imageTestimoni);

        $("#createTestimoni").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/testimoni/post`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create testimoni success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/testimoni`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#createTestimoni").text('Submit');
        }
    }

    async function EditTestimoni() {
        var data = new FormData();

        var testimoniId = $("#testimoniId").val();
        var imageOld = $("#imageOld").val();
        var name = $("#name").val();
        var caption = $("#caption").val();
        var message = $("#message").val();
        var imageTestimoni = $('#imageTestimoni')[0].files[0];

        data.append('testimoniId', testimoniId);
        data.append('imageOld', imageOld);
        data.append('name', name);
        data.append('caption', caption);
        data.append('message', message);
        data.append('imageTestimoni', imageTestimoni);

        $("#editTestimoni").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/testimoni/update`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Edit testimoni success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/testimoni`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#editTestimoni").text('Submit');
        }
    }

    DetailBanner = async (testimoniId) => {
        $("#imageTestimoni").removeAttr("src");
        $('#detailTestimoni').modal('show');
        await $.ajax({
            type: "GET",
            url: `${baseUrl}/admin/testimoni/detail/${testimoniId}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                var body = JSON.parse(response);

                if(body.data.imageUrl !== null){
                    $("#imageTestimoni").attr('src', body.data.imageUrl);
                } else {
                    $("#imageTestimoni").attr('src', `${baseUrl}/public/assets/images/image-default.png`);
                }
                $("#name").text(body.data.name);
                // $("#caption").text(body.data.caption);
                $("#message").text(body.data.message);
            },
            error: function(err) {
                toastr.error('something went wrong');
            }
        });
    }

    function GetCountNotif() {

        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/testimoni/getStatusApproval`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {

                var res = JSON.parse(response);
                var count = 0;

                res.body.map(element => {

                    if (element.status == false) {
                        count = count + 1;
                    };
                });

                $(".count-notif").text(count);
            },
            error: function(err) {

                $(".count-notif").text(0);

            }
        });
    }

    // setTimeout(function() {
    GetCountNotif();
    // }, 3000);
</script>