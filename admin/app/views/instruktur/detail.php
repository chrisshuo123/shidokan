<!-- <div class="container" style="width: 60rem; display:flex; flex-direction:row; justify-content:center;">
    <div class="card" style="margin-top: 5%;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div> -->

<div class="container" style="display:flex; flex-direction:column;">
    <!-- 1 - Instructor Detail Profile -->
    <div style="display:flex; flex-direction:row; justify-content:center;">
        <div class="card mb-3 instructor-detail">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <?php if(!empty($data['instrukturDetail'])): ?>
                            <!-- Using single() returns one record, so no foreach needed -->
                            <?php $instruktur = $data['instrukturDetail']; ?>
                            <!-- <h4 class="card-title">Tiovano Tikori Maihesa</h4> -->
                            <h4 class="card-title"><?= htmlspecialchars($instruktur['namaDepan']). ' ' .htmlspecialchars($instruktur['namaBelakang']) ?></h4>
                            <p class="card-text"><b>Nama Depan:</b> <?= htmlspecialchars($instruktur['namaDepan']); ?></p>
                            <p class="card-text"><b>Nama Belakang:</b> <?= htmlspecialchars($instruktur['namaBelakang']); ?></p>
                            <p class="card-text"><b>Prestasi:</b> <?= htmlspecialchars($instruktur['prestasi']); ?></p>
                            <p class="card-text"><b>Email:</b> <?= htmlspecialchars($instruktur['emailAddress']); ?></p>
                            <p class="card-text"><b>Nomor Telepon:</b> <?= htmlspecialchars($instruktur['noTelp']); ?></p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <?php else: ?>
                            <p class="text-danger">Data Instruktur tidak ditemukan.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Jika ada Deskripsi tentang dirinya -->
            <!-- <div style="border-top: 1px solid #d2ceceff; border-bottom: 1px solid #d2ceceff; border-radius:0px; padding: 2% 0 2% 3%;">
                <h5>Catatan / Deskripsi</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia tempore debitis nihil rem minus dolores, sequi nisi inventore tenetur laboriosam sint architecto ipsum laborum excepturi dolorem fugiat, totam, nulla voluptatem!</p>
            </div> -->

            <!-- PHP Status Color -->
            <?php
            $status = $instruktur['status'];
            $statusLower = strtolower($status);
            echo "<!-- Debug: Status is '$status', Lowercase: '$statusLower' -->";

            $statusColor = match(strtolower($instruktur['status'])) {
                'aktif' => 'green',
                'meninggal dunia' => 'orange',
                'mengundurkan diri' => 'yellow',
                'dicabut' => 'red',
                default => 'gray'
            };
            $textColor = (strtolower($status) == 'mengundurkan diri') ? 'black' : 'white';
            ?>

            <div class="row g-0" style="background-color:<?= $statusColor ?>; text-align:center; padding-top: 10px; border-radius: 0px 0px 4px 4px;">
                <h3 style="color:<?= $textColor ?>;">Status: <?= $instruktur['status']; ?></h3>
            </div>
        </div>
    </div>

    <!-- Pesan Tambahan (Deskripsi Diri) -->
    <div style="display:flex; flex-direction:row; justify-content:center; margin-bottom: 5%;">
        <div class="card mb-3 instructor-detail">
            <div style="border-top: 1px solid #d2ceceff; border-bottom: 1px solid #d2ceceff; border-radius:0px; padding: 2% 0 2% 3%;">
                <h5>Catatan / Deskripsi</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia tempore debitis nihil rem minus dolores, sequi nisi inventore tenetur laboriosam sint architecto ipsum laborum excepturi dolorem fugiat, totam, nulla voluptatem!</p>
            </div>
        </div>
    </div>
    
    <div class="instructor-subdetail" style="display:flex; flex-direction:row; justify-content:center; flex-wrap:wrap;">
        <!-- 2 - Branch -->
        <?php if (!empty($instruktur['foto_lokasi'])): ?>
            <div class="detail-instruktur-branch card text-bg-info mb-3" style="max-width: 25rem;">
                <div class="card-header" style="width: 100%;">Branch</div>
                <div style="border-bottom: 0.5px solid #7e7e7eff; width: 100%;">
                    <img src="<?= BASEURL; ?>/img/location/<?= $instruktur['branch'] ?>.jpg">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $instruktur['branch'] ?></h5>
                    <p class="card-text"><?= $instruktur['provinsi']; ?>, Indonesia</p>
                </div>
            </div>
        <?php endif; ?>
        <!-- 3 - Catatan / Deskripsi -->
        <!-- <div class="card text-bg-light mb-3" style="max-width: 25rem;">
            <div class="card-header" style="width: 100%;">Catatan / Deskripsi</div>
            <div style="border-bottom: 0.5px solid #9e9d9dff; width: 100%;">
                <img src="<?= BASEURL; ?>/img/instructor/description.jpg">
            </div>
            <div class="card-body">
                <h5 class="card-title">Detail Instruktur</h5>
                <p class="card-text">Belum ada detail spesifik</p>
            </div>
        </div> -->
        <!-- 5 - Instructor Dojo (jika terjalin) -->
        <div class="instruktur-dojo-detail card text-bg-danger mb-3" style="max-width: 25rem;">
            <div class="card-header" style="width: 100%;">Dojo dikelola</div>
            <div style="border-bottom: 0.5px solid #6c2b2bff; width: 100%;">
                <img src="<?= BASEURL; ?>/img/instructor/dojo-template.png">
            </div>
            <div class="card-body">
                <h5 class="card-title">Vortex Dojo</h5>
                <p class="card-text">Dojo yang banyak diminati lokal, maupun turis baik sesama Indonesia dan Asing di Flores <i>(Misal)</i>.</p>
            </div>
        </div>
        <!-- 4 - Blackbelt List -->
        <?php foreach($instruktur['blackBelts'] as $blackBelt): ?>
            <div class="instructor-blackbelt-detail card text-bg-dark mb-3" style="max-width: 25rem;">
                <div class="card-header" style="width: 100%;">Blackbelt</div>
                <div style="border-bottom: 0.5px solid #9e9d9dff; width: 100%;">
                    <img src="<?= BASEURL; ?>/img/instructor/blackbelt-level/<?= $blackBelt['levelDan']; ?>.png">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $blackBelt['levelDan']; ?></h5>
                    <p class="card-text" style="margin-bottom: -1.4%;"><b>Blackbelt Level:</b> <?= $blackBelt['levelDan']; ?></p>
                    <p class="card-text" style="margin-bottom: -1.4%;"><b>Certificate:</b> <?= $blackBelt['nomorSertifikat']; ?></p>
                    <p class="card-text" style="margin-bottom: -1.4%;"><b>Date Issued:</b> <?= $blackBelt['dateIssued']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>