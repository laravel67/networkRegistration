<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>{{ __('Kontak') }}</h2>
        <p>{{ __('Hubungi Kami Melalui  Kontak Yang Tersedia.') }}</p>
      </div>

    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d128317.20466187566!2d104.60809137548094!3d-3.101219779628483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b753ab6770bcf%3A0xb5eef6859d2c937!2sUniversitas%20Sriwijaya%20-%20Kampus%20Palembang!5e1!3m2!1sid!2sid!4v1719037255924!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>{{ __('Alamat Kami') }}</h3>
                <p>
                    {{ __('Jalan Srijaya Negara, Bukit Lama, Kec. Ilir Barat I, Kota Palembang, Sumater Selatan (30139)') }}
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>{{ __('Alamat Email') }}</h3>
                <p>{{ __('jendralbumisagara@gmail.com') }}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>{{ __('Hubungi kami') }}</h3>
                <h6><a href="https://wa.link/pf16ts" target="__blank">{{ __('+62 896 2006 6462') }}</a></h6>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required="">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required="">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-center my-3"><button type="submit">{{ __('Kirim Pesan') }}</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>