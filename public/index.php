<!doctype html>
<html>
<head>
	<meta charset='utf8'>
	<meta name='viewport' content='width=device-width'>
	<title>Svelte Example Custom Element + Php</title>
</head>

<body>
<div class="container">
	<div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h2>ฟอร์มรายการซื้อ</h2>
		<p class="lead">ด้านล่างนี้เป็นตัวอย่างฟอร์ม สร้างจาก Bootstrap CSS Framework.</p>
	</div>

	<div class="row">
		<div class="col-md-4 order-md-2 mb-4">
			<h4 class="d-flex justify-content-between align-items-center mb-3">
				<span class="text-muted">ตระกร้าสินค้า</span>
				<span class="badge badge-secondary badge-pill">3</span>
			</h4>
			<ul class="list-group mb-3">
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">ปลากระป๋องโรซ่า</h6>
						<small class="text-muted">Brief description</small>
					</div>
					<span class="text-muted">16 บาท</span>
				</li>
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">ผักคะน้า</h6>
						<small class="text-muted">เทศกาลวันตรุษจีน กิโลกรัมละ 15 บาท</small>
					</div>
					<span class="text-muted">25 บาท</span>
				</li>
				<li class="list-group-item d-flex justify-content-between lh-condensed">
					<div>
						<h6 class="my-0">วุ้นเส้น</h6>
						<small class="text-muted">ห่อละ 20 บาท</small>
					</div>
					<span class="text-muted">30 บาท</span>
				</li>
				<li class="list-group-item d-flex justify-content-between bg-light">
					<div class="text-success">
						<h6 class="my-0">โปรโมชั่น โค้ด</h6>
						<small>EXAMPLECODE</small>
					</div>
					<span class="text-success">-24 บาท</span>
				</li>
				<li class="list-group-item d-flex justify-content-between">
					<span>ราคารวม (บาท)</span>
					<strong>42 บาท</strong>
				</li>
			</ul>

			<form class="card p-2">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="กดใช้ โค้ด">
					<div class="input-group-append">
						<button type="submit" class="btn btn-secondary">โค้ดส่วนลด</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-8 order-md-1">
			<h4 class="mb-3">ที่อยู่ลงบิล</h4>
			<form class="needs-validation" novalidate>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="firstName">ชื่อ</label>
						<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">นามสกุล</label>
						<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>

				<div class="mb-3">
					<label for="username">รหัสประจำตัว</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" class="form-control" id="username" placeholder="Username" required>
						<div class="invalid-feedback" style="width: 100%;">
							Your username is required.
						</div>
					</div>
				</div>

				<div class="mb-3">
					<label for="email">อีเมล <span class="text-muted">(Optional)</span></label>
					<input type="email" class="form-control" id="email" placeholder="you@example.com">
					<div class="invalid-feedback">
						Please enter a valid email address for shipping updates.
					</div>
				</div>

				<div class="mb-3">
					<label for="address">ที่อยู่ 1</label>
					<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>

				<div class="mb-3">
					<label for="address2">ที่อยู่ 2 <span class="text-muted">(Optional)</span></label>
					<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
				</div>

				<div class="row">
					<div class="col-md-5 mb-3">
						<label for="country">ประเทศ</label>
						<select class="custom-select d-block w-100" id="country" required>
							<option value="">เลือก...</option>
							<option>ประเทศไทย</option>
						</select>
						<div class="invalid-feedback">
							Please select a valid country.
						</div>
					</div>
					<div class="col-md-4 mb-3">
						<label for="amphor">อำเภอ</label>
						<select class="custom-select d-block w-100" id="amphor" required>
							<option value="">	เลืิอก...</option>
							<option></option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid state.
						</div>
					</div>
					<div class="col-md-3 mb-3">
						<label for="zip">รหัสไปรษณีย์</label>
						<input type="text" class="form-control" id="zip" placeholder="" required>
						<div class="invalid-feedback">
							Zip code required.
						</div>
					</div>
				</div>
				<hr class="mb-4">

				<h4 class="mb-3">ช่องทางการจ่ายเงิน</h4>

				<div class="d-block my-3">
					<div class="custom-control custom-radio">
						<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
						<label class="custom-control-label" for="credit">เครดิตการ์ด</label>
					</div>
					<div class="custom-control custom-radio">
						<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
						<label class="custom-control-label" for="debit">เดรบิตการ์ด</label>
					</div>
					<div class="custom-control custom-radio">
						<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
						<label class="custom-control-label" for="paypal">Paypal</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="cc-name">ชื่อบนหน้าบัตร</label>
						<input type="text" class="form-control" id="cc-name" placeholder="" required>
						<div class="invalid-feedback">
							Name on card is required
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="cc-number">เลขที่ เครดิตคาร์ด</label>
						<input type="text" class="form-control" id="cc-number" placeholder="" required>
						<div class="invalid-feedback">
							Credit card number is required
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-3">
						<label for="cc-expiration">วันหมดอายุบัตร</label>
						<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
						<div class="invalid-feedback">
							Expiration date required
						</div>
					</div>
					<div class="col-md-3 mb-3">
						<label for="cc-expiration">CVV</label>
						<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
						<div class="invalid-feedback">
							Security code required
						</div>
					</div>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit">กดเพื่อทำรายการซื้อต่อ</button>
			</form>
		</div>
	</div>

	<footer class="my-5 pt-5 text-muted text-center text-small">
		<p class="mb-1">&copy; 2017-2019 บริษัทสนุกสุดสุด จำกัด</p>
		<ul class="list-inline">
			<li class="list-inline-item"><a href="#">นโยบายความปลอดภัย</a></li>
			<li class="list-inline-item"><a href="#">กฎกติกา</a></li>
			<li class="list-inline-item"><a href="#">สนับสนุน</a></li>
		</ul>
	</footer>
</div>
	<s-app name="Svelte"></s-app>
	<script src="bundle.js"></script>
</body>
</html>