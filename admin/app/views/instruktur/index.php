    <div class="container">
        <h1>Panel Profil Blackbelt</h1>
        <button type="button" class="btn btn-primary tombolTambahDataUser" style="margin: 1.5% 0 1.5% 0;" data-bs-toggle="modal" data-bs-target="#formModalUser">
            Tambah Instruktur
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Status</th>
                    <th scope="col">Blackbelt Level</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Tikori Mahesa</td>
                    <td>Flores</td>
                    <td>Aktif</td>
                    <td>
                        <a href="#"><span class="badge text-bg-primary">Detail</span></a>
                        <a href="#"><span class="badge text-bg-warning">Ubah</span></a>
                        <a href="#"><span class="badge text-bg-danger">Delete</span></a>
                    </td>
                </tr> -->
                <?php $counter = 1; ?>
                <?php if(!empty($data['instrukturList'])) : ?>
                    <?php foreach($data['instrukturList'] as $listInstruktur): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($counter); ?></th>
                            <td><?= htmlspecialchars($listInstruktur['namaDepan']); ?>&nbsp;<?= htmlspecialchars($listInstruktur['namaBelakang']); ?></td>
                            <td><?= htmlspecialchars($listInstruktur['branch']); ?></td>
                            <td><?= htmlspecialchars($listInstruktur['status']); ?></td>
                            <td><?= htmlspecialchars($listInstruktur['levelDan']) ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/instruktur/detail/<?= $listInstruktur['idInstruktur']; ?>"><span class="badge text-bg-primary">Detail</span></a>
                            </td>
                        </tr>
                        <?php $counter++ ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <div class="alert alert-warning">Tidak ada data instruktur</div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>