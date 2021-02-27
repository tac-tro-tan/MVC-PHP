<?php


include_once("E_Student.php");

class Model_Student
{
	public function __construct()
	{}
	
	public function getAllStudent()
	{
		$chuoi_ket_noi =  mysqli_connect('localhost', 'root', '',"dulieu1") or die('Không thể kết nối CSDL:' . mysql_error());
	$result = mysqli_query($chuoi_ket_noi,"Select * from student"); //lấy dữ liệu trong bảng 
	$num = mysqli_num_rows($result);
	$count=1;
		if($num > 0){
			while ( $row= mysqli_fetch_array($result)) {
			# code...
			
			$a[$count]=new Entity_Student($row['id'], $row['name'],$row['age'],$row['univercity']);
			$count++;
			}
		}
		return $a;
		mysqli_close($chuoi_ket_noi);
	}
	
	public function getStudentDetail($stid)
	{
		//Gia su rang ta load data tu CSDL
		$allStudent = $this->getAllStudent();
		return $allStudent[$stid];
	}
}

?>