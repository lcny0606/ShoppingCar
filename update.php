<?php 
	require_once "conn.php";
	
/* $file = $_FILES['file'];//�õ����������
//�õ��ļ�����
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1)); //�õ��ļ����ͣ����Ҷ�ת����Сд
$allow_type = array('jpg','jpeg','gif','png'); //���������ϴ�������
//�ж��ļ������Ƿ������ϴ�
if(!in_array($type, $allow_type)){
  //�������������ֱ��ֹͣ��������
  return ;
}
//�ж��Ƿ���ͨ��HTTP POST�ϴ���
if(!is_uploaded_file($file['tmp_name'])){
  //�������ͨ��HTTP POST�ϴ���
  return ;
}
$upload_path = "images/"; //�ϴ��ļ��Ĵ��·��
//��ʼ�ƶ��ļ�����Ӧ���ļ���
if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
  echo "Successfully!";
}else{
  echo "Failed!";
} */
$username=$_POST['username'];
$file=$_FILES['file'];
$name=$file['name'];
$type=substr($name,strrpos($name,'.')+1);
$size=$file['size'];
$upload_path="images/";
$allow_type=array('jpg','png','gif');
if(in_array($type,$allow_type)){
	
	if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
		$sql="update persons set avatar='$name' where FirstName='$username'";
		mysql_query($sql,$con);

		echo "<script language='javascript'>window.location.href='person.php';</script>";
	}else{
		return;
		}
	
	
}else{
	return;
}


?>