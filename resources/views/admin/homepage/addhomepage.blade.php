@include('layouts.admin.head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.admin.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.admin.header')
        <!-- Topbar -->
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้า Homepage</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า Homepage</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Homepage</h6>
                </div>
                <div class="card-body">
                  <form  action="{{route('addhomepage.create')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">test</label>
                      <input type="text" class="form-control" id="test" name="test" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">สินค้าแนะนำ</label>
                      <input type="text" class="form-control" id="popular" name="popular" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อสินค้า</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">รูปภาพ</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ราคา</label>
                      <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="กรอกข้อมูล">                    
                    </div>
                     
                  
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('homepage.index') }}" class="btn btn-primary">ย้อนกลับ</a>
                  </form>
                </div>
              </div>

           
              
            </div>

          
          </div>
         
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
   
      @include('layouts.admin.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>