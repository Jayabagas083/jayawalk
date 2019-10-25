<!DOCTYPE html>
<html lang="en">
   <?php include '_partials/header.php'; ?>
    <body>
        <?php include '_partials/menu.php'; ?>
        <div class="main">
            <header class="bg-img header">
                <nav class="navbar navbar-default navbar-ubutia">
                    <div class="container">
                        <div class="navigation-bar">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="logo">
                                        <a href="index.html"><span class="ubutia-icon"></span></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="menu m">
                                        <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="intro-box">
                            <div class="intro">
                                <h1><?= $biodata['pembuka'] ?></h1>
                                <p>~Welcome To My Curriculum Vitae~</p>
                                <a class="btn ubutia-btn" href="#">Explore us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
			
			<!-- Biodata -->
            <section id="about" class="about section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="title">Biodata</h2>
							<img src="<?= "assets/images/biodata/".$biodata['foto'] ?>">
                            <span><?= $biodata['profesi'] ?></span>
							<hr/>
							<!--Data Biodata -->
                            <table border=0>
				<tr>
					<th>Nama</th> <td class="col-sm-6">:</td> <td><?= $biodata['nama'] ?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th> <td>:</td> <td><?= $biodata['jk'] ?></td>
				</tr>
				<tr>
					<th>TTL</th> <td>:</td> <td><?= $biodata['ttl'] ?></td>
				</tr>
				<tr>
					<th>Alamat</th> <td>:</td> <td><?= $biodata['alamat'] ?></td>
				</tr>
				<tr>
					<th>Agama</th> <td>:</td> <td><?= $biodata['agama'] ?></td>
				</tr>
				<tr>
					<th>Status</th> <td>:</td> <td><?= $biodata['status'] ?></td>
				</tr>
			</table>
			<hr/>
			<!--Resume -->
			<?= $biodata['resume'] ?>
			<!--Keterangan -->
                        </div>
                    </div>
                </div>
            </section>
			
			<!-- Skill -->
            <section id="skill" class="purpose section">
                <div class="container">
                    <h2 class="title">What we do</h2>
                    <div class="row">
					<?php foreach($skill as $s): ?>
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <div class="card-icon">
                                        <span class="graphic-design" style="background:transparent url(assets/images/skill/<?= $s->foto ?>) no-repeat;" aria-hidden="true"></span>
										
                                    </div>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3><?= $s->keahlian ?> </h3>
                                    <p>
                                       <?= $s->keterangan ?>
                                    </p>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                        <!--<div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <div class="card-icon">
                                        <span class="webdevelopment" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Web Development</h3>
                                    <p>
                                        We provide the best web development service for any personal or coporate project with great sulutions on demand, and we also use moderm web technology as well.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <div class="card-icon">
                                        <span class="printing" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Printing Design</h3>
                                    <p>
                                        We provide the best service with high-quality printing design and cost-effective printing for any business purpose.
                                    </p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
				
            </section>
            <section id="expertise" class="expert">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 bg-img">
                            <div></div>
                        </div>
                        <div class="col-sm-5 section">
                            <h2 class="title">Pengalaman</h2>
                            <div id="expert-slider" class="owl-carousel">
                                <div class="item">
								<h3><?= $pengalaman['perusahaan'] ?></h3>
                                    <p>
                                       <?= $pengalaman['keterangan'] ?>
                                    </p>
                                </div>
                                <div class="item">
                                    <p>
                                         
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ubutia-quote section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <img class="quote" src="assets/images/quote.png">
                           <p>
                               Jika Kau ingin menjadi orang SUKSES, Maka raihlah SUKSES di akhirat.
                           </p>
                           <p class="author">"Jaya Bagas Permana"</p>
                           <img src="assets/images/mouse.png">
                        </div>
                    </div>
                </div>
            </section>
            <section id="workstation" class="work section">
                <div class="container">
                    <h2 class="title">Pendidikan</h2>
                    <div id="workstation-slider" class="owl-carousel">
					<?php foreach($pendidikan as $p): ?>
                        <div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="<?= "assets/images/pendidikan/".$p->foto ?>">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3><?= $p->sekolah ?></h3>
                                    <p>
										<?= $p->tahun_ajaran ?>
                                    </p>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                        <!--<div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/5.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Creative Cover Design</h3>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/6.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Creative Namecard</h3>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/4.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Creative geeks</h3>
                                    <p>
                                       Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/5.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Creative freaks</h3>
                                    <p>
                                      Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/6.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Creative nerds</h3>
                                    <p>
                                       Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </section>
            <section class="watch bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span>Watch showreel</span>
                            <a class="popup-youtube btn" href="https://www.youtube.com/watch?v=oMIENcW6QM0"><span class="play-icon"></span></a>
                            <span>with us</span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="team" class="team section">
                <div class="container">
				
                    <h2 class="title">Portfolio</h2>
                    <div class="row">
                        <div class="col-sm-4">
						<?php foreach($portfolio as $pt): ?>
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="<?= "assets/images/portfolio/".$pt->foto?>">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3><?=$pt->judul?></h3>
                                    <p>
                                      <?=$pt->keterangan?>
                                    </p>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                        <!--<div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/9.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Eva Ly</h3>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun.
                                    </p>
                                    <div class="social-icons">
                                        <ul>
                                            <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                                            <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                    <img class="img-responsive" src="assets/images/10.jpg">
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Graham Bill</h3>
                                    <p>
                                      Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consetetur,adipisivelit, sed quia non numquam eius modi tempora incidun. 
                                    </p>
                                    <div class="social-icons">
                                        <ul>
                                            <a href="#"><li><span class="ion-social-facebook"></span></li></a>
                                            <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </section>
            <section class="subscribe section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Subscribe to our newsletter to get update</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="user-email" placeholder="Write your email here....">
                                </div>
                                <button type="submit" class="btn ubutia-btn">Send me</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="contact section">
                <div class="container">
                    <h2 class="title">Hubungi Saya :</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                        <span class="fa fa-map-o" aria-hidden="true"></span>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Address</h3>
                                    <p>
                                        Jl. Kenanga Indah No.09
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Phone</h3>
                                    <p>
                                        +62895367297276
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ubutia-card">
                                <div class="ubutia-card-header">
                                        <span class="fa fa-paper-plane" aria-hidden="true"></span>
                                </div>
                                <div class="ubutia-card-content">
                                    <h3>Email</h3>
                                    <p>
                                        bagastahu1@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="social-icons">
                                <ul>
								<?php foreach ($sosmed as $smd): ?>
                                    <a href="<?= $smd->link ?>"><li><span class="<?= $smd->class ?>"></span></li></a>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Design <font class="logo-icon"></font> by <a href="https://www.freshdesignweb.com/">freshDesignweb</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <?php include '_partials/script.php'; ?>
    </body>
</html>