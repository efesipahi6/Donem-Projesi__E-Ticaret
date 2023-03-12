<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'baglanti.php'; 
$urunid = rand();
    
    $targetDir = "resimler/$urunid"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['resim']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['resim']['name'] as $key=>$val){ 
            // DOSYA EKLEME
            $fileName = basename($_FILES['resim']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // DOĞRULUK KONTROLÜ
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // VERİTABANINA DOSYA AKTARIMI
                if(move_uploaded_file($_FILES["resim"]["tmp_name"][$key], $targetFilePath)){ 
                    // SQL VERİTABANINA RESMİ YAZDIRMA
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
            // VERİTABANI ÜRÜN İSMİ EKLEME
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
    $id = $_POST['id'];
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
        'beden' => $beden,
        'id' => $id
    ];
    $sorgu = $db->prepare("UPDATE urunler SET urunid=:urunid, baslik=:baslik, kategori=:kategori, aciklama=:aciklama, fiyat=:fiyat, renk=:renk, beden=:beden WHERE id=:id");
    $sorgu->execute($data);
    header('Location: urunler.php');
 
?>