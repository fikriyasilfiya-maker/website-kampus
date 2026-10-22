<?php get_header(); ?>

<main class="home-page">

    <!-- HERO -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-label">UKM-F FSI AR-RASYAD</p>

                <h1>
                    Selamat Datang di<br>
                    Website UKM-F FSI AR-RASYAD
                </h1>

                <p class="hero-description">
                    Website informasi kampus, akademik, fakultas,
                    berita, dan informasi terbaru UKM Universitas Trunojoyo Madura.
                </p>

                <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="hero-button">
                    Jelajahi UKM
                </a>
            </div>
        </div>
    </section>

    <!-- INFORMASI -->
    <section class="info-section">
        <div class="container">

            <div class="section-title">
                <p>INFORMASI UKM</p>
                <h2>Temukan Informasi UKM</h2>
            </div>

            <div class="info-grid">

                <a href="<?php echo esc_url( home_url('/academic/') ); ?>" class="info-card">
                    <div class="info-icon">🎓</div>
                    <h3>Organisasi</h3>
                  <p>
                    Program Kerja Setiap Departemen
                  </p>
                </a>

                <a href="<?php echo esc_url( home_url('/faculty/') ); ?>" class="info-card">
                    <div class="info-icon">🏛️</div>
                    <h3>Fakultas</h3>
                    <p>
                      Fakultas Keguruan dan Ilmu Pendidikan
                    </p>
                </a>

                <a href="<?php echo esc_url( home_url('/news/') ); ?>" class="info-card">
                    <div class="info-icon">📰</div>
                    <h3>Berita Kampus</h3>
                    <p>
                        Informasi berita tentang kegiatan UKM 
					</p>
                </a>

                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="info-card">
                    <div class="info-icon">📞</div>
                    <h3>Kontak</h3>
                    <p>
                        Informasi kontak Pengurus
                    </p>
                </a>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>