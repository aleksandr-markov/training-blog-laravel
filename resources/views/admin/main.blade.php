@extends('layouts.admin')
@section('title', 'Main')
@section('content')
    {{--    {{ \Illuminate\Support\Facades\Auth::user() }}--}}
    <!-- Main content -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-info">
                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Posts</span>
                            <span class="info-box-number">{{ $postCount }}</span>

                            {{--                            <div class="progress">--}}
                            {{--                                <div class="progress-bar" style="width: 70%"></div>--}}
                            {{--                            </div>--}}
                            {{--                            <span class="progress-description">--}}
                            {{--                  70% Increase in 30 Days--}}
                            {{--                </span>--}}
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-success">
                        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">{{ $likeCount }}</span>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-warning">
                        <span class="info-box-icon"><i class="fas fa-align-left"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Categories</span>
                            <span class="info-box-number">{{ $categoryCount }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-danger">
                        <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Comments</span>
                            <span class="info-box-number">{{ $commentCount }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-bullhorn"></i>
                                Last comments
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="callout callout-danger">
                                <h5>Lorem ipsum.</h5>

                                <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                    entire
                                    soul,
                                    like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="callout callout-info">
                                <h5>Lorem ipsum.</h5>

                                <p>Follow the steps to continue to payment.</p>
                            </div>
                            <div class="callout callout-warning">
                                <h5>Lorem ipsum.</h5>

                                <p>This is a yellow callout.</p>
                            </div>
                            <div class="callout callout-success">
                                <h5>Lorem ipsum.</h5>

                                <p>This is a green callout.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-bullhorn"></i>
                                Most popular posts
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="callout callout-danger">
                                <h5>Lorem ipsum.</h5>

                                <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                    entire
                                    soul,
                                    like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="callout callout-info">
                                <h5>Lorem ipsum.</h5>

                                <p>Follow the steps to continue to payment.</p>
                            </div>
                            <div class="callout callout-warning">
                                <h5>Lorem ipsum.</h5>

                                <p>This is a yellow callout.</p>
                            </div>
                            <div class="callout callout-success">
                                <h5>Lorem ipsum.</h5>

                                <p>This is a green callout.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <!-- /.content -->

@endsection
