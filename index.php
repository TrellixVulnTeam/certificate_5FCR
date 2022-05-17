<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Basic Upload pdf file PHP PDO by devbanban.com 2021</title>
        <!-- sweet alert  -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10"> <br>
                    <h3>PHP PDO Basic Upload PDF File</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="doc_name" required class="form-control" placeholder="ชื่อเอกสาร"> <br>
                         <font color="red">*อัพโหลดได้เฉพาะ .pdf เท่านั้น </font>
                            <!-- <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div> -->
                        <input type="file" name="doc_file[]" required   class="form-control" accept="application/pdf"  multiple> <br>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <h3>รายการเอกสาร </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ลำดับ</th>
                                <th width="85%">ชื่อเอกสาร</th>
                                <th width="10%">เปิดดู</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                        </tbody>
                    </table>
                    <br>
                    <center>PHP PDO Basic Upload PDF file  by devbanban.com 2021
                    <br>
                      <a href="https://devbanban.com/?cat=250" target="_blank">คอร์สออนไลน์ คลิก</a>  ||  
                      <a href="https://devbanban.com/?p=3196" target="_blank">ระบบพร้อมใช้ คลิก</a>
                      </center>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 

if (isset($_POST['doc_name'])) {
    echo "<pre>"; 
    print_r($_FILES['doc_file']);
    echo "</pre>";
    // require_once 'connect.php';
     //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
   //$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    // move_uploaded_file($_FILES['doc_file']['tmp_name'],$path_copy); 

     //ประกาศตัวแปรรับค่าจากฟอร์ม
    $doc_name = $_POST['doc_name'];
    
    //sql insert
    // $stmt = $conn->prepare("INSERT INTO tbl_pdf (doc_name, doc_file)
    // VALUES (:doc_name, '$newname')");
    // $stmt->bindParam(':doc_name', $doc_name, PDO::PARAM_STR);
    // $result = $stmt->execute();
    // $conn = null; //close connect db
    //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
            // if($result){
            //     echo '<script>
            //          setTimeout(function() {
            //           swal({
            //               title: "อัพโหลดไฟล์เอกสารสำเร็จ",
            //               type: "success"
            //           }, function() {
            //               window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
            //           });
            //         }, 1000);
            //     </script>';
            // }else{
            //    echo '<script>
            //          setTimeout(function() {
            //           swal({
            //               title: "เกิดข้อผิดพลาด",
            //               type: "error"
            //           }, function() {
            //               window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
            //           });
            //         }, 1000);
            //     </script>';
            // } //else ของ if result

        
        // }else{ //ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
        //     echo '<script>
        //                  setTimeout(function() {
        //                   swal({
        //                       title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
        //                       type: "error"
        //                   }, function() {
        //                       window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
        //                   });
        //                 }, 1000);
        //             </script>';
        // } //else ของเช็คนามสกุลไฟล์
   
    //} // if($upload !='') {

    } //isset
?>