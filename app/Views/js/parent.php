<script>
    var table = $('#data').DataTable({
        scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/alumni/getData`,
            cache: false,
            contentType: false,
            processData: false,
            data: false,
            success: function(response) {
                var data = JSON.parse(response);
                var no = 1;

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

    window.cardClicked = function(id) {
        window.location.href = `${baseUrl}/admin/parent/student/${id}`;
    };

    Data();
</script>