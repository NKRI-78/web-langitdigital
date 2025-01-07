<script>
    var table = $('#data').DataTable({
        scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/studentGeneration/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var data = JSON.parse(response);
                var no = 1;

                // var dataRows = res.body.map(element => {

                //     const startRegisterDate = element.startRegisterDate ?
                //         new Date(element.startRegisterDate).toLocaleDateString('id-ID', {
                //             year: 'numeric',
                //             month: 'long',
                //             day: 'numeric'
                //         }) :
                //         "-";

                //     const endRegisterDate = element.endRegisterDate ?
                //         new Date(element.endRegisterDate).toLocaleDateString('id-ID', {
                //             year: 'numeric',
                //             month: 'long',
                //             day: 'numeric'
                //         }) :
                //         "-";

                //     return [
                //         no++,
                //         element.generation ? capitalizeFirstLetter(element.generation) : "-",
                //         element.nameBem ? capitalizeFirstLetter(element.nameBem) : "-",
                //         element.startRegisterDate ? startRegisterDate : "-",
                //         element.endRegisterDate ? endRegisterDate : "-",
                //         element.years ? capitalizeFirstLetter(element.years) : "-",
                //         `<div class="send-panel"> 
                //             <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/studentGeneration/edit/${element.id}" data-toggle="tooltip" data-placement="top" title="Edit Angkatan" data-original-title="Edit Generation"><i class="ri-edit-line text-primary"></i></a></label>&nbsp;
                //             <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="${baseUrl}/admin/studentGeneration/student/${element.id}" data-toggle="tooltip" data-placement="top" title="Data Siswa" data-original-title="Data Siswa"><i class="ri-user-3-fill text-primary"></i></a></label>&nbsp;
                //         </div>`
                //     ]
                // });
                generateCards(data);

                // table.rows.add(dataRows).draw();
            },
            error: function(err) {
                $(".loader-table").css({
                    "display": "none"
                });
                console.log(err);
            }
        });
    }

    function generateCards(data) {
        let cardContainer = $('#card-container');
        cardContainer.empty();

        data.body.map(item => {
            let cardHtml = `
                <div class="col-md-3 mb-3">
                    <div class="card" style="cursor: pointer;" onclick="cardClicked(${item.id})">
                        <div class="card-body">
                            <h3 class="card-title">${item.generation}</h3>
                            <div style="display: flex; align-items: baseline; justify-content: space-between;">
                                <h6 class="card-subtitle mb-2 text-muted">${item.nameBem ? item.nameBem : '-'}</h6>
                                <p class="card-text">${item.years}</p>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            cardContainer.append(cardHtml);
        });
    }

    window.cardClicked = function (id) {
        window.location.href = `${baseUrl}/admin/studentGeneration/student/${id}`;
    };

    Data();

    

    async function UpdateGeneration() {
        var data = new FormData();

        var id = $("#id").val();
        var generation = $("#generation").val();
        var nameBem = $("#nameBem").val();
        var year = $("#year").val();
        var startRegisterDate = $("#startDate").val();
        var endRegisterDate = $("#endDate").val();

        data.append('id', id);
        data.append('generation', generation);
        data.append('nameBem', nameBem);
        data.append('year', year);
        data.append('startRegisterDate', startRegisterDate);
        data.append('endRegisterDate', endRegisterDate);

        $("#updateGeneration").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/studentGeneration/update`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create testimoni success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/studentGeneration`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#updateGeneration").text('Submit');
        }
    }

    function capitalizeFirstLetter(string) {
        const words = string.split(' ');
        const output = words.map(word => {
            const firstLetter = word.substring(0, 1).toUpperCase();
            const rest = word.substring(1);

            return `${firstLetter}${rest}`
        })

        return output.join(' ')
    }
</script>