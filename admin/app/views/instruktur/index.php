    <div class="container">
        <h1>Panel Profil Blackbelt</h1>
        <button type="button" class="btn btn-primary tombolTambahDataInstruktur" style="margin: 1.5% 0 1.5% 0;" data-bs-toggle="modal" data-bs-target="#formModalInstruktur">
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

                                <a href="<?= BASEURL; ?>/instruktur/ubah/<?= $listInstruktur['idInstruktur']; ?>" class="tombolUbahDataInstruktur tampilModalUbahInstruktur" data-bs-toggle="modal" data-bs-target="#formModalInstruktur" data-instruktur-id="<?= $listInstruktur['idInstruktur']; ?>"><span class="badge text-bg-warning">Ubah</span></a>
                                
                                <!-- <a href="<= BASEURL ?>/user/ubah/<= $user['idUser']; ?>" class="tampilModalUbahUser" data-bs-toggle="modal" data-bs-target="#formModalUser" data-user-id="<= $user['idUser']; ?>"><span class="badge text-bg-warning">Ubah</span></a> -->

                                <a href="<?= BASEURL; ?>/instruktur/hapus/<?= $listInstruktur['idInstruktur']; ?>"><span class="badge text-bg-danger" onclick = "return confirm('Yakin mau hapus baris No <?= $counter ?> ini?')">Hapus</span></a>
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

    <!-- Modal -->
    <div class="modal fade" id="formModalInstruktur" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="judulModalLabel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="judulModalLabel">Tambah Instruktur</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/instruktur/tambah" method="POST">
                        <input type="hidden" name="id" id="id">
                        <!-- 1 - Detail Bio -->
                        <div class="sub-formModal">
                            <h5 class="modal-title">Detail Bio</h5>
                            <p>Detail profil utama Instruktur</p>
                            <!-- Nama Depan -->
                            <div class="mb-3">
                                <label for="namaDepan" class="form-label">Nama Depan</label>
                                <input type="text" class="form-control" id="namaDepan" name="namaDepan" placeholder="Input Nama Depan">
                            </div>
                            <!-- Nama Belakang -->
                            <div class="mb-3">
                                <label for="namaBelakang" class="form-label">Nama Belakang</label>
                                <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" placeholder="Input Nama Belakang">
                            </div>
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="text" class="form-control" id="emailAddress" name="emailAddress" placeholder="Input Email lalu @ dilanjut domain email">
                            </div>
                            <!-- Nomor Telepon -->
                            <div class="mb-3">
                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="Input Nomor Telepon">
                            </div>
                            <!-- Foto -->
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Instruktur</label><br>
                                <input type="file" class="foto" id="foto" name="foto">
                            </div>
                        </div>
                        <!-- 2 - Status Keanggotaan -->
                        <div class="sub-formModal">
                            <h5 class="modal-title">Status Keanggotaan</h5>
                            <p>Lokasi dojo instruktur, status keanggotaan, serta prestasi singkat seputar dirinya</p>
                            <!-- Branch -->
                            <div class="mb-3">
                                <label for="idBranch_fkInstruktur" class="form-label">Branch</label><br>
                                <select id="idBranch_fkInstruktur" name="idBranch_fkInstruktur">
                                    <!-- <option value="A">Alpha</option>
                                    <option value="O">Omega</option>
                                    <option value="B">Beta</option> -->
                                    <?php foreach($data['branchList'] as $branch): ?>
                                        <option value="<?= $branch['idBranch']; ?>"><?= htmlspecialchars($branch['branch']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="idStatus_fkInstruktur" class="form-label">Status</label><br>
                                <select id="idStatus_fkInstruktur" name="idStatus_fkInstruktur">
                                    <?php foreach($data['statusList'] as $status): ?>
                                        <option value="<?= $status['idStatus']; ?>"><?= htmlspecialchars($status['status']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="prestasi" class="form-label">Prestasi</label>
                                <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Ceritakan prestasi anda secara singkat jika ada">
                            </div>
                        </div>
                        <!-- 3 - Blackbelt List -->
                        <div class="sub-formModal">
                            <h5 class="modal-title">Blackbelt List</h5>
                            <p>List sabuk hitam yang terdaftar pada instruktur tersebut</p>
                            <!-- Blackbelt Level -->
                            <div class="mb-3">
                                <label for="idLevelDan_fkBlackBelt" class="form-label">Blackbelt Level</label><br>
                                <select id="idLevelDan_fkBlackBelt" name="idLevelDan_fkBlackBelt">
                                    <?php foreach($data['levelDanList'] as $levelDan): ?>
                                        <option value="<?= $levelDan['idLevelDan']; ?>"><?= htmlspecialchars($levelDan['levelDan']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Nomor Sertifikat -->
                            <div class="mb-3">
                                <label for="nomorSertifikat" class="form-label">Nomor Sertifikat</label>
                                <input type="text" class="form-control" id="nomorSertifikat" name="nomorSertifikat" placeholder="Input Nomor Sertifikat">
                            </div>
                            <!-- Date Issued -->
                            <div class="mb-3">
                                <label for="dateIssued" class="form-label">Date Issued</label>
                                <input type="text" class="form-control" id="dateIssued" name="dateIssued" placeholder="Input Tanggal Penerimaan Sabuk Hitam">
                            </div>
                        </div>
                        <!-- 4 - Opsional -->
                        <div class="sub-formModal">
                            <h5 class="modal-title">Opsional</h5>
                            <div class="mb-3">
                                <label for="pesanTambahan" class="form-label">Pesan Tambahan:</label>
                                <input type="text" class="form-control" id="pesanTambahan" name="pesanTambahan" placeholder="Input deskripsi / bio tambahan disini bila diperlukan">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" id="tombolData" class="btn btn-primary">Tambah Instruktur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>