<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{

    public function login()
    {
        return view('/login/login');
    }

    public function loginAdd()
    {
        $data =request()->input();
        $res =DB::table('login')->insert($data);
        if ($res) {
            echo("<script>alert('注册成功');history.go();location.href='/login/arr';</script>");
        }else{
            echo("<script>alert('注册失败');history.go();location.href='/login/login';</script>");
        }
        
    }

    public function arr()
    {
        return view('/login/arr');
    }

    public function arrAdd()
    {
        $data =request()->input();
        $where =[
            'name'=>$data['name'],
            'pwd' =>$data['pwd'],
        ];
        $res =DB::table('login')->where($where)->first();
        if ($res) {
            echo("<script>alert('登录成功');history.go();location.href='/login/login';</script>");
        }else{
            echo("<script>alert('登录失败');history.go();location.href='/login/arr';</script>");
        }
    }
}