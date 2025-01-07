><style>
    .btnPrimary{
        background-color: #39a7ff;
        color: #fff;
    }

    .btnPrimary:hover{
        background-color: #267bbf;
        color: #fff;
    }

    .btnSuccess{
        background-color: #28a745;
        color: #fff;
    }

    .btnSuccess:hover{
        background-color: #218e3a;
        color: #fff;
    }

    .form-control{
        border: 1px solid #686D76 !important;
    }
</style>
<script>
    var table = $('#data').DataTable({
        scrollX: true,
    });

    async function Data() {

        table.clear().draw();

        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/nilai/getData`,
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
        window.location.href = `${baseUrl}/admin/nilai/student/${id}`;
    };

    Data();

    async function fetchData() {
        try {

            const url = `${baseUrl}/admin/nilai/getDataSubjects`;

            // Lakukan request ke API untuk mendapatkan data angkatan
            const response = await $.ajax({
                type: "POST",
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                data: false
            });

            const res = JSON.parse(response);
            const data = res.body;

            let accordionContent = '';

            $('#accordion').html('');

            data.forEach((wave, waveIndex) => {

                // console.log(wave, 'cek');

                // let dateAbsensi = new Date(wave.date).toLocaleDateString('id-ID', {
                //     year: 'numeric',
                //     month: 'long',
                //     day: 'numeric'
                // });

                const isFirst = waveIndex === 0 ? 'show' : '';

                accordionContent += `
                        <div class="card" style="margin-bottom: 1rem;">
                            <div class="card-header" id="heading${waveIndex}" style="display: flex; justify-content:space-between; align-items: center; height: 3rem;">
                                <div>
                                    <h5 style="font-weight: 600;">${wave.name}</h5>
                                </div>
                                <div style="display: flex; gap: 0.5rem;">
                                    <button style="font-size: 1.5rem;" class="btn custom-btn-accordion" data-toggle="collapse" data-target="#collapse${waveIndex}" aria-expanded="true" aria-controls="collapse${waveIndex}">
                                        <i class="ri-arrow-down-s-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapse${waveIndex}" class="collapse" aria-labelledby="heading${waveIndex}" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="data${waveIndex}" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 2%;">No</th>
                                                    <th style="width: 10% !important;">Nama Siswa</th>
                                                    <th style="text-align: center; vertical-align: middle;">UTS</th>
                                                    <th style="text-align: center; vertical-align: middle;">UAS</th>
                                                    <th style="text-align: center; vertical-align: middle;">Praktik</th>
                                                    <th style="text-align: center; vertical-align: middle;">Absen</th>
                                                    <th style="text-align: center; vertical-align: middle;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ${wave.students.map((student, i) => {
                                                    let no = i + 1;
                                                    var grade = student.StudentSubjectGrades || {};
                                                    
                                                    var absenValue = grade.a || "";
                                                    var praktekValue = grade.p || "";
                                                    var utsValue = grade.uts || "";
                                                    var uasValue = grade.uas || "";
                                                    var totalValue = grade.total || "";
                                                    
                                                    var buttonLabel = (absenValue || praktekValue || utsValue || uasValue || totalValue) ? 'Update' : 'Submit';
                                                    let buttonClass = (buttonLabel === 'Update') ? 'btnSuccess' : 'btnPrimary';

                                                return `
                                                    <tr>
                                                        <td>${no}</td>
                                                        <td>${student.fullname ? student.fullname : '-'}</td>
                                                        <td><input type="number" value="${utsValue}" class="form-control" style="color: #000;" min="0" id="uts_${no}" name="uts[]" max="100" oninput="this.value = Math.min(this.value, 100)"></td>
                                                        <td><input type="number" value="${uasValue}" class="form-control" style="color: #000; min="0" id="uas_${no}" name="uas[]" max="100" oninput="this.value = Math.min(this.value, 100)"></td>
                                                        <td><input type="number" value="${praktekValue}" class="form-control" style="color: #000; min="0" id="praktek_${no}" name="praktek[]" max="100" oninput="this.value = Math.min(this.value, 100)"></td>
                                                        <td><input type="number" value="${absenValue}" class="form-control" style="color: #000; min="0" id="absen_${no}" name="absen[]" max="100" oninput="this.value = Math.min(this.value, 100)"></td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            <Button onclick="CreateNilai(${no}, ${student.id}, ${wave.id})" class="btn ${buttonClass}">
                                                                ${buttonLabel} <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                                                            </Button>
                                                        </td>
                                                    </tr>
                                                `;
                                            }).join('')}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
            });

            $('#accordion').html(accordionContent);

            data.forEach((wave, waveIndex) => {
                // Cek jika DataTable sudah ada sebelumnya, destroy instance-nya
                if ($.fn.DataTable.isDataTable(`#data${waveIndex}`)) {
                    $(`#data${waveIndex}`).DataTable().destroy();
                }

                // Inisialisasi DataTable dengan pengaturan yang diinginkan
                $(`#data${waveIndex}`).DataTable({
                    // scrollX: true,
                    columns: [{
                            width: "2%"
                        }, // No
                        {
                            width: "20%"
                        }, // Nama Siswa
                        {
                            width: "10%"
                        }, // UTS
                        {
                            width: "10%"
                        }, // UAS
                        {
                            width: "10%"
                        }, // Praktik
                        {
                            width: "10%"
                        }, // Absen
                        {
                            width: "10%"
                        } // action
                    ],
                    autoWidth: false,
                });
            });

            $('.collapse').on('shown.bs.collapse', function() {
                const targetIcon = $(this).prev().find('i');
                targetIcon.removeClass('ri-arrow-down-s-line').addClass('ri-arrow-up-s-line'); // Ubah ikon ke atas
            });

            $('.collapse').on('hidden.bs.collapse', function() {
                const targetIcon = $(this).prev().find('i');
                targetIcon.removeClass('ri-arrow-up-s-line').addClass('ri-arrow-down-s-line'); // Ubah ikon ke bawah
            });

        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    fetchData();

    async function CreateNilai(rowNo, id, subjectId) {
        var data = new FormData();
        
        var studenId = id;
        var subjectId = subjectId;
        var absen = $(`#absen_${rowNo}`).val() || 0;
        var praktek = $(`#praktek_${rowNo}`).val() || 0;
        var uts = $(`#uts_${rowNo}`).val() || 0;
        var uas = $(`#uas_${rowNo}`).val() || 0;

        // console.log(rowNo, studenId, subjectId, absen, praktek, uts, uas, 'post');

        data.append('studenId', studenId);
        data.append('subjectId', subjectId);
        data.append('absen', absen);
        data.append('praktek', praktek);
        data.append('uts', uts);
        data.append('uas', uas);

        const submitButton = $(`#btn-submitNilai_${rowNo}`);
        const spinner = submitButton.find('.spinner-border');

        submitButton.prop('disabled', true);
        submitButton.text('Loading...');
        spinner.show();

        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/nilai/post`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });

            toastr.success('Update nilai success');
            setTimeout(function() {
                // fetchData();
                location.reload();
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');

            spinner.hide();
            submitButton.prop('disabled', false);
            submitButton.text('Submit');
        }
    }
</script>