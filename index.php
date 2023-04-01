<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Adopt A Pet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets-template/img/favicon.png" rel="icon">
  <link href="assets-template/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets-template/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets-template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets-template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets-template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets-template/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets-template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets-template/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center text-decoration-none">
        <img src="assets-template/img/paw.png" alt="black paw print of a cat">
        <span class="d-none d-sm-inline-block">Adopt A Pet</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="./index.php">Home</a></li>
          <li><a class="nav-link" href="./contact.php">Contact</a></li>
          <!-- if statement to check if already logged in: then show Logout-Button! -->
          <li><a class="getstarted text-decoration-none" href="./login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome to our pet adoption site</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are a team of commited individuals looking to get our pets adopted</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="./login.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center text-decoration-none">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <!-- <img src="assets-template/img/adoption.png" class="img-fluid" alt=""> -->
          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="500" viewBox="0 0 779 669" xmlns:xlink="http://www.w3.org/1999/xlink"><title>pet_adoption</title><ellipse cx="629" cy="638" rx="150" ry="31" fill="#f2f2f2"/><path d="M256.37325,505.528c.894,2.08315,1.84014,4.18894,2.81131,6.25818l-2.08144.9769c-.98214-2.09262-1.93829-4.221-2.84273-6.32777Z" transform="translate(-210.5 -115.5)" fill="#e6e6e6"/><path d="M627.59969,338.87572c1.31318,2.798,2.57432,5.64886,3.7492,8.47451l-2.1233.88244c-1.75874-4.23086-3.704-8.49448-5.75619-12.61863l2.0595-1.02364Q626.58511,336.714,627.59969,338.87572ZM618.86122,322.252l-1.98459,1.16212c-2.33-3.98137-4.82261-7.9236-7.40827-11.72047l1.90047-1.29378C613.98307,314.23912,616.50424,318.22624,618.86122,322.252ZM636.294,360.47105c1.49443,4.41816,2.85227,8.9364,4.036,13.42971l-2.22338.58464c-1.17041-4.44126-2.513-8.90839-3.99154-13.27694Zm-33.213-61.38259-1.80822,1.42163c-2.84626-3.61751-5.85606-7.18183-8.94549-10.59344l1.70377-1.54377C597.15669,291.82457,600.20165,295.42944,603.081,299.08846Zm40.35165,88.489c.87288,4.571,1.59681,9.23419,2.15245,13.85856l-2.282.27481c-.55038-4.57352-1.2666-9.1833-2.12919-13.70329ZM584.26384,278.309l-1.59311,1.658c-3.31744-3.18925-6.78645-6.30242-10.30875-9.25167l1.47717-1.76234C577.40079,271.93586,580.90812,275.08312,584.26384,278.309Zm62.51459,137.122c.23454,4.6616.30959,9.385.22211,14.03964l-2.2997-.043c.08641-4.6014.01256-9.27206-.21952-13.88087ZM562.79249,260.33289l-1.352,1.85987c-3.72476-2.70416-7.589-5.31435-11.485-7.75457l1.22064-1.94952C555.11664,254.95762,559.02432,257.597,562.79249,260.33289Zm83.46466,183.15493c-.40722,4.64716-.97964,9.33342-1.703,13.93055l-2.27129-.35776c.71455-4.54461,1.28166-9.17876,1.68458-13.77431ZM539.04935,245.457l-1.085,2.02722c-4.0594-2.17256-8.24416-4.23172-12.43967-6.12088l.94306-2.097C530.712,241.17722,534.94487,243.25967,539.04935,245.457ZM641.90209,471.19778c-1.03532,4.53765-2.241,9.1007-3.58435,13.5634l-2.20143-.66339c1.32751-4.41186,2.5199-8.924,3.54392-13.41172ZM513.4914,233.94668l-.79886,2.15587c-4.31771-1.5999-8.74556-3.07245-13.16205-4.37546l.65144-2.20573C504.64776,230.83966,509.12543,232.32851,513.4914,233.94668ZM633.81768,498.04619c-1.64385,4.35881-3.45891,8.71487-5.39316,12.94643l-2.0907-.956c1.913-4.18437,3.70649-8.49125,5.33231-12.80128ZM486.59652,226.01431l-.4997,2.24365c-4.49036-.998-9.07917-1.85425-13.63742-2.545l.34472-2.27262C477.414,224.13789,482.05473,225.0045,486.59652,226.01431ZM622.16388,523.5388c-2.21987,4.09338-4.60983,8.15994-7.10129,12.08686l-1.94222-1.23152c2.46375-3.88291,4.82672-7.90393,7.02311-11.95219Zm-163.30132-301.722-.18748,2.29059c-4.59419-.37627-9.258-.59707-13.86464-.65623l.03-2.29852C449.49923,221.21215,454.21626,221.43527,458.86256,221.81685ZM607.15347,547.19623c-2.756,3.74909-5.67752,7.44936-8.68267,10.9979l-1.75409-1.486c2.97051-3.50871,5.85961-7.16711,8.58466-10.87377ZM430.80281,221.45446l.12982,2.29545c-4.60345.25934-9.25667.68217-13.83081,1.25764l-.28687-2.28127C421.4415,222.14357,426.14809,221.71553,430.80281,221.45446ZM589.05713,568.56465c-3.2473,3.33911-6.65251,6.606-10.12,9.71111l-1.53348-1.71356c3.42844-3.06943,6.79407-6.29912,10.00577-9.60045ZM402.96694,224.95935l.44418,2.25706c-4.51865.88924-9.06209,1.94763-13.50451,3.14463l-.59778-2.21969C393.80181,226.93054,398.39677,225.86037,402.96694,224.95935ZM568.17088,587.26267c-3.67406,2.85791-7.496,5.62526-11.35928,8.22408L555.528,593.579c3.81983-2.56977,7.59834-5.30555,11.23041-8.13136ZM375.90285,232.253l.74859,2.1737c-4.34592,1.49773-8.70164,3.16749-12.94745,4.96177l-.89464-2.11757C367.10188,235.45592,371.50728,233.76781,375.90285,232.253ZM544.91543,602.91175c-4.02543,2.32459-8.18865,4.54456-12.3741,6.59824l-1.01247-2.06474c4.13942-2.03022,8.25582-4.22573,12.23618-6.52483ZM351.1192,245.21806c-4.11568,2.0755-8.20784,4.31607-12.16243,6.6595l-1.17234-1.97731c3.99946-2.37069,8.13745-4.63649,12.29892-6.736Zm-23.84233,14.13306c-3.79517,2.61835-7.54259,5.39659-11.13792,8.25972l-1.43192-1.79843c3.63582-2.89578,7.42572-5.70636,11.26481-8.354Zm-21.67918,17.26753c-3.39095,3.107-6.717,6.37085-9.88448,9.70164L294.047,284.736c3.2041-3.36906,6.56773-6.67038,9.99771-9.81184ZM286.519,296.684c-2.93583,3.54824-5.78284,7.24083-8.4626,10.974l-1.86819-1.34067c2.71046-3.77609,5.59013-7.51005,8.55911-11.09865Zm-16.155,22.50549c-2.42474,3.91979-4.74169,7.96882-6.88721,12.03165l-2.03255-1.07254c2.16879-4.10972,4.512-8.20455,6.964-12.16937Zm-12.93771,24.509c-1.86686,4.20737-3.61263,8.534-5.18914,12.86059l-2.16018-.78693c1.59431-4.37585,3.35987-8.75147,5.247-13.0068Zm-9.48936,26.04685c-1.27873,4.4299-2.42073,8.95561-3.39322,13.45138l-2.247-.48573c.9833-4.54673,2.13763-9.12411,3.43115-13.60311ZM242.07457,396.848c-.66334,4.56522-1.17736,9.20547-1.52682,13.792l-2.29293-.174c.35379-4.63945.87312-9.3318,1.54479-13.9493Zm-2.10326,27.65892c-.03365,4.61074.094,9.27847.37863,13.875l-2.29475.14189c-.28785-4.64835-.41668-9.37011-.38372-14.03385Zm1.71445,27.6927c.60133,4.56449,1.37,9.16577,2.28452,13.67752l-2.25337.45732c-.92529-4.56374-1.70268-9.218-2.31076-13.83386Zm5.50741,27.16514c1.22283,4.434,2.616,8.88608,4.14178,13.2337l-2.17049.76073c-1.54268-4.39676-2.95163-8.89969-4.1883-13.383Z" transform="translate(-210.5 -115.5)" fill="#e6e6e6"/><path d="M518.566,613.25943l.86774,2.129c-2.14976.87625-4.32509,1.72048-6.46616,2.50957l-.79522-2.15679C514.28887,614.96052,516.44011,614.12573,518.566,613.25943Z" transform="translate(-210.5 -115.5)" fill="#e6e6e6"/><path d="M626.64648,517.02148c-.22949-.375-5.64062-9.41015-7.5166-28.17187-1.7207-17.21289-.61426-46.22656,14.43262-86.69824,28.50586-76.6709-6.56934-138.53321-6.92773-139.14942l1.73046-1.0039c.09082.15625,9.14161,15.92871,14.48829,41.04394a179.06122,179.06122,0,0,1-7.416,99.80664c-28.457,76.54-7.30078,112.77344-7.084,113.13086Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><circle cx="405" cy="130" r="13" fill="#6c63ff"/><circle cx="446" cy="178" r="13" fill="#3f3d56"/><circle cx="418" cy="210" r="13" fill="#6c63ff"/><circle cx="452" cy="237" r="13" fill="#6c63ff"/><circle cx="408" cy="279" r="13" fill="#3f3d56"/><path d="M634.5,517.5s-13-32,26-56Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M618.512,516.91953s-5.91642-34.02934-51.7085-33.73768Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M532.69062,278.35265a1.98455,1.98455,0,0,0-1.41386,3.67142,58.907,58.907,0,0,1,17.56285,14.98427c22.42,28.45833,14.59174,72.01423-17.4849,97.28481a79.02152,79.02152,0,0,1-50.25878,17.3642c21.53827,6.06894,46.96081,1.29359,67.44765-14.84632,32.07664-25.27058,39.9049-68.82649,17.4849-97.28481A60.3136,60.3136,0,0,0,532.69062,278.35265Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M548.8396,297.43932c22.42,28.45833,14.59176,72.01423-17.4849,97.28481A80.15635,80.15635,0,0,1,490.52228,411.669a79.17253,79.17253,0,0,0,49.02112-17.37584c32.07666-25.27058,39.90488-68.82649,17.48491-97.28482a59.3748,59.3748,0,0,0-24.2-18.18693l-.1477-.03652a1.983,1.983,0,0,0-1.40065,3.67194A58.90656,58.90656,0,0,1,548.8396,297.43932Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><polygon points="238.906 138 252.14 160.922 265.374 183.844 238.906 183.844 212.438 183.844 225.672 160.922 238.906 138" fill="#6c63ff"/><polygon points="287.176 138 300.411 160.922 313.645 183.844 287.176 183.844 260.708 183.844 273.942 160.922 287.176 138" fill="#6c63ff"/><polygon points="237.376 149.956 245.541 164.099 253.706 178.241 237.376 178.241 221.045 178.241 229.21 164.099 237.376 149.956" fill="#3f3d56"/><polygon points="286.983 149.956 295.148 164.099 303.313 178.241 286.983 178.241 270.653 178.241 278.818 164.099 286.983 149.956" fill="#3f3d56"/><path d="M566.634,416.57186A93.0962,93.0962,0,1,1,533.34474,345.231,93.09455,93.09455,0,0,1,566.634,416.57186Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M533.34474,345.231c-7.78789,20.33815-31.617,35.13816-59.80339,35.13816s-52.01549-14.8-59.80338-35.13816a93.08632,93.08632,0,0,1,119.60677,0Z" transform="translate(-210.5 -115.5)" opacity="0.1"/><ellipse cx="263.04135" cy="207.97925" rx="62.49272" ry="49.5632" fill="#3f3d56"/><circle cx="233.73442" cy="201.0835" r="11.63658" fill="#fff"/><circle cx="292.34829" cy="201.0835" r="11.63658" fill="#fff"/><circle cx="233.73442" cy="201.0835" r="7.32673" fill="#3f3d56"/><circle cx="292.34829" cy="201.0835" r="7.32673" fill="#3f3d56"/><circle cx="249.97203" cy="217.45714" r="2.15492" fill="#6c63ff"/><path d="M459.64421,332.41027c-4.22744,1.91923-7.02649,5.82616-11.46759,7.50581a21.01978,21.01978,0,0,1-14.08487.26158c-.79176-.262-1.1312.98616-.34372,1.24677a22.21087,22.21087,0,0,0,14.14278-.03487,21.39631,21.39631,0,0,0,6.02885-3.20316c2.11725-1.60715,3.92126-3.54475,6.37713-4.6597.75656-.34347.10008-1.45813-.65258-1.11643Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><path d="M461.32819,331.86078a24.59093,24.59093,0,0,0-6.19323,2.3415,21.23649,21.23649,0,0,1-7.14075,2.009,20.9816,20.9816,0,0,1-13.35545-3.38044c-.69878-.45621-1.34741.66279-.65258,1.11642a22.17019,22.17019,0,0,0,13.34063,3.60459,21.20538,21.20538,0,0,0,6.67694-1.44741c2.5703-1.02549,4.90427-2.52093,7.66816-2.99688.81838-.14092.47143-1.38713-.34372-1.24676Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><path d="M460.17325,331.02288c-3.291,3.10593-4.6585,7.59207-8.14932,10.5979a20.96148,20.96148,0,0,1-13.49549,5.07111.64687.64687,0,0,0,0,1.293A22.19956,22.19956,0,0,0,451.804,343.4564a21.34453,21.34453,0,0,0,4.49693-4.63869c1.627-2.303,2.705-4.916,4.78661-6.88057.6064-.57231-.30909-1.4854-.91426-.91426Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><circle cx="272.6628" cy="217.45714" r="2.15492" fill="#6c63ff"/><path d="M483.338,333.5267c2.42887,1.10269,4.22461,3.00869,6.31171,4.60916a21.47606,21.47606,0,0,0,6.09427,3.2537,22.163,22.163,0,0,0,14.14278.03487c.78621-.26019.44939-1.50924-.34372-1.24677a21.01394,21.01394,0,0,1-14.08486-.26158c-4.44156-1.68177-7.23924-5.58616-11.4676-7.50581-.75193-.34137-1.40995.77259-.65258,1.11643Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><path d="M481.96293,333.10754c2.65618.4574,4.90067,1.85761,7.35726,2.8725a21.40077,21.40077,0,0,0,6.98783,1.57179,22.16939,22.16939,0,0,0,13.34063-3.60459c.69408-.45314.0469-1.57309-.65257-1.11642a20.91,20.91,0,0,1-13.35546,3.38044,21.54019,21.54019,0,0,1-7.14075-2.009,24.72676,24.72676,0,0,0-6.19323-2.3415c-.81382-.14014-1.1634,1.10561-.34371,1.24676Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><path d="M482.54732,331.93714c2.07948,1.96257,3.158,4.58112,4.78661,6.88057a21.41737,21.41737,0,0,0,4.49693,4.63869,22.20133,22.20133,0,0,0,13.27553,4.52845.64687.64687,0,0,0,0-1.293,20.89821,20.89821,0,0,1-13.49549-5.07111c-3.47628-3.01771-4.85933-7.49288-8.14932-10.5979-.60491-.5709-1.52092.34171-.91426.91426Z" transform="translate(-210.5 -115.5)" fill="#6c63ff"/><ellipse cx="233.73442" cy="390.7166" rx="17.23937" ry="9.91264" fill="#3f3d56"/><ellipse cx="292.34829" cy="390.7166" rx="17.23937" ry="9.91264" fill="#3f3d56"/><ellipse cx="261.31742" cy="217.02992" rx="14.22248" ry="8.1887" fill="#6c63ff"/><path d="M210.5,115.5v556h745v-556Zm96,7a12,12,0,1,1-12,12A12,12,0,0,1,306.5,122.5Zm-72,24a12,12,0,1,1,12-12A12,12,0,0,1,234.5,146.5Zm24-12a12,12,0,1,1,12,12A12,12,0,0,1,258.5,134.5Zm413,381h-401v-298h401Z" transform="translate(-210.5 -115.5)" fill="#f2f2f2"/><rect x="705" y="10" width="24" height="3" fill="#fff"/><rect x="705" y="19" width="24" height="3" fill="#fff"/><rect x="705" y="28" width="24" height="3" fill="#fff"/><rect x="524" y="97" width="181" height="9" fill="#fff"/><rect x="524" y="128" width="181" height="9" fill="#fff"/><rect x="524" y="159" width="181" height="9" fill="#fff"/><rect x="524" y="190" width="181" height="9" fill="#fff"/><rect x="524" y="221" width="181" height="9" fill="#fff"/><rect x="524" y="252" width="181" height="9" fill="#fff"/><rect x="524" y="283" width="181" height="9" fill="#fff"/><rect x="524" y="314" width="181" height="9" fill="#fff"/><rect x="524" y="345" width="181" height="9" fill="#fff"/><rect x="524" y="376" width="181" height="9" fill="#fff"/><circle cx="84" cy="421" r="12" fill="#fff"/><circle cx="125" cy="421" r="12" fill="#fff"/><circle cx="166" cy="421" r="12" fill="#fff"/><rect x="524" y="480" width="181" height="51" fill="#6c63ff"/><path d="M824.45949,554.94635l2.02432,70.85117,21.59274,82.99709s-4.72341,14.17023-1.34955,17.5441,18.89365,9.44682,18.89365,9.44682L852.8,558.995Z" transform="translate(-210.5 -115.5)" fill="#2f2e41"/><path d="M871.33928,725.99294s7.7003,16.94066-3.08012,18.48072-60.57571,5.64689-57.49559-3.08012,40.55493-16.94066,40.55493-16.94066Z" transform="translate(-210.5 -115.5)" fill="#2f2e41"/><path d="M900.03408,492.19245s-8.09728,43.86025-13.49546,51.28275,2.69909,61.40435,2.69909,61.40435,12.14591,77.59891,6.74773,89.74482-4.04864,8.09728-3.37387,14.845,2.02432,12.14592,0,18.21887-2.02432,5.39819-2.69909,8.772,0,21.59274,0,21.59274-29.01524,10.1216-33.73865-4.72341c0,0,6.74773-9.44682,4.72341-16.86933a89.865,89.865,0,0,1-3.37387-22.94228V699.34779l-31.03956-116.061-7.4225-41.83593s2.02432-42.5107,9.44682-46.55934S900.03408,492.19245,900.03408,492.19245Z" transform="translate(-210.5 -115.5)" fill="#2f2e41"/><path d="M887.88816,754.67918s10.1216,22.26751-4.04864,24.29183-79.62322,7.4225-75.57458-4.04864S861.572,752.65486,861.572,752.65486Z" transform="translate(-210.5 -115.5)" fill="#2f2e41"/><circle cx="664.56043" cy="155.39504" r="26.99092" fill="#ffb9b9"/><path d="M894.027,282.82222l-.50246,34.46925-33.09122.11206s8.39824-26.98331,4.63655-32.62572S894.027,282.82222,894.027,282.82222Z" transform="translate(-210.5 -115.5)" fill="#ffb9b9"/><path d="M844.70269,336.31987s23.61705-30.36479,41.83593-17.5441,24.9666,43.18547,24.9666,43.18547l-4.04864,85.02141s-10.12159,12.14592-4.04864,20.24319,9.44683,6.073,4.72342,12.14592-10.1216,10.79637-8.09728,12.82069-2.02432,3.37386-2.02432,3.37386l-71.526,2.02432s2.02432-2.69909-4.04864-10.79637,1.34955-18.89364,0-22.94228-2.69909.67477-3.37386-8.77205S844.70269,336.31987,844.70269,336.31987Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M851.45042,510.41132s-1.34955,16.86933-11.47115,19.56842c-3.79559,1.01216-6.64229-.91727-8.718-3.72443a16.57138,16.57138,0,0,1-.52977-18.59163l2.5-4.00009Z" transform="translate(-210.5 -115.5)" fill="#ffb9b9"/><path d="M913.86693,302.24382s.67477,13.49547,0,15.51979-1.34955,4.04863,0,6.07295.67477,8.772-.67478,9.44683,2.6991,6.74773,1.34955,10.79637-2.69909,5.39818-3.37387,6.74773-1.76175,3.76746-1.76175,3.76746-19.831-42.22953-36.02554-32.10793-29.01524,13.49546-29.01524,13.49546S853.13735,288.74836,913.86693,302.24382Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M884.5143,333.62077s21.59274,2.02432,20.24319,30.36479,2.02432,72.8755,2.02432,72.8755-37.11252,56.68093-43.18548,60.72957-6.74773,3.37387-6.073,6.74773,1.34955,6.073-1.34954,8.772a23.3,23.3,0,0,1-5.39819,4.04864s-21.59274-7.4225-19.56842-14.17023,11.47115-17.5441,11.47115-17.5441,16.19455-26.31615,16.86932-30.36479.67478-3.37387,2.6991-5.39819,7.4225-10.12159,7.4225-14.17023V422.69082l-5.65712-68.514a19.86228,19.86228,0,0,1,5.26755-15.38234C872.49111,335.43465,877.34483,332.76044,884.5143,333.62077Z" transform="translate(-210.5 -115.5)" fill="#3f3d56"/><path d="M857.65393,250.08016a10.998,10.998,0,0,1-10.19137-2.33349c-2.63765-2.50631-3.5242-6.8488-1.64741-9.96592,1.62068-2.69173,4.77266-4.00817,7.772-4.944a68.80882,68.80882,0,0,1,20.43591-3.11709c3.30389-.001,6.7538.28062,9.58105,1.99013,1.39891.84586,2.58369,2.00756,3.96676,2.87908,2.54311,1.60253,5.59684,2.13506,8.389,3.24832a21.51956,21.51956,0,0,1,12.26423,12.98767,25.93075,25.93075,0,0,1,1.19189,6.10035,33.425,33.425,0,0,1-2.91624,16.568c-3.76509,8.2097-10.93115,15.11262-11.94369,24.08757-3.85751-3.23825-4.98825-8.67008-7.97611-12.72463a16.49814,16.49814,0,0,0-9.0068-6.11335,5.24446,5.24446,0,0,1-2.72745-1.21917,4.51859,4.51859,0,0,1-.85352-2.45785l-1.85195-13.33426c-.37689-2.7137-.886-5.67932-2.96847-7.45968A10.55454,10.55454,0,0,0,864.75,252.353a71.31681,71.31681,0,0,0-11.54241-1.88212" transform="translate(-210.5 -115.5)" fill="#2f2e41"/><path d="M903.5,446.5l-37.87935,49.15676S900.5,466.5,903.5,446.5Z" transform="translate(-210.5 -115.5)" opacity="0.1"/><polygon points="656.641 276.575 657 323 635 356 653 319 656.641 276.575" opacity="0.1"/></svg>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Testimonials</h2>
          <h3 data-aos="fade-up">What they are saying about us</h3>
        </header>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Thank you for your work, Adopt A Pet! I already adopted three cats through your service and I will come back again!
                </p>
                <div class="profile mt-auto">
                  <img src="assets-template/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I loved working with Adopt A Pet. The whole adoption process went smoothly and I felt very well informed and cared for by their customer service agent.
                </p>
                <div class="profile mt-auto">
                  <img src="assets-template/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Adopt A Pet helped me find the perfect dog for my family.
                </p>
                <div class="profile mt-auto">
                  <img src="assets-template/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center text-decoration-none">
              <img src="assets-template/img/paw.png" alt="">
              <span>Adopt A Pet</span>
            </a>
            <p>Browse through our site and adopt a forever friend!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="login.php">Login</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Adopt A Pet</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://christine.codefactory.live">Christine Weidhofer</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets-template/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets-template/vendor/aos/aos.js"></script>
  <script src="assets-template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets-template/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets-template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets-template/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets-template/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets-template/js/main.js"></script>

</body>

</html>