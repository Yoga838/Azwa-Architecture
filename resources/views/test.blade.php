<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1>Portofolio Management</h1>

    <button class="btn btn-primary" data-toggle="modal" data-target="#portofolioModal" onclick="resetForm()">Tambah Portofolio</button>

    <hr>

    <h2>Daftar Portofolio</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Type</th>
                <th>Date</th>
                <th>Category</th>
                <th>Luas</th>
                <th>Kontraktor</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="portofolioList"></tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="portofolioModal" tabindex="-1" role="dialog" aria-labelledby="portofolioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="portofolioModalLabel">Tambah Portofolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="portofolioForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="portofolioId" name="id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" required>
                    </div>
                    <div class="form-group">
                        <label for="luas">Luas</label>
                        <input type="number" class="form-control" id="luas" name="luas" required>
                    </div>
                    <div class="form-group">
                        <label for="kontraktor">Kontraktor</label>
                        <input type="text" class="form-control" id="kontraktor" name="kontraktor" required>
                    </div>
 <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto[]" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('portofolioForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const id = document.getElementById('portofolioId').value;

        if (id) {
            // Update existing portofolio
            axios.put(`/api/edit-porto/${id}`, formData)
                .then(response => {
                    alert(response.data.success);
                    $('#portofolioModal').modal('hide');
                    fetchPortofolio();
                })
                .catch(error => {
                    console.error(error);
                    alert('Terjadi kesalahan saat mengupdate portofolio.');
                });
        } else {
            // Create new portofolio
            axios.post('/api/upload-porto', formData)
                .then(response => {
                    alert(response.data.success);
                    $('#portofolioModal').modal('hide');
                    fetchPortofolio();
                })
                .catch(error => {
                    console.error(error);
                    alert('Terjadi kesalahan saat menyimpan portofolio.');
                });
        }
    });

    function fetchPortofolio() {
        axios.get('/api/get-porto')
            .then(response => {
                const portofolioList = document.getElementById('portofolioList');
                portofolioList.innerHTML = '';
                response.data.data.forEach(portofolio => {
                    portofolioList.innerHTML += `
                        <tr>
                            <td>${portofolio.id}</td>
                            <td>${portofolio.name}</td>
                            <td>${portofolio.type}</td>
                            <td>${portofolio.date}</td>
                            <td>${portofolio.category}</td>
                            <td>${portofolio.luas}</td>
                            <td>${portofolio.kontraktor}</td>
                            <td>${portofolio.deskripsi}</td>
                            <td>
                                <button class="btn btn-warning" onclick="editPortofolio(${portofolio.id})">Edit</button>
                                <button class="btn btn-danger" onclick="deletePortofolio(${portofolio.id})">Hapus</button>
                            </td>
                        </tr>
                    `;
                });
            })
            .catch(error => {
                console.error(error);
                alert('Terjadi kesalahan saat mengambil data portofolio.');
            });
    }

    function editPortofolio(id) {
        axios.get(`/api/get-portoid/${id}`)
            .then(response => {
                const portofolio = response.data.data;
                document.getElementById('portofolioId').value = portofolio.id;
                document.getElementById('name').value = portofolio.name;
                document.getElementById('type').value = portofolio.type;
                document.getElementById('date').value = portofolio.date;
                document.getElementById('category').value = portofolio.category;
                document.getElementById('luas').value = portofolio.luas;
                document.getElementById('kontraktor').value = portofolio.kontraktor;
                document.getElementById('deskripsi').value = portofolio.deskripsi;
                $('#portofolioModal').modal('show');
            })
            .catch(error => {
                console.error(error);
                alert('Terjadi kesalahan saat mengambil data portofolio untuk diedit.');
            });
    }

    function deletePortofolio(id) {
        if (confirm('Apakah Anda yakin ingin menghapus portofolio ini?')) {
            axios.delete(`/api/delete-porto/${id}`)
                .then(response => {
                    alert(response.data.success);
                    fetchPortofolio();
                })
                .catch(error => {
                    console.error(error);
                    alert('Terjadi kesalahan saat menghapus portofolio.');
                });
        }
    }

    function resetForm() {
        document.getElementById('portofolioForm').reset();
        document.getElementById('portofolioId ').value = '';
    }

    // Fetch portofolio on page load
    fetchPortofolio();
</script>
</body>
</html> 