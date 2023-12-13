<?php
$_PIXEL_ID	= "155865584042024";
$_LOOP_FORM	= "https://app.loops.id/save-order/mandira-nutriflakes-form";
$_LOOP_LINK	= "https://mauorder.online/mandira-nutriflakes-wa";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Nutriflakes&reg;</title>
	<link rel="stylesheet" href="/src/style.css">
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '<?php echo $_PIXEL_ID; ?>');
		fbq('track', 'PageView');
	</script>
</head>

<body>
	<div class="section">
		<div class="buttons">
			<a href="javascript:void(0)" style="display:inline-block;" class="btn-cprice" id="cta-intro">
				<img class="img-b" src="/images/_button_cek_promo.webp" alt="Cek Promo - Pesan Sekarang">
			</a>
			<a href="javascript:void(0)" style="display:inline-block;" class="btn-learn">
				<img class="img-b" src="/images/_button_learn_more.webp" alt="Pelajari Lebih Lanjut">
			</a>
		</div>
		<span><img src="/images/1.opt.webp"></span>
	</div>
	<div class="section" id="section-second">
		<div><img data-original="/images/2.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/3.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/4.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/5.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/6.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/7.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/8.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/9.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/10.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/11.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/12.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/13.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/14.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/15.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/16.opt.webp" class="lazy"></div>
	</div>
	<div class="section" id="section-promo">
		<div><img data-original="/images/17.opt.webp" class="lazy"></div>
		<div class="btn-package">
			<button type="button" class="btns btns-adaptasi"><img src="/images/scart-light.webp" style="width:16px;height:16px;display:inline-block;"> PESAN PAKET ADAPTASI</button>
		</div>
	</div>
	<div class="section">
		<div><img data-original="/images/18.opt.webp" class="lazy"></div>
		<div class="btn-package">
			<button type="button" class="btns btns-terapi"><img src="/images/scart-light.webp" style="width:16px;height:16px;display:inline-block;"> PESAN PAKET TERAPI</button>
		</div>
	</div>
	<div class="section">
		<div><img data-original="/images/19.opt.webp" class="lazy"></div>
		<div class="btn-package">
			<button type="button" class="btns btns-sembuh"><img src="/images/scart-light.webp" style="width:16px;height:16px;display:inline-block;"> PESAN PAKET SEMBUH</button>
		</div>
	</div>
	<div class="section">
		<div><img data-original="/images/20.opt.webp" class="lazy"></div>
	</div>
	<div class="section" id="section-order">
		<div><img data-original="/images/21.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div><img data-original="/images/22.opt.webp" class="lazy"></div>
		<div style="padding: 25px; border: 3px solid red; border-radius:8px; background: #87d695; margin: 0 8px;">
			<form id="form-order" class="loops-forms" action="<?php echo $_LOOP_FORM; ?>" method="POST">
				<div class="loops-group">
					<label for="name">Nama lengkap <span class="red">*</span></label>
					<input type="text" id="name" name="name" value="" placeholder="Tulis nama Anda" required>
				</div>
				<div class="loops-group">
					<label for="phone">No HP <span class="red">*</span></label>
					<input type="text" id="phone" name="phone" value="" placeholder="Sebutkan nomor HP aktif Anda: contoh 081234567890" pattern="[0]{1}[0-9]{8,12}" required>
				</div>
				<div class="loops-group" style="margin-bottom: 0;">
					<input type="submit" value="AMBIL PROMO SEKARANG" class="btns loops-submit">
				</div>
				<input type="hidden" id="current" name="current" value="">
				<input type="hidden" name="redirect" value="">
				<input type="hidden" name="_loops_nonce" value="">
			</form>

		</div>
	</div>
	<div class="section">
		<div><img data-original="/images/23.opt.webp" class="lazy"></div>
	</div>
	<div class="section">
		<div id="csSupport">
			<center>
				<a href="<?php echo $_LOOP_LINK; ?>" class="btn-wa"><img src="/images/btn-wa.webp" alt="NUTRIFLAKES&reg; Customer Service" style="width: 50%;"></a>
			</center>
		</div>
		<span><img data-original="/images/24.opt.webp" class="lazy"></span>
	</div>
	<script src="/src/plugins/jquery-3.6.0.min.js" language="javascript"></script>
	<script src="/src/plugins/jquery.lazyload.min.js" language="javascript"></script>
	<script src="/src/script.js"></script>
</body>
</html>