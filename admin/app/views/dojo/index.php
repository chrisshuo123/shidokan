    <div class="container">
        <h1>Panel Dojo</h1>
        <button type="button" class="btn btn-primary tombolTambahDataUser" style="margin: 1.5% 0 1.5% 0;" data-bs-toggle="modal" data-bs-target="#formModalUser">
            Tambah Dojo
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dojo</th>
                    <th scope="col">Alamat Dojo</th>
                    <th scope="col">No. Telp Dojo</th>
                    <!-- <th scope="col">Pengelola</th> -->
                    <th scope="col">Foto Dojo</th>
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
                <?php if(!empty($data['dojoList'])) : ?>
                    <?php foreach($data['dojoList'] as $listInstruktur): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($counter); ?></th>
                            <td><?= htmlspecialchars($listInstruktur['namaDojo']); ?></td>
                            <td style="width: 20%;"><?= htmlspecialchars($listInstruktur['alamatDojo']); ?></td>
                            <td><?= htmlspecialchars($listInstruktur['noTelpDojo']); ?></td>
                            <!-- <td><= htmlspecialchars($listInstruktur['foto']); ?></td> -->
                            <td style="width: 35%;">
                                <img src="<?= BASEURL; ?>/img/dojo/<?= $listInstruktur['link_foto']; ?>.jpg">
                            </td>
                        </tr>
                        <?php $counter++ ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <div class="alert alert-warning">Tidak ada data Dojo</div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>