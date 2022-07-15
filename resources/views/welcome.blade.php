<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Saigon Delight</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  {{-- <link rel="stylesheet" href="css/signin.css"> --}}
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        {{-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/spica-admin/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white mr-0"></i>
            </button>
          </div>
        </div> --}}
      </div>
    </div>
    
    {{-- Sidebar --}}
    @include('template.sidebar')

    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      @include('template.navbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">ABOUT US</p>
                      <p> 
                        YEU SAIGON GROUP was established and opened its first restaurant, YEU SAIGON CAFÉ in June 2015 at Gran Rubina Business Park. As of September 2018, we are now operating 10 restaurants across Jakarta in total and comprised of 4 different restaurant brands (YEU SAIGON CAFÉ, SAIGON DELIGHT, MADAME MAI, COM NGON).
                        
                        The restaurant idea, which started simply as a passion for cuisine has shown enormous success due to Indonesia’s hunger for healthy and authentic Vietnamese cuisine.
                        
                        With a focus on bringing healthy, authentic Vietnamese food to all market segments, YEU SAIGON GROUP aims to have 14 outlets at the end of 2018 and 40 outlets throughout the country at the end of 2020. Eventually, the owners Praba and Mai want to expand internationally.
                        
                        <h6>CORE VALUES:</h6>
                            <ul><li>Create an organization that is joyful and happy for all its employees.</li></ul>
                            <ul><li>Bring back and promote honest cooking methods to provide nourishing and healthy cuisine.</li></ul>
                            <ul><li>Develop a supply-chain that integrates animal welfare and sustainable agricultural practice bringing farm to table products that are healthy for our customers.</li></ul>
     
                        <h6>FUTURE:</h6>
                        
                            <ul><li>Current focus is on growing our business model in the greater Jakarta market. It is envisaged that by the end of 2018, we will be at 14 outlets and by 2020 at 40 outlets throughout the country.​</li></ul>
                        
                        <h6>OBJECTIVE:</h6>
                        
                             <ul><li>Bring a variety of authentic healthy Vietnamese cuisines to the Indonesian F&B market.</li></ul>
                             <ul><li>Make our product accessible to all segments of the market.</li></ul>
                             <ul><li>Offer healthy food to customers by growing food using sustainable farming practices and prohibiting MSG use.</li></ul>
                        
                        <h6>KEYS TO SUCCESS:</h6>
                        
                            <ul><li>Honesty of our cooking methods - no MSG, growing our own organic herbs, baking our own bread.</li></ul>
                           <ul><li> Vietnamese Authenticity – hiring of Vietnamese chefs and ensuring quality by creating our dishes from scratch.</li></ul>
                            <ul><li>Our priority has always been the product and the customer. Commercial considerations have always been second, and as a result, our customers see and feel the difference.</li></ul>
                        
                        <h6>FOUNDERS INSPIRATIONAL STORY:</h6>
                        
                            <ul><li>The two owners of the group are the husband and wife team of Praba Madhavan and Le Thi Tuyet Mai. Motivated by a desire to bring authentic Vietnamese cuisine to the Indonesian market, they began their F&B journey with minimal experience with the opening of YEU SAIGON CAFE in June 2015. This was followed by their new brand YEU SAIGON DELIGHT later in 2015 and in November 2017, their third concept MADAME MAI was launched. Com Ngon, the latest concept was launched in July 2018.</li></ul>
                           <ul><li> The strategy is to bring to Indonesia authentic and healthy Vietnamese cuisine and make it available to as many segments of the market as possible.</li></ul>
                            <ul><li>The commitment to providing authentic and healthy cuisine is a complete one with the hiring of Vietnamese chefs at all outlets, importation of essential Vietnamese sauces and condiments and the local growing of Vietnamese herbs which give Vietnamese cuisine its authentic flavors and health-inducing features. Kitchens are also strictly MSG-free.</li></ul>
                            <ul><li>The word ‘Yeu’ means love in Vietnamese. Praba and Mai wanted the name of their brand to reflect their own personal experience and passion towards Vietnamese cuisine. It represents the love and affection they want customers to experience while dining at their restaurants.</li></ul>                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">TENTANG KAMI</p>
                      <p> 
                        YEU SAIGON GROUP didirikan dan membuka restoran pertamanya, YEU SAIGON CAF pada Juni 2015 di Gran Rubina Business Park. Per September 2018, kami sekarang mengoperasikan 10 restoran di seluruh Jakarta secara total dan terdiri dari 4 merek restoran yang berbeda (YEU SAIGON CAFÉ, SAIGON DELIGHT, MADAME MAI, COM NGON).
                        
                        Ide restoran, yang dimulai hanya sebagai hasrat untuk masakan telah menunjukkan kesuksesan besar karena rasa lapar Indonesia akan masakan Vietnam yang sehat dan otentik.
                        
                        Dengan fokus menghadirkan makanan Vietnam yang sehat dan otentik ke semua segmen pasar, YEU SAIGON GROUP bertujuan untuk memiliki 14 gerai pada akhir 2018 dan 40 gerai di seluruh negeri pada akhir 2020. Akhirnya, pemilik Praba dan Mai ingin memperluas internasional.
                    <h6> NILAI INTI: </h6>
                    <ul><li>Ciptakan organisasi yang menyenangkan dan membahagiakan bagi semua karyawannya</li></ul>
                    <ul><li>Bawa kembali dan promosikan metode memasak yang jujur ​​untuk menyediakan masakan yang bergizi dan sehat</li></ul>
                    <ul><li>Kembangkan rantai pasokan yang mengintegrasikan kesejahteraan hewan dan praktik pertanian berkelanjutan yang menghadirkan produk pertanian ke meja yang sehat bagi pelanggan kami</li></ul>
                    <h6> MASA DEPAN: </h6>
                    <ul><li>Fokus kami saat ini adalah mengembangkan model bisnis kami di pasar Jakarta yang lebih luas. Diperkirakan pada akhir 2018, kami akan berada di 14 outlet dan pada 2020 di 40 outlet di seluruh tanah air.​</li></ul>
                    <h6> OBJEKTIF: </h6>
                    <ul><li>Bawa berbagai masakan Vietnam sehat otentik ke pasar F&B Indonesia.</li></ul>
                    <ul><li>Jadikan produk kami dapat diakses oleh semua segmen pasar.</li></ul>
                    <ul><li>Menawarkan makanan sehat kepada pelanggan dengan menanam makanan menggunakan praktik pertanian berkelanjutan dan melarang penggunaan MSG.</li></ul>
                    <h6>KUNCI SUKSES:</h6>
                    <ul><li>Kejujuran metode memasak kami - tanpa MSG, menanam herbal organik kami sendiri, memanggang roti kami sendiri.</li></ul>
                    <ul><li>Keaslian Vietnam – mempekerjakan koki Vietnam dan memastikan kualitas dengan membuat hidangan kami dari awal. </li></ul>
                    <ul><li>Prioritas kami selalu produk dan pelanggan. Pertimbangan komersial selalu menjadi yang kedua, dan sebagai hasilnya, pelanggan kami melihat dan merasakan perbedaannya.</li></ul>
                    <h6>CERITA INSPIRASI PENDIRI:</h6>
                    <ul><li>Kedua pemilik grup tersebut adalah pasangan suami istri Praba Madhavan dan Le Thi Tuyet Mai. Termotivasi oleh keinginan untuk membawa masakan Vietnam otentik ke pasar Indonesia, mereka memulai perjalanan F&B mereka dengan pengalaman minimal dengan pembukaan YEU SAIGON CAFE pada bulan Juni 2015. Ini diikuti oleh merek baru mereka YEU SAIGON DELIGHT kemudian pada tahun 2015 dan pada bulan November 2017 , 
                      konsep ketiga mereka MADAME MAI diluncurkan. Com Ngon, konsep terbaru diluncurkan pada Juli 2018.</li></ul>
                    <ul><li>Strateginya adalah menghadirkan masakan Vietnam yang otentik dan sehat ke Indonesia dan membuatnya tersedia untuk sebanyak mungkin segmen pasar.</li></ul>
                    <ul><li>Komitmen untuk menyediakan masakan otentik dan sehat adalah lengkap dengan mempekerjakan koki Vietnam di semua outlet, impor saus dan bumbu Vietnam yang penting dan tanaman lokal Vietnam yang tumbuh yang memberikan masakan Vietnam cita rasa otentik dan fitur yang menyehatkan. Dapur juga benar-benar bebas MSG.</li></ul>
                    <ul><li>Kata 'Yeu' berarti cinta dalam bahasa Vietnam. Praba dan Mai ingin nama merek mereka mencerminkan pengalaman dan hasrat pribadi mereka terhadap masakan Vietnam. Ini mewakili cinta dan kasih sayang yang mereka inginkan untuk dialami pelanggan saat bersantap di restoran mereka.</li></ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <img src="./images/Saigon2.jpg" alt="profile" class="grid-margin" width="312" height="312"/> 
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <img src="./images/Saigon3.jpg" alt="profile" class="grid-margin" width="312" height="312"/>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <img src="./images/Saigon4.jpeg" alt="profile" class="grid-margin" width="312" height="312"/>     
            </div>
          </div>
      </div>
    </div>
  </div>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>