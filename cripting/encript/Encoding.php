<?php
function Encrypt_viswa($message) {
     $data=md5(sha1(base64_encode(base64_encode(md5(md5(base64_encode(sha1(md5(sha1(base64_encode(base64_encode(md5(md5(base64_encode(sha1($message))))))))))))))));
     $dataMain1=str_replace("b","@",$data);
     $dataMain2=str_replace("a","#",$dataMain1);
     $dataMain=str_replace("c","~",$dataMain2);
     return $dataMain;
}
?>