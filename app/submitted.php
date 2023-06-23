
<?php include __DIR__ . '/functions.php'; ?>

<?php include __DIR__ . '/src/header.php'; ?>

<header>
    <div class="navigation_bar py-lg-4 py-3">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-lg-auto">
                    <div class="row align-items-center justify-content-md-between">
                        <div class="col col-md-auto order-1 order-md-2 ps-xl-12 text-center text-lg-start">
                            <a href="./">
                                <?= renderImg("logo.png", "logo") ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="row justify-content-center align-items-center py-2 py-lg-0">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary text-white talk-to-human">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.8554 14.3002L14.9345 12.3862C14.5466 12.1974 14.113 12.1547 13.7008 12.2646C13.2887 12.3744 12.9209 12.6308 12.6547 12.9939L11.471 14.6233C9.55282 13.2809 7.92591 11.4916 6.70511 9.38188L8.185 8.08115C8.51624 7.78856 8.75026 7.38372 8.85063 6.92963C8.951 6.47554 8.91209 5.99769 8.73996 5.57045L6.99884 1.25716C6.81388 0.799033 6.48707 0.428012 6.07665 0.210199C5.66623 -0.00761358 5.19885 -0.0580721 4.75776 0.0678128L1.44302 1.01517C0.985711 1.14659 0.588098 1.45794 0.325492 1.89025C0.0628867 2.32256 -0.0464734 2.8458 0.0181268 3.36087C0.631973 8.05944 2.61287 12.4129 5.66419 15.7693C8.71552 19.1257 12.6731 21.3045 16.9443 21.9794C17.0321 21.993 17.1206 21.9999 17.2093 22C17.6361 21.9997 18.0507 21.8438 18.3883 21.5567C18.726 21.2696 18.9676 20.8675 19.0754 20.4133L19.9353 16.7655C20.0514 16.2804 20.0065 15.7657 19.8085 15.3138C19.6106 14.8619 19.2726 14.5025 18.8554 14.3002Z"
                                        fill="#9159E8" />
                                    <ellipse cx="16.9204" cy="4.71415" rx="3.07669" ry="3.14286" fill="#F33829" />
                                </svg>
                                <span class="ps-2 text-hidden">Talk to a Human</span>
                                <span class="no-hidden px-2"><?= $phone_number ?></span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-secondary rounded-pill">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
	<style>
		.container h1 {
			font-size:80px;
			text-align: center;
			padding-top: 150px;
		}
		.container h3{
			text-align: center;
			margin-top: 30px;
			font-size: 25px;
		}
	</style>
            <!-- Inner Banner Normal -->
	<section class="inner_banner_wrap normal_inner_banner text-primary pb-lg-10 pb-5 mt-lg-10">
		<div class="inner_bnr_block">
			<div class="container">
				<h1>Thank You !</h1>
                <h3>Thank you for contacting us! We will contact you shortly ....</h3>
			</div>                    
		</div>
	</section>
	
	<!-- End -->
	<!-- Event snippet for Find My Lender Match Form conversion page -->
	<script>
	gtag('event', 'conversion', {'send_to': 'AW-600985749/rOeECIiB9uQDEJWhyZ4C'});
	</script>
	<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center gy-4 gy-lg-0 py-lg-4" >
            <div class="col-auto">
                <div class="row justify-content-center align-items-center gy-4">
                    <div class="col-auto order-1 order-md-2">
                        <a href="./">
                            <?= renderImg("logo.png", "logo") ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-auto">
                <div class="row gx-2 gx-md-3 justify-content-between justify-content-md-center">
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php include __DIR__ . '/src/footer.php'; ?>