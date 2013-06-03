<!DOCTYPE html>
<?php
$students = array("陈启明", "寥予科", "向子卿",
		  "严欣辰", "林承宇", "王鸿伟",
		  "贺天行", "孙雪瞳", "邱霖",
		  "范雨晨", "陆怡菲", "胡张广达",
		  "刘彦",   "缪沛晗", "刁克路",
		  "刘景铖", "陶亦心", "周志明",
		  "张捷钧");
?>
<html>
  <head>
    <title> Fatworm Scoring </title>
    <link rel="stylesheet" href="<?php echo CSS_BASE."kube.css";?>"/>
    <meta charset="utf-8"/>
  </head>
  <body>
    <div class="row">
      <div class="third centered">
	<form method="post" action="?action=post_score">
	  <fieldset>
	    <table class="width-100 bordered striped">
	      <caption class="quarter centered"> 学生打分表 </caption>
	      <thead class="thead-black">
		<tr>
		  <th> 姓名 </th>
		  <th> 分数 </th>
		</tr>
	      </thead>
	      <tbody>
		<?php 
		   foreach ($students as $key => $stu) {
		?>
		<tr>
		  <?php echo "<td><label for=\"$key\">$stu</label></td>";?>
		  <td><input type="number" value="0" name="<?php echo "$key";?>" class="width-50" min="0" max="5"/></td>
		</tr>
		<?php };?>
	      </tbody>
	      <tfoot class="thead-black">
		<tr>
		  <td><label for="student_no">你的学号</label></td>
		  <td><input type="text" name="student_no" class="width-50"/></td>
		</tr>
	      </tfoot>
	    </table>
	  </fieldset>
	  <input type="submit" class="btn btn-full" value="提交"/>
	</form>
      </div>
    </div>
  </body>
</html>
