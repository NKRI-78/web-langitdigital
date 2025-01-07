<style>
    .form-control{
        color: #000 ;
        background: #fff ;
        border: 1px solid #000;
    }

    .btn-approve{
        background-color: #27b345;
        color: #fff;
    }

    .btn-approve:hover{
        background-color: #218838;
        color: #fff;
    }

    .btn-reject{
        background-color: #f14336;
        color: #fff;
    }

    .btn-reject:hover{
        background-color: #bd2130;
        color: #fff;
    }
</style>
<script>
    // var table = $('#data').DataTable({
    //     scrollX: true,
    // });

    async function fetchData(generationId = '') {
        try {
            const url = generationId 
            ? `${baseUrl}/admin/studentNew/getData?generationId=${generationId}`
            : `${baseUrl}/admin/studentNew/getData`;

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

            res.body.GenerationRegistrations.forEach((wave, waveIndex) => {
                if ($.fn.DataTable.isDataTable(`#data${waveIndex}`)) {
                    $(`#data${waveIndex}`).DataTable().destroy();
                }
            });

            res.body.GenerationRegistrations.forEach((wave, waveIndex) => {

                $(`#data${waveIndex}`).DataTable({
                    scrollX: true,
                });

                if ($.fn.DataTable.isDataTable(`#data${waveIndex}`)) {
                    $(`#data${waveIndex}`).DataTable().destroy();
                }

                $(`#data${waveIndex}`).DataTable({
                    scrollX: true,
                });

                let startRegister = new Date(wave.startRegisterDate).toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                
                let endRegister = new Date(wave.endRegisterDate).toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                let currentDate = new Date(); //mengecek tanggal sekarang
                let startRegisterDate = new Date(wave.startRegisterDate);
                let endRegisterDate = new Date(wave.endRegisterDate);
                let closeDate = new Date(wave.closeRegisterDate);

                console.log(data, 'date');
                
                // Cek apakah tanggal sekarang sudah melewati atau sama dengan startRegisterDate
                let isRegistrationOpen = currentDate >= startRegisterDate && currentDate <= endRegisterDate;
                // let isRegistrationOpen = currentDate = startRegisterDate && currentDate == endRegisterDate;
                let cekDate = currentDate <= endRegisterDate && currentDate <= closeDate;
                
                accordionContent += `
                        <div class="card" style="margin-bottom: 1rem;">
                            <div class="card-header" id="heading${waveIndex}" style="display: flex; justify-content:space-between;">
                                <div>
                                    <h4 style="font-weight: 600;">Angkatan <span>${data.generation}</span> <span>Tahun ${data.years}</span></h4>
                                    <h5 style="color: #989898;">Gelombang <span>${wave.name}</span>, Periode <span>${startRegister} - ${endRegister}</span></h5>
                                </div>
                                <div style="display: flex; gap: 0.5rem;">
                                    <div style="margin-top: 0.7rem">
                                        <select class="form-control" id="statusSelect${waveIndex}" onchange="saveStatus(this.value, ${waveIndex})">
                                            <option disabled selected>Pilih Status</option>
                                            <option value="">All</option>
                                            <option value="1">Sudah Bayar</option>
                                            <option value="0">Belum Bayar</option>
                                        </select>
                                    </div>
                                    ${wave.closeRegisterDate !== null
                                    ?
                                    `<button class="btn mb-3 btn-primary" style="margin-top: 15px;" disabled><i class="ri-add-line"></i>Siswa Baru</button>
                                    <button class="btn mb-3 btn-danger" style="margin-top: 15px;" disabled>Tutup</button>`
                                    : 
                                    // `<a href='${baseUrl}/admin/studentNew/createStudent' class="btn mb-3 btn-primary" style="margin-top: 15px;"><i class="ri-add-line"></i>Siswa Baru</a>
                                    // <a onClick="CloseGelombang()" class="btn mb-3 btn-danger" style="margin-top: 15px; color: #fff;">Tutup</a>`
                                    `<a href='${baseUrl}/admin/studentNew/createStudent' class="btn mb-3 btn-primary ${!isRegistrationOpen ? 'disabled' : ''}" style="margin-top: 15px;"><i class="ri-add-line"></i>Siswa Baru</a>
                                    <a onClick="CloseGelombang()" class="btn mb-3 btn-danger ${!isRegistrationOpen ? 'disabled' : ''}" style="margin-top: 15px; color: #fff;">Tutup</a>`
                                    }
                                        <button style="font-size: 1.5rem;" class="btn custom-btn-accordion" data-toggle="collapse" data-target="#collapse${waveIndex}" aria-expanded="true" aria-controls="collapse${waveIndex}">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </button>
                                </div>
                            </div>
                            <div id="collapse${waveIndex}" class="collapse ${waveIndex === 0 ? 'show' : ''}" aria-labelledby="heading${waveIndex}" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="data${waveIndex}" class="table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Telepon</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Nama Orang Tua</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ${wave.Students.map((student, i) => {
                                                let statusText;
                                                switch (student.status) {
                                                    case 0:
                                                        statusText = "Belum dibayar";
                                                        break;
                                                    case 1:
                                                        statusText = "Menunggu Setujui";
                                                        break;
                                                    case 2:
                                                        statusText = "Ditolak";
                                                        break;
                                                    case 3:
                                                        statusText = "Sudah jadi siswa";
                                                        break;
                                                    case 4:
                                                        statusText = "Sudah jadi alumni";
                                                        break;
                                                    case 5:
                                                        statusText = "Sudah jadi siswa";
                                                    break;
                                                    default:
                                                        statusText = "Status tidak diketahui"; // Untuk menangani status yang tidak terduga
                                                }

                                                return `
                                                    <tr>
                                                        <td>${i + 1}</td>
                                                        <td>${student.fullname ? student.fullname : '-'}</td>
                                                        <td>${student.phone}</td>
                                                        <td>${new Date(student.birthDate).toLocaleDateString('id-ID', {
                                                            year: 'numeric',
                                                            month: 'long',
                                                            day: 'numeric'
                                                        })}</td>
                                                        <td>${student.parentName ? student.parentName : '-'}</td>
                                                        <td>${statusText}</td>
                                                        <td>
                                                            ${student.status === 1 
                                                            // ?`<button onclick="ButtonApproval()" class="btn btn-success btn-sm">Setujui</button>
                                                            ?`<button onclick="ButtonApproval('${student.id}', 'approved')" class="btn btn-approve btn-sm">Setujui</button>
                                                            <button onclick="ButtonReject('${student.id}', 'rejected')" class="btn btn-reject btn-sm">Tolak</button>`
                                                            : student.status === 3 || student.status === 5 || student.status === 4
                                                                ? `<button class="btn btn-success btn-sm" disabled>Disetujui</button>`
                                                                : student.status === 2 ? `<button class="btn btn-danger btn-sm" disabled>Ditolak</button>` : ''}
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

            // $('.custom-btn-accordion').on('click', function () {
            //     const icon = $(this).find('i');
            //     const collapseTarget = $(this).data('target');

            //     $(collapseTarget).on('show.bs.collapse', function () {
            //         icon.removeClass('ri-arrow-down-s-line').addClass('ri-arrow-up-s-line');
            //     });

            //     $(collapseTarget).on('hide.bs.collapse', function () {
            //         icon.removeClass('ri-arrow-up-s-line').addClass('ri-arrow-down-s-line');
            //     });
            // });

            $('.collapse').on('shown.bs.collapse', function() {
                const targetIcon = $(this).prev().find('i');
                targetIcon.removeClass('ri-arrow-down-s-line').addClass('ri-arrow-up-s-line'); // Ubah ikon ke atas
            });

            $('.collapse').on('hidden.bs.collapse', function() {
                const targetIcon = $(this).prev().find('i');
                targetIcon.removeClass('ri-arrow-up-s-line').addClass('ri-arrow-down-s-line'); // Ubah ikon ke bawah
            });

            res.body.GenerationRegistrations.forEach((wave, waveIndex) => {
                
                const table = $(`#data${waveIndex}`).DataTable({
                    scrollX: true,
                });
                    
                const savedStatus = localStorage.getItem('selectedStatus' + waveIndex);

                if (savedStatus) {
                    // Set nilai select option sesuai dengan yang tersimpan
                    const statusSelect = document.getElementById('statusSelect' + waveIndex);
                    if (statusSelect) {
                        statusSelect.value = savedStatus;
                    }

                    // Filter tabel sesuai dengan status yang tersimpan
                    filterTableByStatus(savedStatus, waveIndex);
                }
            });

        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }

    function saveStatus(selectedStatus, waveIndex) {
        localStorage.setItem('selectedStatus' + waveIndex, selectedStatus);
        filterTableByStatus(selectedStatus, waveIndex);
    }

    function filterTableByStatus(selectedStatus, waveIndex) {

        const table = $(`#data${waveIndex}`).DataTable();

        //  Menggunakan DataTables API untuk menyaring data
        // table.rows().every(function() {
        //     const rowData = this.data();

        //     // Mengasumsikan kolom status adalah kolom ke-6
        //     const rowStatus = rowData[5]; // Indeks dimulai dari 0, jadi kolom ke-6 adalah 5

        //     const rowStatusValue = rowStatus.includes('Belum dibayar') ? '0' : '1';

        //     // Jika status kosong (All), tampilkan semua baris
        //     if (!selectedStatus || selectedStatus === '') {
        //         this.node().style.display = '';
        //     } 
        //     // Bandingkan status baris dengan status yang dipilih
        //     else if (rowStatusValue === selectedStatus) {
        //         this.node().style.display = '';
        //     } 
        //     else {
        //         this.node().style.display = 'none';
        //     }
        // });

        table.rows().every(function() {
            const rowData = this.data();

            // Mengasumsikan kolom status adalah kolom ke-6
            const rowStatus = rowData[5]; // Indeks dimulai dari 0, jadi kolom ke-6 adalah 5

            const rowStatusValue = rowStatus.includes('Belum dibayar') ? '0' : '1';
            
            // Jika status kosong (All) dipilih, tampilkan semua baris
            if (selectedStatus === null || selectedStatus === '') {
                this.node().style.display = ''; // Tampilkan baris
            } 
            // Bandingkan status baris dengan status yang dipilih
            else if (rowStatusValue === selectedStatus) {
                this.node().style.display = ''; // Tampilkan baris jika cocok
            } 
            else {
                this.node().style.display = 'none'; // Sembunyikan baris jika tidak cocok
            }
        });

        table.draw();
    }

    // Panggil fungsi fetchData ketika halaman selesai dimuat
    $(document).ready(() => {
        fetchData();

        $('#generationSelect').on('change', function () {
        const generationId = $(this).val();
        fetchData(generationId); // Panggil fetchData dengan generationId jika ada
    });
    });

    function capitalizeFirstLetter(string) {
        const words = string.split(' ');
        const output = words.map(word => {
            const firstLetter = word.substring(0, 1).toUpperCase();
            const rest = word.substring(1);

            return `${firstLetter}${rest}`
        })

        return output.join(' ')
    }

    // function ButtonApproval() {
    //     // Reload halaman tanpa melakukan apapun
    //     window.location.reload();
    // }

    function ButtonApproval(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Siswa ini akan disetujui!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, setujui!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: `${baseUrl}/admin/studentNew/approval/${id}`,
                    success: function(response) {
                        console.log(response, 'respon approval')
                        Swal.fire({
                            icon: 'success',
                            title: 'Approved!',
                            text: 'Siswa telah berhasil disetujui.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        }).then(() => {
                            window.location.reload();
                            Data();
                        });
                    },
                    error: function(err) {
                        // Handle error
                        console.error('Error:', err);
                        Swal.fire({
                            icon: 'error',
                            title: 'Approved Failed!',
                            text: 'Ada masalah saat menyetujui siswa tersebut. Silakan coba lagi nanti.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        });
                    }
                });
            }
        });
    }

    function ButtonReject(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Siswa ini akan ditolak!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, tolak!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: `${baseUrl}/admin/studentNew/reject/${id}`,
                    success: function(response) {
                        console.log(response, 'respon reject')
                        Swal.fire({
                            icon: 'success',
                            title: 'Reject!',
                            text: 'Siswa telah berhasil ditolak.',
                            timer: 3000,
                            showConfirmButton: true
                        }).then(() => {
                            Data();
                        });
                    },
                    error: function(err) {
                        // Handle error
                        console.error('Error:', err);
                        Swal.fire({
                            icon: 'error',
                            title: 'Reject Failed!',
                            text: 'Ada masalah saat menolak siswa tersebut. Silakan coba lagi nanti.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        });
                    }
                });
            }
        });
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

    $("#startRegisterDate").datepicker({
        dateFormat: "yy/mm/dd",
        startDate: new Date(),
        autoclose: true,
        orientation: "bottom auto"
    });

    $("#endRegisterDate").datepicker({
        dateFormat: "yy/mm/dd",
        startDate: new Date(),
        autoclose: true,
        orientation: "bottom auto"
    });

    $("#birthdayStudent").datepicker({
        dateFormat: "yy/mm/dd",
        orientation: "bottom auto"
    });

    const currentYear = new Date().getFullYear();
    $("#year").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true,
        endDate: currentYear.toString()
    });

    function capitalizeWords(str) {
        return str.replace(/\b\w/g, function(char) {
            return char.toUpperCase();
        });
    }

    document.getElementById('generation').addEventListener('input', function() {
        this.value = capitalizeWords(this.value);
    });

    document.getElementById('nameBem').addEventListener('input', function() {
        this.value = capitalizeWords(this.value);
    });

    async function CreateGeneration() {
        var data = new FormData();

        var generation = $("#generation").val();
        var nameBem = $("#nameBem").val();
        var year = $("#year").val();
        var startRegisterDate = $("#startRegisterDate").val();
        var endRegisterDate = $("#endRegisterDate").val();

        data.append('generation', generation);
        data.append('nameBem', nameBem);
        data.append('year', year);
        data.append('startRegisterDate', startRegisterDate);
        data.append('endRegisterDate', endRegisterDate);

        $("#createGeneration").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/studentNew/post`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create generation success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/studentNew`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#createGeneration").text('Submit');
        }
    }

    async function CreateGelombang() {
        var data = new FormData();

        var startRegisterDate = $("#startRegisterDate").val();
        var endRegisterDate = $("#endRegisterDate").val();

        if (!startRegisterDate) {
            return Swal.fire({
                title: 'Error!',
                text: 'Tanggal mulai registrasi harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!endRegisterDate) {
            return Swal.fire({
                title: 'Error!',
                text: 'Tanggal berakhir registrasi harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        data.append('startRegisterDate', startRegisterDate);
        data.append('endRegisterDate', endRegisterDate);

        $("#createGelombang").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/studentNew/postGelombang`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create gelombang success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/studentNew`;
            }, 1500);
        } catch (err) {
            toastr.error('Something went wrong');
            $("#createGeneration").text('Submit');
        }
    }

    // async function CloseGelombang() {
    //     var data = new FormData();

    //     $("#createGeneration").text('Loading...');
    //     try {
    //         let response = await $.ajax({
    //             type: "POST",
    //             url: `${baseUrl}/admin/studentNew/closeGelombang`,
    //             cache: false,
    //             contentType: false,
    //             processData: false,
    //             data: data
    //         });
    //         toastr.success('Create generation success');
    //         setInterval(function() {
    //             location.reload();
    //         }, 1500);
    //     } catch (err) {
    //         console.log(err);
    //         toastr.error('Something went wrong');
    //         $("#createGeneration").text('Submit');
    //     }
    // }

    function CloseGelombang() {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Gelombang ini akan ditutup!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, setujui!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: `${baseUrl}/admin/studentNew/closeGelombang`,
                    success: function(response) {
                        console.log(response, 'respon approval')
                        Swal.fire({
                            icon: 'success',
                            title: 'Approved!',
                            text: 'Gelombang Telah Ditutup.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        }).then(() => {
                            window.location.reload();
                            fetchData()
                        });
                    },
                    error: function(err) {
                        // Handle error
                        console.error('Error:', err);
                        Swal.fire({
                            icon: 'error',
                            title: 'Tutup Gelombang Gagal!',
                            text: 'Ada masalah saat tutup gelombang. Silakan coba lagi nanti.',
                            timer: 3000,
                            showConfirmButton: "Ok"
                        });
                    }
                });
            }
        });
    }

    async function CreateStudent() {
        var data = new FormData();

        var nameStudent = $("#nameStudent").val();
        var birthdayStudent = $("#birthdayStudent").val();
        var gender = $("#gender").val();
        var originalSchool = $("#originalSchool").val();
        var phoneStudent = $("#phoneStudent").val();
        var nameParent = $("#nameParent").val();
        var jobParent = $("#jobParent").val();
        var studi = $("#studi").val();
        var address = $("#address").val();

        if (!nameStudent) {
            return Swal.fire({
                title: 'Error!',
                text: 'Nama siswa harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!birthdayStudent) {
            return Swal.fire({
                title: 'Error!',
                text: 'Tanggal lahir harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!gender) {
            return Swal.fire({
                title: 'Error!',
                text: 'Jenis kelamin harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!originalSchool) {
            return Swal.fire({
                title: 'Error!',
                text: 'Asal sekolah harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!phoneStudent) {
            return Swal.fire({
                title: 'Error!',
                text: 'Telepon siswa harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!nameParent) {
            return Swal.fire({
                title: 'Error!',
                text: 'Orang tua harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!jobParent) {
            return Swal.fire({
                title: 'Error!',
                text: 'Pekerjaan orang tua harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!studi) {
            return Swal.fire({
                title: 'Error!',
                text: 'Program Studi harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        if (!address) {
            return Swal.fire({
                title: 'Error!',
                text: 'Alamat harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }

        data.append('nameStudent', nameStudent);
        data.append('birthdayStudent', birthdayStudent);
        data.append('gender', gender);
        data.append('originalSchool', originalSchool);
        data.append('phoneStudent', phoneStudent);
        data.append('nameParent', nameParent);
        data.append('jobParent', jobParent);
        data.append('studi', studi);
        data.append('address', address);

        $("#createStudent").text('Loading...');
        try {
            let response = await $.ajax({
                type: "POST",
                url: `${baseUrl}/admin/studentNew/postStudentNew`,
                cache: false,
                contentType: false,
                processData: false,
                data: data
            });
            toastr.success('Create student success');
            setInterval(function() {
                window.top.location.href = `${baseUrl}/admin/studentNew`;
            }, 1500);
        } catch (err) {
            console.log(err);
            toastr.error('Something went wrong');
            $("#createStudent").text('Submit');
        }
    }
</script>