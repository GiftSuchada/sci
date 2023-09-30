<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Program</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <style>
        h1,h2,h3,h4,h5,h6,nav,.nav,.menu,button,.button,.btn,.price,._heading,.wp-block-pullquote blockquote,    blockquote,    label,    legend,    a,    .card-header,    th,    li {
            font-family: Itim, "Open Sans script=all rev=1" !important;
            font-weight: 500 !important;}    
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="top-nav #topbar-transparent" style="background-color: rgb(255, 247, 255)">
      <a class="navbar-brand" href="index.php" >
        <div style="display: flex; flex-direction:row;">
            <img class="d-lg-block d-md-none d-sm-none d-none" 
            src="https://i.ytimg.com/vi/Xzrq4yA7AJA/maxresdefault.jpg" 
            style= "
            width: 50px;
            height: 50px;
            border-radius: 25px;">
            <div class="d-lg-block">
                <div class="px-4 "> 
                  <span >วิทยาการคอมพิวเตอร์</span><br>
                  <small>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</small>
                </div>   
            </div>
        </div>
      </a>
    </nav>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">หน้าหลัก</a>
        <button class="navbar-toggler" type="button" 
          data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" 
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                เกี่ยวกับคณะ
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">ประวัติความเป็นมา</a></li>
                <li><a class="dropdown-item" href="#">ปรัชญา/ วิสัยทัศน์/ พันธกิจ</a></li>
                <li><a class="dropdown-item" href="#">ติดต่อคณะ / สถานที่ตั้ง</a></li>
                <li><a class="dropdown-item" href="#">ทำเนียบผู้บริหาร</a></li>
                <li><a class="dropdown-item" href="#">ผังองค์กร</a></li>
                <li><a class="dropdown-item" href="#">ผู้บริหาร</a></li>
                <li><a class="dropdown-item" href="#">บุคลากร</a></li>
                <li><a class="dropdown-item" href="#">ประกาศเจตนารมย์ ป้องกันการทุจริต</a></li>
                <li><a class="dropdown-item" href="#">กฎหมายอื่นๆ ที่เกี่ยวข้อง</a></li>
                <li><a class="dropdown-item" href="#">ไลฟ์สไตล์</a></li>
              </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">หลักสูตร</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">สมัครเรียน</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">นักศึกษา</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">อบรมและบริการวิชาการ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">วิจัยและนวัตกรรม</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- body -->
    <div class="alert alert-warning alert-dismissible fade show" >
      <span style="display: flex; justify-content: center; font-size: 100px">หลักสูตร</span>
    </div>

    <!-- card 1-->
    <div class="card-group" 
    style=" padding: 20px; margin: 20px; margin-top: -30px;">
      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาการจัดการภัยพิบัติ</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="dmpm/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาคหกรรมศาสตร์</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="he/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขานวัตกรรมชีวผลิตภัณฑ์</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="biot/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>
    </div>

    <!-- card 2 -->
    <div class="card-group" 
    style=" padding: 20px; margin: 20px; margin-top: -30px;">
      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขานวัตกรรมดิจิทัลและวิศวกรรมซอฟต์แวร์</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="dise/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขานวัตกรรมอาหารและเครื่องดื่มเพื่อสุขภาพ</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="fb/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขามาตรวิทยาอุตสาหกรรมและระบบคุณภาพ</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="imq/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>
    </div>

    <!-- card 3 -->
    <div class="card-group" 
    style=" padding: 20px; margin: 20px; margin-top: -30px;">
      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาวิทยาการคอมพิวเตอร์</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="cs/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาวิทยาศาสตร์และนวัตกรรมเพื่อการพัฒนา</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="sid/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาวิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="set/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>
    </div>

    <!-- card 4 -->
    <div class="card-group" 
    style=" padding: 20px; margin: 20px; margin-top: -30px;">
      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาอาชีวอนามัยและความปลอดภัย</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="ohs/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาเทคโนโลยีสารสนเทศ</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="it/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>

      <div class="card text-center" style="margin: 20px;">
        <img src="https://www.graduateth.com/data/seksan116/1024_14716043321.jpg" 
            class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">สาขาโภชนาการและการกำหนดอาหาร</h5>
          <p class="card-text"><small class="text-body-secondary">หลักสูตรปริญญาตรี 4 ปี</small></p>
          <a href="nu/index.php" class="btn btn-primary"">รายละเอียด</a>
        </div>
      </div>
    </div>


    <!--  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
  </body>
</html>
