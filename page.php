<?php
get_header();
?>

<main class="page-content">

    <?php if ( is_page('fakultas') ) : ?>

        <!-- =========================
             HALAMAN FAKULTAS
        ========================== -->

        <section class="faculty-section">

            <div class="container">

                <div class="faculty-header">
                    <p class="faculty-label">INFORMASI KAMPUS</p>

                    <h1>Fakultas Universitas Trunojoyo Madura</h1>

                    <p class="faculty-description">
                        Universitas Trunojoyo Madura memiliki berbagai fakultas
                        yang menyelenggarakan pendidikan dan pengembangan ilmu
                        untuk mendukung kebutuhan akademik mahasiswa.
                    </p>
                </div>


                <div class="faculty-grid">

                    <!-- FAKULTAS 1 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">⚙️</div>

                        <h2>Fakultas Teknik</h2>

                        <p>
                            Menyelenggarakan pendidikan dan pengembangan ilmu
                            di bidang teknik dan teknologi.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Teknik</li>
                            <li>Program Studi Teknologi</li>
                            <li>Program Studi terkait bidang teknik</li>
                        </ul>
                    </div>


                    <!-- FAKULTAS 2 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">🔬</div>

                        <h2>Fakultas Sains dan Teknologi</h2>

                        <p>
                            Menyediakan pendidikan dan pengembangan ilmu
                            di bidang sains dan teknologi.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Sains</li>
                            <li>Program Studi Teknologi</li>
                            <li>Program Studi terkait</li>
                        </ul>
                    </div>


                    <!-- FAKULTAS 3 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">💼</div>

                        <h2>Fakultas Ekonomi dan Bisnis</h2>

                        <p>
                            Mengembangkan pendidikan dalam bidang ekonomi,
                            bisnis, dan manajemen.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Manajemen</li>
                            <li>Program Studi Akuntansi</li>
                            <li>Program Studi Ekonomi</li>
                        </ul>
                    </div>


                    <!-- FAKULTAS 4 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">🎓</div>

                        <h2>Fakultas Keguruan dan Ilmu Pendidikan</h2>

                        <p>
                            Menyelenggarakan pendidikan untuk mempersiapkan
                            sumber daya manusia di bidang pendidikan.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Pendidikan</li>
                            <li>Program Studi Keguruan</li>
                            <li>Program Studi terkait pendidikan</li>
                        </ul>
                    </div>


                    <!-- FAKULTAS 5 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">⚖️</div>

                        <h2>Fakultas Hukum</h2>

                        <p>
                            Menyelenggarakan pendidikan dan pengembangan ilmu
                            di bidang hukum.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Hukum</li>
                            <li>Hukum dan ilmu terkait</li>
                        </ul>
                    </div>


                    <!-- FAKULTAS 6 -->
                    <div class="faculty-card">
                        <div class="faculty-icon">🌱</div>

                        <h2>Fakultas Pertanian</h2>

                        <p>
                            Mengembangkan pendidikan dan penelitian dalam
                            bidang pertanian serta sumber daya alam.
                        </p>

                        <h3>Program Studi</h3>

                        <ul>
                            <li>Program Studi Pertanian</li>
                            <li>Program Studi Agribisnis</li>
                            <li>Program Studi terkait pertanian</li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>


    <?php else : ?>

        <!-- HALAMAN WORDPRESS LAINNYA -->

        <section class="default-page">

            <div class="container">

                <?php
                while ( have_posts() ) :
                    the_post();
                ?>

                    <h1><?php the_title(); ?></h1>

                    <div class="page-text">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>

            </div>

        </section>

    <?php endif; ?>

</main>

<?php
get_footer();
?>