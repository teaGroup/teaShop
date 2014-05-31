<?php
class consigneeinfoModel extends Model{
	protected $_validate = array(
    array('Consi_Name','require','收货人姓名不能为空！'),
    array('Consi_Addr','require','收货人地址不能为空！'),
    array('Consi_Tel','require','电话/手机不能为空！'),
    array('Consi_PostCode','/^[1-9]\d{5}$/','请输入正确的邮政编码',2,'regex',1),
	);
}
?>