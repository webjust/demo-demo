@extends('blog.layout.master')

@section('title', '用户中心')

@section('content')
    <div class="blog-main">
        <div class="row blank-page user_center">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h2>Mark</h2>
                <div class="user_photo">
                    <img src="{{asset('img/user.jpg')}}" alt="..." class="img-circle img-responsive">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">个人信息</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="">文章数量</label>
                                <ul>
                                    <li>已发布文章数量：<a href="#">10</a></li>
                                    <li>待审核文章数量：<a href="#">5</a></li>
                                    <li>审核未通过文章数量：<a href="#">5</a></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">邮箱地址</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱地址"
                                       value="wely@163.com" disabled/>
                            </div>
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input type="text" class="form-control" id="" placeholder="请输入用户名" value="wely"
                                       disabled/>
                            </div>
                            <div class="form-group">
                                <label for="">个人信息</label>
                                <textarea class="form-control" rows="5" disabled>昝辉，网名Zac，SEO每天一贴作者。祖籍湖北，生于北京，1992年北航电子工程系本科毕业，1995年北京电影学院硕士毕业。在中央电视台工作两年后于1997年到新加坡工作。2000年做自己的第一个个人爱好网站，从此一发不可收拾。2003年辞职，创建中新网络科技Silver Media(新加坡商业登记号RCB No. 53008942D)，全职SEO（搜索引擎优化），虚拟主机等以网络为中心的生意。目前是新加坡发展最快的虚拟主机和服务器提供商。</textarea>
                            </div>
                            <p><a href="./user_edit.html">修改个人信息</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><!-- /.blog-main -->
@endsection