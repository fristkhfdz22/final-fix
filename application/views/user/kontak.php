
<section class="contact-section">
        <div class="containerhubungikami">
            <h2 class="section-title" id="kontak" style="color: black;">Hubungi Kami</h2>
            <div class="underline"></div>
            <br>
            <div class="contact-wrapper">
            <?php if (isset($kontak) && !empty($kontak)): ?>
                <?php foreach ($kontak as $k): ?>
                    <div class="map">
                    <h3>Denah Lokasi</h3>
                    <iframe src="<?php echo $k->maps_url; ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-info">
                    <h3>Kontak</h3>
                  
                    <div class="contact-item">
                        <span class="icon">📧</span>
                        <div class="details">
                            <h4>Email</h4>
                            <p><?php echo $k->email; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📍</span>
                        <div class="details">
                            <h4>Alamat</h4>
                            <p><?php echo $k->alamat; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📞</span>
                        <div class="details">
                            <h4>Telepon</h4>
                            <p><?php echo $k->telepon; ?></p>
                        </div>
                    </div>
                
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada data kontak yang tersedia.</p>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <br>
