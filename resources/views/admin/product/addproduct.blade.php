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

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า product</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า product</h6>
                </div>
                <div class="card-body">
                  <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="กรอกชื่อ">                    
                    </div>
                    <div class="row mt-3">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                    <div class="form-group">
                      <label for="price">price</label>
                      <input type="text" class="form-control" name="price" id="price" aria-describedby="price" placeholder="กรอกราคา">                    
                    </div>
                    <div class="row mt-3">
                      @error('price')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                    <div class="form-group">
                      <label for="typeproduct_at">typeproduct</label>
                      <select name="typeproduct_at" class="form-control" id="">
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                      </select>
                                
                    </div>
                    <div class="row mt-3">
                      @error('typeproduct_at')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                    <div class="form-group">
                      <label for="image">image</label>
                      <input type="file" class="form-control" name="image" id="image" aria-describedby="image" placeholder="image">                    
                    </div>
                   <div class="row mt-3">
                      @error('image')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                    </div>
                 
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('typeproduct.index') }}" class="btn btn-primary">ย้อนกลับ</a>
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