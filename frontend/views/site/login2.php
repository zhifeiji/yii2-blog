<?php
use yii\helpers\Html;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <form class="layui-form" action="/index.php?r=site/login" method="post">
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名</label>
                    <div class="layui-input-block">
                        <input type="text" name="LoginForm[username]" placeholder="用户名" autocomplete="off" class="layui-input" value="hdq">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-input-block">
                        <input type="text" name="LoginForm[password]" placeholder="密码" autocomplete="off" class="layui-input" value="123">
                        <a href="" >忘记密码？</a>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <input type="checkbox" name="LoginForm[rememberMe]" title="记住我" checked value="1">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn"  type="submit">登录</button>
                        <button class="layui-btn layui-btn-primary" name="btn_reg">注册</button>
                    </div>
                </div>
                
            </form>
             
        </div>
    </div>
    
</div>
    
    
