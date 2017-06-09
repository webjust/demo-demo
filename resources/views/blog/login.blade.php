@extends('blog.layout.master')

@section('content')
    <div class="blog-main">
        <div class="row blank-page">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h2>登录</h2>
                <div class="alert_msg">
                    <div class="alert alert-warning" role="alert">用户名密码不能为空</div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">登录</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">邮箱地址</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱地址">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 记住我
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><!-- /.blog-main -->
@endsection