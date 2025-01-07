<script>
    var table = $('#data').DataTable({
        // scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/caption/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var res = JSON.parse(response);
                var no = 1;

                console.log(res, 'test');

                var dataRows = res.body.filter(element => element.RoleId && element.RoleId !== 1).map(element => {

                    let statusText;
                    switch (element.Role.name) {
                        case "Alumni":
                            statusText = "Alumni";
                            break;
                        case "Parent":
                            statusText = "Orang Tua";
                            break;
                        case "Student":
                            statusText = "Siswa";
                            break;
                        default:
                            statusText = "Role tidak diketahui";
                    }
                    return [
                        no++,
                        element.Role ? statusText : "-",
                        element.messageHome ? element.messageHome : "-",
                        `<div class="send-panel"> 
                            <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/caption/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="Edit Caption" data-original-title="Edit Caption"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
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

    // function checkLength(input) {
    //     var maxLength = input.maxLength;
    //     var currentLength = input.value.length;
    //     document.getElementById("charCount").textContent = currentLength + "/" + maxLength + " characters";
    // }

    // Format text to capitalize the first letter of each word
    function formatText(input) {
        let words = input.value.split(' ');
        for (let i = 0; i < words.length; i++) {
            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
        }
        input.value = words.join(' ');
    }

    // Check the length of the input text
    function checkLength(input) {
        var maxLength = input.maxLength;
        var currentLength = input.value.length;
        document.getElementById("charCount").textContent = currentLength + "/" + maxLength + " characters";
    }

    // Update the word count in the input text
    // function updateWordCount(input) {
    //     let wordCount = input.value.trim().split(/\s+/).filter(Boolean).length;
    //     document.getElementById("wordCount").textContent = wordCount + " words";
    // }

    document.addEventListener('DOMContentLoaded', function() {
        let captionInput = document.getElementById('caption');
        if (captionInput) {
            checkLength(captionInput);
            updateWordCount(captionInput);
        }
    });


    UpdateCaption = async () => {
        var data = new FormData();

        var roleId = $("#roleId").val();
        var caption = $("#caption").val();

        data.append('roleId', roleId);
        data.append('caption', caption);

        $("#updateBanner").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/caption/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('update caption success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/caption`;
                }, 1500);
            },
            error: function(err) {
                toastr.error('something went wrong');
                $("#updateNews").text('Update');
            }
        });
    }
</script>