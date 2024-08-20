<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Danh mục</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Danh mục</h6>
         </nav>
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
               <div class="input-group input-group-outline">
                  <label class="form-label">Tìm kiếm</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
               <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                     <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer">Cài đặt</i>
                  </a>
               </li>
               <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-bell cursor-pointer">Thông báo</i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                     <!-- thông báo -->
                     <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                           <div class="d-flex py-1">
                              <div class="my-auto">
                                 <img src="../model/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                 <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold">New message</span> from Laur
                                 </h6>
                                 <p class="text-xs text-secondary mb-0">
                                    <i class="fa fa-clock me-1"></i>
                                    13 minutes ago
                                 </p>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item d-flex align-items-center">
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <div class="container-fluid py-4">
      <div class="row">
         <div class="col-12">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                     <h6 class="text-white text-capitalize ps-3">Quản lý danh mục</h6>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="align-middle text-center text-sm" style="width: 100px;">
                                 <p class="text-xs text-secondary mb-0">Chọn tất cả</p><input type="checkbox" class=""
                                    id="checkbox1"><label for="checkbox1"></label>
                              </th>
                              <th
                                 class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                 Tên
                                 danh mục</th>

                              <th
                                 class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Số
                                 lượng sản phẩm</th>
                              <th
                                 class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Gim trang chủ</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7">tool</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- danh mục ở đây -->
                           <?php foreach ($show_category as $danhmuc) : ?>
                           <tr>
                              <th class="align-middle text-center text-sm"><input type="checkbox" class=""
                                    id="checkbox1"><label for="checkbox1"> </label></th>
                              <td>
                                 <div class="d-flex px-2 py-1" style="justify-content: center;">
                                    <div class="d-flex flex-column justify-content-center">
                                       <h6 class="mb-0 text-sm"><?php echo $danhmuc['tendanhmuc'] ?></h6>
                                    </div>
                                 </div>
                              </td>
                              <td class="align-middle text-center text-sm">
                                 <span
                                    class="text-secondary text-xs font-weight-bold"><?php echo $danhmuc['sohoa'] ?></span>
                              </td>
                              <td class="align-middle text-center">
                                 <span class="text-secondary text-xs font-weight-bold">
                                    <?php
                          if ($danhmuc['gimtrangchu'] == "co") {
                            echo "Đã gim trang chủ";
                          } elseif ($danhmuc['gimtrangchu'] == "khong") {
                            echo "Danh mục Không được ghim";
                          } elseif ($danhmuc['gimtrangchu'] == "uutien") {
                            echo "Danh mục ưu tiên";
                          }
                          ?>
                                 </span>
                              </td>
                              <td class="align-middle">
                                 <button style="background-color: #EC407A; border: none;">
                                    <a href="?admin=category&act=gim&id=<?php echo $danhmuc['id'] ?>"
                                       class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                       data-original-title="Edit user" style="color:white !important">
                                       Gim
                                    </a>
                                 </button>
                                 <button style="background-color: #EC407A; border: none;">
                                    <a href="?admin=category&act=khonggim&id=<?php echo $danhmuc['id'] ?>"
                                       class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                       data-original-title="Edit user" style="color:white !important">
                                       bỏ ghim
                                    </a>
                                 </button>
                              </td>
                           </tr>
                           <?php endforeach; ?>
                           <!-- end danh mục -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end thêm danh mục -->
      <!-- danh mục -->
      <div class="row">
         <div class="col-12">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                     <h6 class="text-white text-capitalize ps-3">Thêm Danh Mục</h6>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">

                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th
                                 class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                 Nhập Tên danh mục</th>

                              <th
                                 class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Gim trang chủ</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7">tool</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- danh mục ở đây -->
                           <form action="?admin=category&act=themdanhmuc" method="post">
                              <tr>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <input type="text" class="mb-0 text-sm sua-input" placeholder=" Danh Mục..."
                                             style="border: none;" width="500" name="tendanhmuc">
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><label for="gim">Gim &nbsp
                                       </label><input id="gim" type="radio" name="gim[]" value="co"></span>
                                    <span class="text-secondary text-xs font-weight-bold"><label for="khong">Không &nbsp
                                       </label><input id="khong" type="radio" name="gim[]" value="khong"></span>
                                 </td>
                                 <td class="align-middle">
                                    &nbsp
                                    <button style="background-color: #EC407A; border: none; color:white;">
                                       Thêm Danh Mục
                                    </button>
                                 </td>
                              </tr>
                           </form>
                           <!-- end danh mục -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end danh mục -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer py-4  ">
         <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
            </div>
         </div>
      </footer>
   </div>

</main>