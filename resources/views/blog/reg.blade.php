@extends('blog.layout.master')

@section('title', '注册')

@section('content')
    <div class="blog-main">
        <div class="row blank-page">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h2>注册</h2>
                <div class="alert_msg">
                    <div class="alert alert-warning" role="alert">用户名密码不能为空</div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">注册</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input type="text" class="form-control" id="" placeholder="请输入用户名">
                            </div>
                            <div class="form-group">
                                <label for="">邮箱地址</label>
                                <input type="email" class="form-control" id="" placeholder="请输入邮箱地址">
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input type="password" class="form-control" id="" placeholder="请输入密码">
                            </div>
                            <div class="form-group">
                                <label for="">再次输入密码</label>
                                <input type="password" class="form-control" id="" placeholder="请输入密码">
                            </div>
                            <button type="submit" class="btn btn-default">注册</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><!-- /.blog-main -->
@endsection