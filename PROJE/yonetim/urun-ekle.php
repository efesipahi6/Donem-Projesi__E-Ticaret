<?php 
include_once 'baglanti.php'; 

if(isset($_POST['urun-ekle'])){ 

    $urunid = rand();
    $baslik = $_POST["baslik"];
    $kategori = $_POST["kategori"];
    $aciklama = $_POST["aciklama"];
    $fiyat = $_POST["fiyat"];
    $renk = $_POST["renk"];
    $beden = $_POST["beden"];

    $data = [
        'urunid' => $urunid,
        'baslik' => $baslik,
        'kategori' => $kategori,
        'aciklama' => $aciklama,
        'fiyat' => $fiyat,
        'renk' => $renk,
        'beden' => $beden
    ];
    $sorgu = $db->prepare("INSERT INTO urunler (urunid, baslik, kategori, aciklama, fiyat, renk, beden) VALUES ($urunid, '$baslik', $kategori, '$aciklama', '$fiyat', '$renk', '$beden')");
    $sorgu->execute($data);


    $targetDir = "resimler/$urunid"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['resim']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['resim']['name'] as $key=>$val){ 
            // DOSYA YÜKLEME
            $fileName = basename($_FILES['resim']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // DOĞRULUK KONTROLÜ
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // DOSYAYI VERİTABANINA YAZDIRMA
                if(move_uploaded_file($_FILES["resim"]["tmp_name"][$key], $targetFilePath)){ 
                    // SQL YAZDIRMA
                    $insertValuesSQL .= "('".$urunid."', '".$urunid.$fileName."'),"; 
                }else{ 
                    $errorUpload .= $_FILES['resim']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['resim']['name'][$key].' | '; 
            } 
        } 
         
        // HATA
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // RESMİ VERİTABANINA ALMA
            $insert = $db->query("INSERT INTO urunresimler (urun_id, resim) VALUES $insertValuesSQL"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
                header('Location: urunler.php');
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
?>