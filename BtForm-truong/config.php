

<div class="main-content">
    <div class="wrapper">
        
        <?php
  $ten = $_POST['ten'];
  $diachi = $_POST['diachi'];
  $dienthoai = $_POST['dienthoai'];
  $gioitinh = $_POST['gioitinh'];
  $quocgia = $_POST['quocgia'];
  $hocvan = $_POST['hocvan'];
  $note = $_POST['note'];



  ?>

  <form action="btform8.html" method="POST" style="border: 1px solid grey; width: 60%; margin: 3%; padding:3%">
    <b style="font-weight: bolder;">Bạn đã nhập thành công, đây là thông tin của bạn:</b><br>

    <b>Họ tên:
    <?php if (isset($ten)) {
          echo $ten;
        } ?></b><br>


    <b>Địa chỉ:
     <?php if (isset($diachi)) {
          echo $diachi;
        } ?></b><br>


    <b>Điện thoại:

    <?php if (isset($dienthoai)) {
          echo $dienthoai;
        } ?></b><br>



    <b>Gender:

     <?php if (isset($gioitinh)) {
          echo $gioitinh;
        } ?></b><br>



    <b>Country:

    <?php if (isset($quocgia)) {
          echo $quocgia;
        } ?></b><br>



    <b>Note:

    <?php if (isset($note)) {
          echo $note;
        } ?></b><br>



   



  </form>
    </div>
</div>
