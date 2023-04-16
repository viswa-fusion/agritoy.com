<?php
function Decrypt_viswa($message) {
     $data=md5(sha1(base64_encode(base64_encode(md5(md5(base64_encode(sha1(md5(sha1(base64_encode(base64_encode(md5(md5(base64_encode(sha1($message))))))))))))))));
     return $data;
}
?>