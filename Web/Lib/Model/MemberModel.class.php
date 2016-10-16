<?php
class MemberModel extends Model
{
 protected $tableName = 'user';
 protected $_validate = array(
        array('realname','require','请填写真实姓名！'), //默认情况下用正则进行验证
      //   array('realname','','用户名已存在！',0,'unique',self::MODEL_BOTH), // 在新增的时候验证name字段是否唯一
      //   array('sex','require','请填写性别！'), //默认情况下用正则进行验证
      //   array('age','require','请填写年龄！'), //默认情况下用正则进行验证
      //   array('usercode','require','请填账号！'), //默认情况下用正则进行验证
      //   array('password','require','请填写密码！','','',self::MODEL_INSERT), //默认情况下用正则进行验证
     	// array('password2','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
      //   array('pet','require','请填写用户名！'), //默认情况下用正则进行验证
      //   array('password','require','请填写密码！','','',self::MODEL_INSERT), //默认情况下用正则进行验证
     	// array('password2','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
      //   array('tel','require','请填写用户名！'), //默认情况下用正则进行验证
       	
    );

 	// protected $_auto = array(
  //   	array('password','md5',1,'function') , //添加时用md5函数处理 
  //       array('update_at','time',2,'function'), //更新时
  //       array('create_at','time',1,'function'), //新增时
  //       array('login_ip','get_client_ip',3,'function'), //新增时
  //     //  array('password','',2,'ignore')   //怎么不能用？
  //   );

  public function pd(){
       foreach ($_POST as $v) {
           if($v==null){
              return "所有项为必填项!";
           }
        }
        if ($_POST['password']!=$_POST['password2']) {
              return "两次密码不一致";
         } 

        $userinfo = M('user')->select();
        foreach ($userinfo as $v) {
          if ($v['email']==$_POST['email']) {
            return "此邮箱已注册";
          }
          if ($v['tel']==$_POST['tel']) {
            return "此手机号已注册";
          }
          if ($v['usercode']==$_POST['usercode']) {
            return "此账号已注册";
          }
        }
        return 1; 
  }


}
?>