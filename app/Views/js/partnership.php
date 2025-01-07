<script>
    var table = $('#data').DataTable({
        scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/partnership/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var res = JSON.parse(response);
                var no = 1;

                var dataRows = res.body.map(element => {
                    const maxLength = 30;

                    let displayLink = element.description && element.description.length > maxLength ?
                        element.description.substring(0, maxLength) + "..." :
                        element.description;

                    return [
                        no++,
                        element.title ? capitalizeFirstLetter(element.title) : "-",
                        element.description ? `<a href="${element.description}" target="_blank">${displayLink}</a>` : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/partnership/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Partnership"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a onclick="DetailPartner('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail"> <i class="ri-list-check-2 text-primary"></i></a> </label>&nbsp;
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeletePartner(${element.id})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Event"> <i class="ri-delete-bin-line text-primary"></i></a></label>
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

    Data()

    function capitalizeFirstLetter(string) {
        const words = string.split(' ');
        const output = words.map(word => {
            const firstLetter = word.substring(0, 1).toUpperCase();
            const rest = word.substring(1);

            return `${firstLetter}${rest}`
        })

        return output.join(' ')
    }

    function DeletePartner(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Partnership ini akan dihapus!',
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
                    url: `${baseUrl}/admin/partnership/delete/${id}`,
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

    async function CreatePartnership() {
        var data = new FormData();

        var name = $("#name").val();
        var link = $("#link").val();
        var imagePartnership = $('#imagePartnership')[0].files[0];

        data.append('name', name);
        data.append('link', link);
        data.append('imagePartnership', imagePartnership);

        $("#createPartner").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/partnership/post`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create testimoni success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/partnership`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#createPartner").text('Submit');
        }
    }

    async function EditPartnership() {
        var data = new FormData();

        var name = $("#name").val();
        var link = $("#link").val();
        var imagePartnership = $('#imagePartnership')[0].files[0];
        var partnerId = $("#partnerId").val();
        var imageOld = $("#imageOld").val();

        data.append('name', name);
        data.append('link', link);
        data.append('imagePartnership', imagePartnership);
        data.append('partnerId', partnerId);
        data.append('imageOld', imageOld);

        $("#editPartner").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/partnership/update`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Edit testimoni success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/partnership`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#editPartner").text('Submit');
        }
    }

    DetailPartner = async (partnerId) => {
        $("#imageTestimoni").removeAttr("src");
        $('#detailPartner').modal('show');
        await $.ajax({
            type: "GET",
            url: `${baseUrl}/admin/partnership/detail/${partnerId}`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                var body = JSON.parse(response);
                console.log(body, 'm');

                $("#imageTestimoni").attr('src', body.data.fileUrl);
                $("#name").text(capitalizeFirstLetter(body.data.title));
                $("#description").text(capitalizeFirstLetter(body.data.description));
            },
            error: function(err) {
                toastr.error('something went wrong');
            }
        });
    }
</script>