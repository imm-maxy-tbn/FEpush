@extends('layouts.app-imm')
@section('title', 'Kelola Pengeluaran')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style-type: none;
}

.tabel {
    background-color: #F7F6FB;
    border-radius: 5px;
}

.btn-unggah {
    width: 136px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-tambah {
    width: 156px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-tambahdana {
    width: 246px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.form-control {
    width: 298px;
}

.biaya {
    font-size: 24px;
}

a {
    color: black;
}

a:hover {
    color: black;
    text-decoration: none;
}

input[type="date"] {
    width: 274px;
}

input[type="number"] {
    width: 274px;
}

.upload-container input[type="file"] {
    display: none;
}

.upload-container button {
    margin-right: 10px;
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

.upload-container .file-name {
    font-size: 14px;
    color: #333;
}

.btn-keluar {
    width: 183px;
    height: 35px;
    background-color: white;
    border: 2px solid #5940cb;
    border-radius: 7px;
}

.btn-masuk {
    width: 183px;
    height: 35px;
    background-color: #5940cb;
    color: white;
    border: none;
    border-radius: 7px;
}

.modal-content {
    width: 699px;
    height: 253px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-body {
    gap: 20px;
    margin: 0 51px;
    height: 100%;
    display: flex;
    align-items: start;
    justify-content: center;
    flex-direction: column;
}

.btnn {
    display: flex;
    align-content: center;
    justify-content: space-around;
    width: 100%;
}


/* Custom styles for the modal */

.modal-body {
    max-height: 700px;
    /* Adjust the height as needed */
    overflow-y: auto;
    ;
}

.list-group {
    display: flex;
    justify-content: center;
    width: 400px;
}

.list-group-item {
    display: flex;
    justify-content: center;
    font-size: 14px;
    /* Adjust the font size as needed */
}</style>

@endsection

@section('content')
<body>
    <div class="container" style="padding-top: 120px">
        <a href="homepage">
            <h4 class=" d-flex align-items-center"><strong style="font-size: 40px;"><</strong> Pengelolaan Dana</h4>
        </a>
        <div class="container my-4 d-flex justify-content-between align-items-center">
            <span class="biaya">Dana Hibah</span>
            <div class="form-inline">
                <input type="text" id="search-income" class="form-control search-input" placeholder="Cari detail biaya">
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table mt-3 text-center border">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pengirim</th>
                    <th>Bank Asal</th>
                    <th>Bank Tujuan</th>
                    <th>Jumlah (Rp)</th>
                </tr>
            </thead>
            <tbody id="income-list">
                @if ($companyIncomes->isEmpty())
                <tr>
                    <td colspan="5">Detail biaya tidak ditemukan.</td>
                </tr>
                @else
                @foreach ($companyIncomes as $income)
                <tr>
                    <td>{{ $income->date }}</td>
                    <td>{{ $income->pengirim }}</td>
                    <td>{{ $income->bank_asal }}</td>
                    <td>{{ $income->bank_tujuan }}</td>
                    <td>Rp{{ number_format($income->jumlah_hibah, 0, ',', '.') }}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

        <!-- "Detail biaya tidak ditemukan" message -->
        <div id="income-no-results" class="text-center py-3" style="display: none;">
            Detail biaya tidak ditemukan.
        </div>
    </div>

    <div class="container my-4 d-flex justify-content-between align-items-center">
        <span class="biaya">Rancangan pengeluaran Proyek</span>
        <div class="form-inline">
            <input type="text" id="search-input" class="form-control" placeholder="Cari Pengeluaran">
        </div>
    </div>

    <div class="container">
        <table class="table tabel mt-3 text-center border">
            <thead>
                <tr>    
                    <th>Nama Proyek</th>
                    <th>Rancangan Biaya Grant</th>
                    <th>Detail penggunaan biaya</th>
                </tr>
            </thead>
            <tbody id="project-table-body">
                @if ($projects->isEmpty())
                <tr>
                    <td colspan="3">Tidak ada proyek yang ditemukan.</td>
                </tr>
                @else
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td>
                    <td>Rp{{ number_format($project->dana->first()->nominal, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('homepageimm.detailbiaya', ['project_id' => $project->id]) }}" style="text-decoration: underline">cek disini</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

        <!-- "Tidak ada proyek yang ditemukan" message -->
        <div id="project-no-results" style="display: none;" class="text-center py-3">
            Tidak ada proyek yang ditemukan.
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle search for income details
            const searchIncomeInput = document.getElementById('search-income');
            const incomeList = document.getElementById('income-list');
            const incomeNoResults = document.getElementById('income-no-results');
            const incomeRows = incomeList.getElementsByTagName('tr');

            searchIncomeInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let visibleIncomeRows = 0;

                for (let row of incomeRows) {
                    const rowText = row.textContent.trim().toLowerCase();
                    if (rowText.includes(searchTerm)) {
                        row.style.display = '';
                        visibleIncomeRows++;
                    } else {
                        row.style.display = 'none';
                    }
                }

                // Show or hide "Detail biaya tidak ditemukan" message for income details
                if (visibleIncomeRows === 0) {
                    incomeList.style.display = 'none';
                    incomeNoResults.style.display = 'block';
                } else {
                    incomeList.style.display = '';
                    incomeNoResults.style.display = 'none';
                }
            });

            // Function to handle search for project names
            const searchProjectInput = document.getElementById('search-input');
            const projectTableBody = document.getElementById('project-table-body');
            const projectNoResults = document.getElementById('project-no-results');
            const projectRows = projectTableBody.getElementsByTagName('tr');

            searchProjectInput.addEventListener('input', function() {
                const searchProjectTerm = this.value.toLowerCase();
                let visibleProjectRows = 0;

                for (let row of projectRows) {
                    const projectName = row.cells[0].textContent.toLowerCase();
                    if (projectName.includes(searchProjectTerm)) {
                        row.style.display = '';
                        visibleProjectRows++;
                    } else {
                        row.style.display = 'none';
                    }
                }

                // Show or hide "Tidak ada proyek yang ditemukan" message for project names
                if (visibleProjectRows === 0) {
                    projectNoResults.style.display = 'block';
                } else {
                    projectNoResults.style.display = 'none';
                }
            });
        });
    </script>
</body>
@endsection
