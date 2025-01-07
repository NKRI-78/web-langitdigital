<script>
    CreateAbsensi = async () => {
        var data = new FormData();

        var dateAbsensi = $("#dateAbsensi").val();
        // var mapel = $("#mapel").val();

        data.append('dateAbsensi', dateAbsensi);
        // data.append('mapel', mapel);
        console.log(dateAbsensi, 'tanggal');
        $("#createAbsensi").text('Loading...');
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/absensi/post`,
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                toastr.success('create absensi success');
                setInterval(function() {
                    window.top.location.href = `${baseUrl}/admin/absensi`;
                }, 1500);
            },
            error: function(err) {
                console.log(err)
                toastr.error('something went wrong');
                $("#createAbsensi").text('Submit');
            }
        });
    }

    async function fetchData(dateStart = '', dateEnd = '') {
        try {
            // const url = `${baseUrl}/admin/absensi/getData`;

            const url = dateStart && dateEnd ?
                `${baseUrl}/admin/absensi/getData?dateStart=${dateStart}&dateEnd=${dateEnd}` :
                `${baseUrl}/admin/absensi/getData`;

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

                let dateAbsensi = new Date(wave.date).toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                const isFirst = waveIndex === 0 ? 'show' : '';

                accordionContent += `
                        <div class="card" style="margin-bottom: 1rem;">
                            <div class="card-header" id="heading${waveIndex}" style="display: flex; justify-content:space-between; align-items: center; height: 3rem;">
                                <div>
                                    <h5 style="font-weight: 600;">Tanggal <span>${dateAbsensi}</span></h5>
                                </div>
                                <div style="display: flex; gap: 0.5rem;">
                                    <a href='#' onclick="showQrCodeModal('${wave.token}', '${wave.date}')" class="btn mb-3 btn-primary" style="margin-top: 15px;"><i class="ri-qr-code-line"></i>QR code</a>
                                    <button style="font-size: 1.5rem;" class="btn custom-btn-accordion" data-toggle="collapse" data-target="#collapse${waveIndex}" aria-expanded="true" aria-controls="collapse${waveIndex}">
                                        <i class="ri-arrow-down-s-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapse${waveIndex}" class="collapse" aria-labelledby="heading${waveIndex}" data-parent="#accordion">
                                <div class="card-body">
                                <div style="text-align: end;">
                                    <a href='${baseUrl}/admin/absensi/studentNotAttendance/${wave.id}' onclick="dataStudent('${wave.id}')" class="btn mb-3 btn-warning" style="margin-top: 15px;"><i class="ri-user-unfollow-fill"></i>Siswa tidak absensi</a>
                                </div>
                                    <div class="table-responsive">
                                        <table id="data${waveIndex}" class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>NPM</th>
                                                    <th>Telepon</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ${wave.AttendanceStudents.map((student, i) => {
                                                    const genderAbbreviation = student.Student.gender === 'laki-laki' || student.Student.gender === 'LAKI-LAKI' ? 'L' :
                                                    student.Student.gender === 'perempuan' || student.Student.gender === 'PEREMPUAN' ? 'P' : student.Student.gender;

                                                    let phoneStudent = student.Student.phone ? student.Student.phone.replaceAll(',', '/').trim() : student.Student.phone;

                                                return `
                                                    <tr>
                                                        <td>${i + 1}</td>
                                                        <td>${student.Student ? ucwords(strtolower(student.Student.fullname)) : '-'}</td>
                                                        <td>${genderAbbreviation}</td>
                                                        <td>${student.Student.nisn}</td>
                                                        <td>${phoneStudent}</td>
                                                        <td>${moment(student.date).locale('id').format('D MMMM YYYY HH:mm')}</td>
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

    function ucwords(str) {
        return (str + '').replace(/^([a-z])|\s+([a-z])/g, function($1) {
            return $1.toUpperCase();
        });
    }

    function strtolower(str) {
        return (str + '').toLowerCase();
    }

    function showQrCodeModal(token, date) {
        $('#qrCodeContent').empty();

        var qrcode = new QRCode("qrCodeContent", {
            text: token,
            width: 200,
            height: 200,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });

        // Set tanggal di modal
        $('#date').html(moment(date).format('D MMMM YYYY'));

        // Tampilkan modal
        $('#qrCodeModal').modal('show');
    }

    function dataStudent(id) {
        console.log(id, 'id');
        $.ajax({
            type: "post",
            url: `${baseUrl}/admin/absensi/studentNotAttendance/${id}`,
            success: function(response) {
                console.log(response, 'res absen');
            },
            error: function(err) {
                // Handle error
                console.error('Error:', err);
            }
        });
    }

    function closeQrCodeModal() {
        $('#qrCodeModal').modal('hide');
    }

    document.querySelector("#download-detail").addEventListener("click", function() {
        this.style.display = 'none';

        html2canvas(document.querySelector("#qrCodeModal .modal-body")).then(function(canvas) {
            var link = document.createElement('a');
            link.href = canvas.toDataURL('image/png');
            link.download = 'Qrcode-Absensi.png';
            link.click();

            setTimeout(() => {
                document.querySelector("#download-detail").style.display = 'inline-block';
            }, 100);
        });
    });

    // SearchDate = async () => {
    //     var data = new FormData();

    //     var dateStart = $("#dateStart").val();
    //     var dateEnd = $("#dateEnd").val();

    //     data.append('dateStart', dateStart);
    //     data.append('dateEnd', dateEnd);

    //     console.log(dateStart, dateEnd, 'tanggal');

    //     await $.ajax({
    //         type: "POST",
    //         url: `${baseUrl}/admin/absensi/getData`,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         data: data,
    //         success: function(response) {
    //             // setInterval(function() {
    //             processData(response);
    //             // }, 1500);
    //         },
    //         error: function(err) {
    //             console.log(err)
    //             toastr.error('something went wrong');
    //         }
    //     });
    // }

    $('#searchButton').on('click', () => {
        const dateStart = $("#dateStart").val(); // Ambil nilai dari input tanggal mulai
        const dateEnd = $("#dateEnd").val(); // Ambil nilai dari input tanggal akhir
        fetchData(dateStart, dateEnd); // Panggil fetchData dengan parameter
    });
</script>