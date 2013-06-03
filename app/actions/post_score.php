<?php

$storage = new SaeStorage($_accessKey=SAE_ACCESSKEY, $_secretKey=SAE_SECRETKEY);

$stu_no = $_POST['student_no'];

if ($storage->fileExists("personal", "$stu_no.dat")) {
  echo "你已经上传过打分表";
};

$students = array("陈启明", "寥予科", "向子卿",
		  "严欣辰", "林承宇", "王鸿伟",
		  "贺天行", "孙雪瞳", "邱霖",
		  "范雨晨", "陆怡菲", "胡张广达",
		  "刘彦",   "缪沛晗", "刁克路",
		  "刘景铖", "陶亦心", "周志明",
		  "张捷钧");

$content = "";

for($i = 0; $i < count($students); $i++) {
  $content .= "$i\t".$students[$i]."\t".$_POST[$i]."\n";
}

$storage->write("personal", "$stu_no.dat", $content);

echo "打分成功";
