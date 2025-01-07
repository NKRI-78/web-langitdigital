<script>
    var table = $('#contribution').DataTable();

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/comunity/getData`,
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
                        element.name ? capitalizeFirstLetter(element.name) : "-",
                        element.short_name ? capitalizeFirstLetter(element.short_name) : "-",
                        element.description ? capitalizeFirstLetter(element.description) : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"> <a onclick="DeleteClub('${element.id}')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Club"> <i class="ri-delete-bin-line text-primary"></i></a></label>
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

    Data();

    function capitalizeFirstLetter(string) {
        const words = string.split(' ');
        const output = words.map(word => {
            const firstLetter = word.substring(0, 1).toUpperCase();
            const rest = word.substring(1);

            return `${firstLetter}${rest}`
        })

        return output.join(' ')
    }

    CreateClub = async () => {
        var data = new FormData();
        var name = $("#name").val();
        var shortName = $("#short_name").val();
        var description = $("#froalaContent").val();

        // data.append('newsId', uuidv4())
        data.append('name', name);
        data.append('shortName', shortName);
        data.append('description', description);

        $("#createNews").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/comunity/post`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('create comunity success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/comunity`;
                }, 1500);
            },
            error: function(err) {
                toastr.error('something went wrong');
                $("#createNews").text('Submit');
            }
        });
    }

    function DeleteClub(id) {
        console.log(id);
        $.ajax({
            type: "DELETE",
            url: `${baseUrl}/admin/comunity/delete/${id}`,
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
</script>